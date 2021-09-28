<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Informasi;
class Adminartikelcontroller extends Controller
{
    public function info(){
        $info = \App\Informasi::all();
        return view('subadmin.informasi',compact('info'));
    }
    public function create(Request $request){
        $nm = $request->gambar;
        $namafile = time().rand(100,999).".".$nm->getClientOriginalName();

        $data = new Informasi;
        $data->gambar= $namafile;
        $data->judul =$request->judul;
        $data->tanggal =$request->tanggal;
        $data->nama =$request->nama;
        $data->shortartikel =$request->shortartikel;
        $data->content =$request->content;

        $nm->move(public_path().'/gambarartikel', $namafile);
        $data->save();
        return redirect('subadmin/informasi')->with('suksess','gambar berhasil di tambahkan');
    }
    public function edit($id){
        $edit = Informasi::findorfail($id);
        return view('subadmin/editinformasi',compact('edit'));
    }
    public function update(Request $request,$id){
        $update = Informasi::findorfail($id);
        $first = $update->gambar;

        $edit =[
               'gambar'=>$first,
               'judul'=>$request['judul'],
               'tanggal'=>$request['tanggal'],
               'nama'=>$request['nama'],
               'shortartikel'=>$request['shortartikel'],
               'content'=>$request['content'],
        ];
        if($request->hasfile('gambar')){
            $request->gambar->move(public_path().'/gambarartikel',$first);
        }
        $update->update($edit);
        return redirect('subadmin/informasi')->with('suksess','gambar berhasil di edit');
       }
    public function delete($id){
        $delete=Informasi::findorfail($id);

        $file= public_path('/gambarartikel/').$delete->gambar;

        if (file_exists($file)){

          @unlink($file);
        }
        $delete->delete();
        return back()->with('suksess','informasi berhasil di berhasil di hapus');
    }
}
