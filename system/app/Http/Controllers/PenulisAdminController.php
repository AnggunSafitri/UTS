<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penulis;

class PenulisAdminController extends Controller
{
    
    public function index()
    {
        $data['list_penulis'] = Penulis::all();
        return view('admin.penulis.index', $data);
    }

    
    public function create()
    {
        return view('admin.penulis.create');
    }

    
    public function store(Request $request)
    {
        $penulis = New Penulis;
        $penulis->nama = request('nama');
        $penulis->email = request('email');
        $penulis->username = request('username');
        $penulis->password = request('password');
        $penulis->no_hp = request('no_hp');
        $penulis->handleUploadFoto();
        $penulis->save();

        return redirect('admin/penulis')->with('success', 'Data Berhasil Di Simpan');
    }

    
    public function show(Penulis $penulis)
    {
        $data['penulis'] = $penulis;

        return view('admin.penulis.show', $data);
    }

    
    public function edit(Penulis $penulis)
    {
        $data['penulis'] = $penulis;

        return view('admin.penulis.edit', $data);
    }

    
    public function update(Penulis $penulis)
    {
        $penulis->nama = request('nama');
        $penulis->email = request('email');
        $penulis->username = request('username');
        $penulis->no_hp = request('no_hp');
        $penulis->handleUploadFoto();
        $penulis->save();

        return redirect('admin/penulis')->with('success', 'Data Berhasil Di Simpan');
    }

    
    public function destroy($penulis)
    {
        Penulis::destroy($penulis);
        return back()->with('danger', 'Data Berhasil Di Hapus');
    }
}
