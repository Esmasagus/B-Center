<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $suppliers=Supplier::orderby('name','asc')->paginate(9);
        // $search = $request->get('keyword');
        // if($search)
        // {
        //     $suppliers = Supplier::where('name','LIKE',"%$search%")->paginate(1);
        // }

        return view('admin.suppliers.index',compact('suppliers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.suppliers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $simpan = $request->all();
        $validasi = Validator::make($simpan,[
            'name' => 'required|max:150',
            'no_telp' => 'required|max:13|unique:suppliers',
            'email' => 'required|email|max:100|unique:suppliers',
            'address' => 'required'
        ]);

        if($validasi->fails()){
            return  redirect()->route('supplier.create')->withInput()->withErrors($validasi);
        }
        Supplier::create($simpan);
        return redirect()->route('supplier.index')->with('success','supplier berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $supplier = Supplier::FindOrFail($id);
        return view('admin.suppliers.show',compact('supplier'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $supplier = Supplier::FindOrFail($id);
        return view('admin.suppliers.edit',compact('supplier'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $supplier = Supplier::find($id);

        if ($supplier) {
            $request->validate([
                'name' => 'required|max:150',
                'no_telp' => 'required|max:13|unique:suppliers,no_telp,' . $id,
                'email' => 'required|email|max:100|unique:suppliers,email,' . $id,
                'address' => 'required'
            ]);
        
            // Update the supplier's data
            $supplier->update([
                'name' => $request->input('name'),
                'no_telp' => $request->input('no_telp'),
                'email' => $request->input('email'),
                'address' => $request->input('address')
            ]);
        
            // Optionally, you can return a response or redirect to a success page
            return redirect()->route('supplier.index')->with('success', 'supplier updated successfully');
        } else {
            // Handle the case where the supplier with the provided ID does not exist
            return redirect()->route('supplier.index')->with('error', 'supplier not found');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Supplier::FindOrFail($id);
        $data->delete();
        return redirect()->route('supplier.index')->with('status','supplier berhasil dihapus');
    }
}
