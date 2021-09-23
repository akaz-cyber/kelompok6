<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class informasi extends Model
{
   protected $table = 'informasi';
   protected $fillable =['galery','judul','tanggal','content','user_id'];

}
