<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Str;
use App\Models\Model;
use App\Models\ModelAuthenticate;


class Penulis extends ModelAuthenticate
{

	protected $table = "penulis";
	protected $primaryKey ="id";
 
    function handleUploadFoto()
    {
        if (request()->hasFile('poto')) {
            $poto = request()->file('poto');
            $destination = "penulis";
            $randomStr = Str::random(5);
            $filename = time() . "-"  . $randomStr . "."  . $poto->extension();
            $url = $poto->storeAs($destination, $filename);
            $this->poto = "app/" . $url;
            $this->save();

        }
    }

}
