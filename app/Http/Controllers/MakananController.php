<?php

namespace App\Http\Controllers;
use App\Models\Makanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MakananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $makanan=Makanan::orderby('nama','asc')->paginate(9);
        return view('admin.makanan.index',compact('makanan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.makanan.create');
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
            return  redirect()->route('makanan.create')->withInput()->withErrors($validasi);
        }
        Makanan::create($simpan);
        return redirect()->route('makanan.index')->with('success','Makanan berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $makanan = Makanan::FindOrFail($id);
        return view('admin.makanan.show',compact('makanan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $makanan = Makanan::FindOrFail($id);
        return view('admin.makanan.edit',compact('makanan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $makanan = makanan::find($id);

        if ($makanan) {
            $request->validate([
                'nama' => 'required|max:150',
                'harga' => 'required',
                'stok' => 'required',
            ]);
        
            // Update the makanan's data
            $makanan->update([
                'nama' => $request->input('nama'),
                'harga' => $request->input('harga'),
                'stok' => $request->input('stok')
            ]);
        
            // Optionally, you can return a response or redirect to a success page
            return redirect()->route('makanan.index')->with('success', 'Makanan berhasil diedit');
        } else {
            // Handle the case where the makanan with the provided ID does not exist
            return redirect()->route('makanan.index')->with('error', 'Makanan tidak ditemukan');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Makanan::FindOrFail($id);
        $data->delete();
        return redirect()->route('makanan.index')->with('status','Makanan berhasil dihapus');
    }
}
