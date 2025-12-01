<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    protected $fillable = ['judul', 'isi', 'kategori_id', 'gambar', 'video'];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }
}

