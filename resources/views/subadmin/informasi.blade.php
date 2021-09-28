.@extends('layouts.main')
@if (session('suksess'))
<div class="alert alert-success" role="alert">
    {{session('suksess')}}
  </div>
@endif
@section('content')
<body>
      <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal ">
        Tambah informasi
        </button>
                 <!-- Modal -->
                 <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                   <div class="modal-dialog">
                     <div class="modal-content">
                       <div class="modal-header">
                         <h5 class="modal-title" id="exampleModalLabel">Tambah informasi</h5>
                         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                           <span aria-hidden="true">&times;</span>
                         </button>
                       </div>
                       <div class="modal-body">
                        <form action="{{route('tambah')}}" method="POST" enctype="multipart/form-data">
                           {{csrf_field()}}
                            <div class="form-group">
                              <label for="input_starttime">gambar</label>
                              <input  name ="gambar" type="file" class="form-control timepicker" id="gambar"  placeholder="masukan waktu">
                            </div>
                            <div class="form-group">
                              <label for="input_starttime">judul</label>
                              <input  name ="judul" type="text" class="form-control timepicker" id="judul"  placeholder="masukan waktu">
                            </div>
                            <div class="form-group">
                              <label for="input_starttime">tanggal</label>
                              <input  name ="tanggal" type="date" class="form-control timepicker" id="tanggal"  placeholder="masukan waktu">
                            </div>
                            <div class="form-group">
                              <label for="input_starttime">nama</label>
                              <input  name ="nama" type="text" class="form-control timepicker" id="nama"  placeholder="masukan waktu">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Pembuka content</label>
                                <textarea class="form-control" name="shortartikel" id="shortartikel" rows="3"></textarea>
                              </div>
                              <div class="form-group">
                                <label for="exampleFormControlTextarea1">content</label>
                                <textarea class="form-control" name="content" id="content" rows="15"></textarea>
                              </div>
                       </div>
                       <div class="modal-footer">
                         <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                         <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                       </div>
                     </div>
                   </div>
                 </div>
                      <table class="table table-hover">
                        <tr>
                           <th class="text-uppercase">gambar</th>
                           <th class="text-uppercase">judul</th>
                           <th class="text-uppercase">tanggal</th>
                           <th class="text-uppercase">nama</th>
                           <th class="text-uppercase">pembuka</th>
                           <th class="text-uppercase">content</th>
                           <th class="text-uppercase">Aksi</th>
                       </tr>
                           @foreach ($info as $informasi)
                       <tr>
                        <td><img src="{{asset('gambarartikel/'.$informasi->gambar)}}" height="250" alt=""></a>
                        </td>
                           <td class="align-middle">{{$informasi->judul}}</td>
                           <td class="align-middle">{{$informasi->tanggal}}</td>
                           <td class="align-middle">{{$informasi->nama}}</td>
                           <td class="align-middle">{{$informasi->shortartikel}}</td>
                           <td class="align-middle">{{$informasi->content}}</td>
                           <td>
                               <a href="{{url('editinformasi',$informasi->id)}}" class="btn btn-outline-info btn-sm">Edit</a>
                               <a href="{{url('deleteinformasi',$informasi->id)}}" class="btn btn-outline-danger btn-sm"onclick="return confirm('ingin menghapus jadwal ini?')">Delete</a>
                           </td>
                       </tr>
                           @endforeach

                      </table>




        </div>

    </div>
    </body>



@endsection
