<?php

namespace App\Http\Controllers;
use App\Models\Minuman;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MinumanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $minuman=Minuman::orderby('nama','asc')->paginate(9);
        return view('admin.minuman.index',compact('minuman'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.minuman.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $simpan = $request->all();
        $validasi = Validator::make($simpan,[
            'nama' => 'required|max:150',
            'harga' => 'required',
            'stok' => 'required'
        ]);

        if($validasi->fails()){
            return  redirect()->route('minuman.create')->withInput()->withErrors($validasi);
        }
        Minuman::create($simpan);
        return redirect()->route('minuman.index')->with('success','Minuman berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $minuman = Minuman::FindOrFail($id);
        return view('admin.minuman.show',compact('minuman'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $minuman = Minuman::FindOrFail($id);
        return view('admin.minuman.edit',compact('minuman'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $minuman = Minuman::find($id);

        if ($minuman) {
            $request->validate([
                'nama' => 'required|max:150',
                'harga' => 'required',
                'stok' => 'required',
            ]);

            // Update the minuman's data
            $minuman->update([
                'nama' => $request->input('nama'),
                'harga' => $request->input('harga'),
                'stok' => $request->input('stok')
            ]);

            // Optionally, you can return a response or redirect to a success page
            return redirect()->route('minuman.index')->with('success', 'Minuman berhasil diedit');
        } else {
            // Handle the case where the minuman with the provided ID does not exist
            return redirect()->route('minuman.index')->with('error', 'Minuman tidak ditemukan');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Minuman::FindOrFail($id);
        $data->delete();
        return redirect()->route('minuman.index')->with('status','Minuman berhasil dihapus');
    }
}
