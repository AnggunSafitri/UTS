<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Comment;

class BlogPenulisController extends Controller
{
   
    public function index()
    {
        $data['list_blog'] = Blog::all();
        $data['penulis'] = auth()->guard('penulis')->user();
        return view('penulis.blog.index', $data);
    }

   
    public function create()
    {
        //
    }

   
    public function store(Request $request)
    {
        $blog = NEW Blog;
        $blog->id_penulis = request('id_penulis');
        $blog->judul = request('judul');
        $blog->detail = request('detail');
        $blog->handleUploadGambar();
        $blog->save();

        return back()->with('success', 'Data Berhasil Disimpan');
    }

    public function show(Blog $blog)
    {
        $data['blog'] = $blog;
        $data['penulis'] = auth()->guard('penulis')->user();
        $data['list_comment'] = Comment::all();
        return view('penulis.blog.show', $data);
    }

    
    public function edit($id)
    {
        //
    }

    
    public function update(Blog $blog)
    {
        $blog->id_penulis = request('id_penulis');
        $blog->judul = request('judul');
        $blog->detail = request('detail');
        $blog->handleUploadGambar();
        $blog->save();

        return back()->with('success', 'Data Berhasil Disimpan');
    }

   
    public function destroy($blog)
    {
        Blog::destroy($blog);
        return back()->with('danger', 'Data Berhasil Di Hapus');
    }

    public function balasCommnet()
    {
        $comment = New Comment;
        $comment->id_blog = request('id_blog');
        $comment->nama = request('nama');
        $comment->email = request('email');
        $comment->message = request('message');
        $comment->status = 2;
        $comment->save();

        return back();
    }
}
