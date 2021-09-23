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
        Tambah galery
        </button>
                 <!-- Modal -->
                 <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                   <div class="modal-dialog">
                     <div class="modal-content">
                       <div class="modal-header">
                         <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                           <span aria-hidden="true">&times;</span>
                         </button>
                       </div>
                       <div class="modal-body">
                        <form action="{{route('create')}}" method="POST" enctype="multipart/form-data">
                           {{csrf_field()}}
                           <div class="form-group">
                            <label for="input_starttime">gambar</label>
                            <input  name ="gambar" type="file" class="form-control" id="gambar">
                            </div>
                            <div class="form-group">
                              <label for="exampleInputEmail1">keterangan</label>
                              <input name ="keterangan" type="Text" class="form-control" id="keterangan"  placeholder="keterangan">
                            </div>
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
                         <th class="text-uppercase" >gambar</th>
                         <th class="text-uppercase" >keterangan</th>
                         <th class="text-uppercase" >aksi</th>
                       </tr>
                       @foreach ($data_gambar as $uploadgambar )
                       <tr>
                           <td><a href="{{asset('galery/'.$uploadgambar->gambar)}}" target="_blank" rel="noopener noreferrer"> lihat gambar</a></td>
                           <td class="align-middle">{{$uploadgambar->keterangan}}</td>
                           <td>
                               <a href="#" class="btn btn-outline-info btn-sm">Edit</a>
                               <a href="#" class="btn btn-outline-danger btn-sm"onclick="return confirm('ingin menghapus jadwal ini?')">Delete</a>
                           </td>
                       </tr>
                           @endforeach

                      </table>
                        </div>

                    </div>
                    </body>



                @endsection








{{-- .@extends('layouts.main')
@section('content')
<body>
    <!-- Button trigger modal -->
      <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal ">
      Tambah gambar
      </button>
               <!-- Modal -->
               <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                 <div class="modal-dialog">
                   <div class="modal-content">
                     <div class="modal-header">
                       <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                         <span aria-hidden="true">&times;</span>
                       </button>
                     </div>
                     <div class="modal-body">
                      <form action="{{route('create')}}" method="POST" enctype="multipart/form-data">
                         {{csrf_field()}}
                          <div class="form-group">
                            <label for="input_starttime">gambar</label>
                            <input  name ="gambar" type="file" class="form-control" id="gambar">
                          </div>
                          <div class="form-group">
                              <label for="exampleInputEmail1">keterangan</label>
                              <input name ="keterangan" type="Text" class="form-control" id="keterangan"  placeholder="keterangan">
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
                         <th class="text-uppercase" >gambar</th>
                         <th class="text-uppercase" >keterangan</th>
                         <th class="text-uppercase" >aksi</th>
                     </tr>
                   @foreach ($data_gambar as $uploadgambar )
                    <tr>
                        <td><a href="{{asset('galery/'.$uploadgambar->gambar)}}" target="_blank" rel="noopener noreferrer"> lihat gambar</a></td>
                        <td class="align-middle">{{$uploadgambar->keterangan}}</td>
                        <td>
                            <a href="#" class="btn btn-outline-info btn-sm">Edit</a>
                            <a href="#" class="btn btn-outline-danger btn-sm"onclick="return confirm('ingin menghapus jadwal ini?')">Delete</a>
                        </td>
                    </tr>


               </table>

                   @endforeach



                    </div>
                     </div>
                 </div>

      </div>

  </div>
  </body>

@endsection --}}
