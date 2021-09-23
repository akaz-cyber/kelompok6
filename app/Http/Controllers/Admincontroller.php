<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\informasi;
class Admincontroller extends Controller
{
public function create(Request $request){
\App\Jadwal::create($request->all());
return redirect('/dassbord')->with('suksess','jadwal berhasil di tambahkan');
}
public function edit($id){
$jadwal =\App\Jadwal::find($id);
 return view('admin/edit',['jadwal' => $jadwal]);
}
public function update(Request $request,$id){
    $jadwal =\App\Jadwal::find($id);
    $jadwal ->update($request->all());
    return redirect('/dassbord')->with('suksess','jadwal berhasil di update');
}


public function delete($id){
    $jadwal =\App\Jadwal::find($id);
    $jadwal->delete($jadwal);
    return redirect('/dassbord') -> with('suksess','jadwal berhasil di hapus');
}
public function info(){
    $info = \App\informasi::all();
    return view('subadmin.informasi',compact('info'));
}

}
