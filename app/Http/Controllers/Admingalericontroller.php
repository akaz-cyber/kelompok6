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
      return redirect('admingaleri/galeri')->with('suksess','gambar berhasil di tambahkan');
    }
   public function edit($id){
     $edit = Uploadgambar::findorfail($id);
     return view('admingaleri/editgaleri',compact('edit'));
   }
   public function update(Request $request,$id){
    $update = Uploadgambar::findorfail($id);
    $first = $update->gambar;

    $edit =[
           'gambar'=>$first,
           'keterangan'=>$request['keterangan'],
    ];
    if($request->hasfile('gambar')){
        $request->gambar->move(public_path().'/galery',$first);
    }
    $update->update($edit);
    return redirect('admingaleri/galeri')->with('suksess','gambar berhasil di edit');
   }
   public function delete($id){
      $delete=Uploadgambar::findorfail($id);

      $file= public_path('/galery/').$delete->gambar;

      if (file_exists($file)){

        @unlink($file);
      }
      $delete->delete();
      return back()->with('suksess','gambar berhasil di berhasil di hapus');
   }
}
