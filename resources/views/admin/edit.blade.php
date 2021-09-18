.@extends('layouts.main')
@if (session('suksess'))
<div class="alert alert-success" role="alert">
    {{session('suksess')}}
  </div>
@endif
@section('content')
<body>
    <i><h1>Edit jadwal</h1></i>
         <form action="admin/{{$jadwal->id}}/update" method="POST">
         {{csrf_field()}}
        <div class="form-group">
        <label for="input_starttime">waktu</label>
        <input  name ="waktu" type="time" class="form-control timepicker" id="input_starttime"  placeholder="masukan waktu" value="{{$jadwal->waktu }}">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">hari</label>
            <input name ="hari" type="Text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="masukan hari" value="{{$jadwal->hari}}">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">tanggal dan bulan</label>
            <input name ="tanggal_bulan" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="masukan tanggal dan bulan" value="{{$jadwal->tanggal_bulan}}">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">kegiatan</label>
            <input name ="kegiatan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="masukan kegiatan"value="{{$jadwal->kegiatan}}">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        </form>

    </body>



@endsection




