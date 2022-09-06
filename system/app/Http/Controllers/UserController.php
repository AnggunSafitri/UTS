<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
   
    public function index()
    {
        $data['list_user'] = User::all();
        return view('admin.user.index',$data);
    }

   
    public function create()
    {
        return view('admin.user.create');
    }

   
    public function store(Request $request)
    {
        $user = New User;
        $user->nama = request('nama');
        $user->username = request('username');
        $user->password = bcrypt(request('password'));
        $user->email = request('email');
        $user->save();

        return redirect('admin/user')->with('success', 'Data Berhasil Di Simpan');
    }

    
    public function show(User $user)
    {
        $data['user'] = $user;
        return view('admin.user.show', $data);
    }

   
    public function edit(User $user)
    {
        $data['user'] = $user;
        return view('admin.user.edit', $data);
    }

    
    public function update(User $user)
    {
        $user->nama = request('nama');
        $user->username = request('username');
        $user->email = request('email');
        $user->save();

        return redirect('admin/user')->with('success', 'Data Berhasil Di Simpan');
    }

    
    public function destroy($user)
    {
        User::destroy($user);

        return back()->with('danger', 'Data Berhasil Di Hapus');
    }
}
