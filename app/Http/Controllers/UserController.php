<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $users=User::orderby('name','asc')->paginate(9);
        $search = $request->get('keyword');
        if($search)
        {
            $users = User::where('name','LIKE',"%$search%")->paginate(1);
        }

        return view('admin.users.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $simpan = $request->all();
        $validasi = Validator::make($simpan,[
            'name' => 'required|max:150',
            'no_telp' => 'required|max:13|unique:users',
            'email' => 'required|email|max:100|unique:users',
            'password' => 'required|min:8',
        ]);

        if($validasi->fails()){
            return  redirect()->route('user.create')->withInput()->withErrors($validasi);
        }

        $simpan['password'] = bcrypt($simpan['password']);
        User::create($simpan);
        return redirect()->route('user.index')->with('success','user berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = User::FindOrFail($id);
        return view('admin.users.show',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = User::FindOrFail($id);
        return view('admin.users.edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = User::find($id);

        if ($user) {
            $request->validate([
                'name' => 'required|max:150',
                'no_telp' => 'required|max:13|unique:users,no_telp,' . $id,
                'email' => 'required|email|max:100|unique:users,email,' . $id,
                'password' => 'required|min:8',
            ]);
        
            // Update the user's data
            $user->update([
                'name' => $request->input('name'),
                'no_telp' => $request->input('no_telp'),
                'email' => $request->input('email'),
                'password' => Hash::make($request->input('password')), // Hash the password
            ]);
        
            // Optionally, you can return a response or redirect to a success page
            return redirect()->route('user.index')->with('success', 'User updated successfully');
        } else {
            // Handle the case where the user with the provided ID does not exist
            return redirect()->route('user.index')->with('error', 'User not found');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = User::FindOrFail($id);
        $data->delete();
        return redirect()->route('user.index')->with('status','User berhasil dihapus');
    }
}
