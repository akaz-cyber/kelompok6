<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Uploadgambar;

class Admingalericontroller extends Controller
{
    public function galeri(){
        $data_gambar =\App\Uploadgambar::all();
        return view('admingaleri.galeri',compact('data_gambar'));
    }
   public function create(Request $request)
    {
      $nm = $request->gambar;
      $namafile = time().rand(100,999).".".$nm->getClientOriginalName();

      $data = new Uploadgambar;
      $data->gambar= $namafile;
      $data->keterangan =$request->keterangan;

      $nm->move(public_path().'/galery', $namafile);
      $data->save();
      return redirect('admingaleri/galeri')->with('suksess','informasi berhasil di tambahkan');
    }

}
