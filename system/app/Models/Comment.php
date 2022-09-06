<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Str;
use App\Models\Model;
use App\Models\Blog;


class Comment extends Model
{

	protected $table = "comment";


    function Blog()
    {
        return $this->belongsTo(Blog::class, 'id_blog');
    }
}
