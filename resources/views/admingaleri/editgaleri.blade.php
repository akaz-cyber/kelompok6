.@extends('layouts.main')
@if (session('suksess'))
<div class="alert alert-success" role="alert">
    {{session('suksess')}}
  </div>
@endif
@section('content')
<body>
    <i><h1>Edit gambar</h1></i>
         <form action="{{url('updategaleri',$edit->id)}}" method="POST" enctype="multipart/form-data">
         {{csrf_field()}}
        <div class="form-group">
        <img src="{{asset('galery/'.$edit->gambar)}}" height="400"  alt="">
        </div>
        <div class="form-group btn btn-sm">
            <input  name ="gambar" type="file"  id="gambar"  >
            </div>
        <div class="form-group">
            <label for="exampleInputEmail1">keterangan</label>
            <input name ="keterangan" type="Text" class="form-control" id="keterangan" aria-describedby="emailHelp" placeholder="masukan kerterangan" value="{{$edit->keterangan}}" >
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        </form>

    </body>
    @endsection





