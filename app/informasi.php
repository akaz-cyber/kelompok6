<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Informasi extends Model
{
    protected $table ='informasi';
    protected $fillable = ['gambar','judul','tanggal','nama','shortartikel','content'];
}
