<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Blogcontroller extends Controller
{
     public function info(){
         return view('user.info');
     }

     public function About(){
        return view ('user.about');
    }
    public function portfolio(){
        return view ('user.portfolio');
    }
    public function contact(){
        return view ('user.contact');
    }
    public function sejarah(){
        return view ('informasi.sejarah');
    }
    public function pengertian(){
        return view ('informasi.pengertian');
    }
    public function jenis(){
        return view ('informasi.jenis');
    }
}
