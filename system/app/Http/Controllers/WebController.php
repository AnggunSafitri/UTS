<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Comment;

class WebController extends Controller
{
    
    public function index()
    {
        $data['list_blog'] = Blog::all();
        return view('web.index', $data);
    }

    public function blog()
    {
        $data['list_blog'] = Blog::all();
        return view('web.blog', $data);
    }
    
    public function show(Blog $blog)
    {
        $data['list_blog'] = Blog::all();
        $data['list_comment'] = Comment::all();
        $data['blog'] = $blog;

        $data['data_comment'] = Comment::all();
        $data['list_comen'] = Comment::orderBy('id', 'ASC')->take(1)->get();


        return view('web.detail-blog', $data);
    }

    public function comment()
    {
        $comment = New Comment;
        $comment->id_blog = request('id_blog');
        $comment->nama = request('nama');
        $comment->email = request('email');
        $comment->message = request('message');
        $comment->status = 1;
        $comment->save();

        return back();
    }

    
}
