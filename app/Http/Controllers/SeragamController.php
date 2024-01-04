<?php

namespace App\Http\Controllers;
use App\Models\Seragam;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SeragamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $seragam=Seragam::orderby('nama','asc')->paginate(9);
        // $search = $request->get('keyword');
        // if($search)
        // {
        //     $seragams = Seragam::where('name','LIKE',"%$search%")->paginate(1);
        // }

        return view('admin.seragam.index',compact('seragam'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.seragam.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $simpan = $request->all();
        $validasi = Validator::make($simpan,[
            'nama' => 'required|max:150',
            'ukuran' => 'required',
            'stok' => 'required',
            'harga' => 'required'
        ]);

        if($validasi->fails()){
            return  redirect()->route('seragam.create')->withInput()->withErrors($validasi);
        }
        Seragam::create($simpan);
        return redirect()->route('seragam.index')->with('success','Seragam berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $seragam = Seragam::FindOrFail($id);
        return view('admin.seragam.show',compact('seragam'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $seragam = Seragam::FindOrFail($id);
        return view('admin.seragam.edit',compact('seragam'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $seragam = Seragam::find($id);

        if ($seragam) {
            $request->validate([
                'nama' => 'required|max:150',
                'ukuran' => 'required',
                'stok' => 'required',
                'harga' => 'required'
            ]);
        
            // Update the seragam's data
            $seragam->update([
                'nama' => $request->input('nama'),
                'ukuran' => $request->input('ukuran'),
                'stok' => $request->input('stok'),
                'harga' => $request->input('harga')
            ]);
        
            // Optionally, you can return a response or redirect to a success page
            return redirect()->route('seragam.index')->with('success', 'seragam updated successfully');
        } else {
            // Handle the case where the seragam with the provided ID does not exist
            return redirect()->route('seragam.index')->with('error', 'seragam not found');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Seragam::FindOrFail($id);
        $data->delete();
        return redirect()->route('seragam.index')->with('status','Seragam berhasil dihapus');
    }
}
