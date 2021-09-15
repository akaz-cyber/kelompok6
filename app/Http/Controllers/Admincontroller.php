<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Admincontroller extends Controller
{
public function create(Request $request){
\App\Jadwal::create($request->all());
return redirect('/dassbord')->with('suksess','jadwal berhasil di tambahkan');
}

}
