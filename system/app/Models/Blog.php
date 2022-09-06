<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Str;
use App\Models\Model;
use App\Models\Penulis;


class Blog extends Model
{

	protected $table = "blog";
	
    
    function handleUploadGambar()
    {
        if (request()->hasFile('poto')) {
            $poto = request()->file('poto');
            $destination = "blog";
            $randomStr = Str::random(5);
            $filename = time() . "-"  . $randomStr . "."  . $poto->extension();
            $url = $poto->storeAs($destination, $filename);
            $this->poto = "app/" . $url;
            $this->save();

        }
    }

    function Penulis()
    {
        return $this->belongsTo(Penulis::class, 'id_penulis');
    }
}
