.@extends('layouts.main')
@if (session('suksess'))
<div class="alert alert-success" role="alert">
    {{session('suksess')}}
  </div>
@endif
@section('content')
<body>
    <i><h1>Edit gambar</h1></i>
         <form action="{{url('updateinformasi', $edit->id)}}" method="POST" enctype="multipart/form-data">
         {{csrf_field()}}
        <div class="form-group">
            <td><img src="{{asset('gambarartikel/'.$edit->gambar)}}" height="250" alt=""></a>
        </div>
        <div class="form-group btn btn-sm">
            <input  name ="gambar" type="file"  id="gambar"  >
            </div>
            <div class="form-group">
                <label for="input_starttime">judul</label>
                <input  name ="judul" type="text" class="form-control timepicker" id="judul" value="{{$edit->judul}}"  placeholder="masukan waktu">
              </div>
              <div class="form-group">
                <label for="input_starttime">tanggal</label>
                <input  name ="tanggal" type="date" class="form-control timepicker" id="tanggal" value="{{$edit->tanggal}}" placeholder="masukan waktu">
              </div>
              <div class="form-group">
                <label for="input_starttime">nama</label>
                <input  name ="nama" type="text" class="form-control timepicker" id="nama" value="{{$edit->nama}}" placeholder="masukan waktu">
              </div>
              <div class="form-group">
                  <label for="exampleFormControlTextarea1">Pembuka content</label>
                  <textarea class="form-control" name="shortartikel" id="shortartikel" rows="3">{{$edit->shortartikel}}</textarea>
                </div>
                <div class="form-group">
                  <label for="exampleFormControlTextarea1">content</label>
                  <textarea class="form-control" name="content" id="content"  rows="15">{{$edit->content}}</textarea>
                </div>
        <button type="submit" class="btn btn-primary">Update</button>
        </form>

    </body>
    @endsection
