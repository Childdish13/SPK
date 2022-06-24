<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ebook extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    // protected $primaryKey = 'id_ebook';
    // public $incrementing = false;
    // protected $keyType = 'string';
}


 // $validatedData = $request->validate([
        //     'kd_mediakonten' => 'required|max:10',
        //     'judul' => 'required',
        //     'kategori' => 'required',
        //     'pengarang' => 'required',
        //     'penerbit' => 'required',
        //     'bahasa' => 'required',
        // ]);

        // Ebook::create($validatedData);