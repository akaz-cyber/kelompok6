<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;




class Blogcontroller extends Controller
{
     public function video(){
        return view('user.video');
     }

     public function About(){
        return view ('user.about');
    }
    public function portfolio(){
        // $galery =\App\Uploadgambar::all();
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
    public function login(){
        return view ('auth.login');
    }
    public function jadwal(){
       $data_jadwal = \App\Jadwal::all();
        return view ('user.jadwal',compact('data_jadwal'));
    }

    // public function kirimemail(Request $request){
    //     $hasil = array(
    //         'email'=> $request->email,
    //         'subject'=>$request->subject,
    //         'isimessage'=>$request->message,

    //     );
    //     Mail::send('email/emailku',$hasil,function($massage) use($hasil){
    //     $massage->from($hasil['email']);
    //     $massage->to('ajrisonic62@gmail.com');
    //     $massage->subject($hasil['subject']);

    //     });
    //     return redirect()->back();
    // }


}
