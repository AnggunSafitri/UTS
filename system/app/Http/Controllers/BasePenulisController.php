<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Penulis;

class BasePenulisController extends Controller
{
   
    public function index()
    {   
        $data['penulis'] = auth()->guard('penulis')->user();
        $data['list_blog'] = Blog::all();
        return view('penulis.index', $data);
    }

    public function profil(Penulis $penulis)
    {
        $data['penulis'] = $penulis;
        return view('penulis.profil', $data);
    }


    
    public function create()
    {
        //
    }

  
    public function store(Request $request)
    {
        //
    }

   
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        //
    }

    
    public function update(Penulis $penulis)
    {
        $penulis->nama = request('nama');
        $penulis->email = request('email');
        $penulis->username = request('username');
        $penulis->no_hp = request('no_hp');
        $penulis->tanggal_lahir = request('tanggal_lahir');
        $penulis->tempat_lahir = request('tempat_lahir');
        $penulis->tentang_saya = request('tentang_saya');
        $penulis->handleUploadFoto();
        $penulis->save();
        return back()->with('success', 'Data Berhasil Disimpan');

    }

   
    public function destroy($id)
    {
        //
    }
}
