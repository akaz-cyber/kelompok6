.@extends('layouts.main')
@if (session('suksess'))
<div class="alert alert-success" role="alert">
    {{session('suksess')}}
  </div>
@endif
@section('content')
  <!-- Button trigger modal -->
  <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal">
    Tambah Artikel
    </button>
             <!-- Modal -->
             <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
               <div class="modal-dialog">
                 <div class="modal-content">
                   <div class="modal-header">
                     <h5 class="modal-title" id="exampleModalLabel">tambah artikel</h5>
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                       <span aria-hidden="true">&times;</span>
                     </button>
                   </div>
                   <div class="modal-body">
                    <form action="{{route("tambahinformasi")}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                          <label for="input_starttime">Galery</label>
                          <input  name ="galery" type="file"  id="galery" class="btn btn-sm">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Judul</label>
                            <input name ="judul" type="Text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="masukan judul">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Tanggal</label>
                            <input name ="tanggal" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="masukan tanggal">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Nama</label>
                            <input name ="user_id" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="masukan nama">
                          </div>
                          <div class="form-group">
                            <label for="exampleFormControlTextarea1">Content</label>
                            <textarea class="form-control" id="content"  name="content" rows="7" placeholder="masukan content"></textarea>
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
                   <th class="text-uppercase">galery</th>
                   <th class="text-uppercase">judul</th>
                   <th class="text-uppercase">tanggal</th>
                   <th class="text-uppercase">nama</th>
                   <th class="text-uppercase">content</th>
                   <th class="text-uppercase">Aksi</th>
               </tr>
                   @foreach ($info as $informasi)
               <tr>
                   <td class="align-middle">{{$informasi->galery}}</td>
                   <td class="align-middle">{{$informasi->judul}}</td>
                   <td class="align-middle">{{$informasi->tanggal}}</td>
                   <td class="align-middle">{{$informasi->user_id }}</td>
                   <td class="align-middle">{{$informasi->content }}</td>
                   <td>
                       <a href="#" class="btn btn-outline-info btn-sm">Edit</a>
                       <a href="#"  class="btn btn-outline-danger btn-sm">Delete</a>
                   </td>
               </tr>
                   @endforeach

              </table>
@endsection
