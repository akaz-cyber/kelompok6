<?php

namespace App\Http\Controllers;

use App\informasi;
use Illuminate\Http\Request;

class Adminartikelcontroller extends Controller
{
    public function tambah(Request $request){
        \App\informasi::create($request->all());
        return redirect('subadmin/informasi')->with('suksess','informasi berhasil di tambahkan');
    }

}
