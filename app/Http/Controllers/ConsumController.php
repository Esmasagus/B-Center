<?php

namespace App\Http\Controllers;
use App\Models\Consum;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ConsumController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $consum=Consum::orderby('nama','asc')->paginate(9);
        return view('admin.consum.index', compact('consum'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.consum.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $simpan = $request->all();
        $validasi = Validator::make($simpan,[
            'nama' => 'required|max:150',
            'kategori' => 'required',
            'harga' => 'required',
            'stok' => 'required'
        ]);

        if($validasi->fails()){
            return  redirect()->route('consum.create')->withInput()->withErrors($validasi);
        }
        Consum::create($simpan);
        return redirect()->route('consum.index')->with('success','consum berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $consum = Consum::FindOrFail($id);
        return view('admin.consum.show',compact('consum'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $consum = Consum::FindOrFail($id);
        return view('admin.consum.edit',compact('consum'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $consum = Consum::find($id);
        if ($consum) {
            $request->validate([
                'nama' => 'required|max:150',
                'kategori' => 'required' . $id,
                'harga' => 'required' . $id,
                'stok' => 'required'
            ]);

            // Update the consum's data
            $consum->update([
                'nama' => $request->input('nama'),
                'kategori' => $request->input('kategori'),
                'harga' => $request->input('harga'),
                'stok' => $request->input('stok')
            ]);

            // Optionally, you can return a response or redirect to a success page
            return redirect()->route('consum.index')->with('success', 'Consum updated successfully');
        } else {
            // Handle the case where the consum with the provided ID does not exist
            return redirect()->route('consum.index')->with('error', 'Consum not found');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Consum::FindOrFail($id);
        $data->delete();
        return redirect()->route('consum.index')->with('status','consum berhasil dihapus');
    }
}
