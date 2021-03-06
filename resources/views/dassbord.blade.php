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
        Tambah jadwal
        </button>
                 <!-- Modal -->
                 <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                   <div class="modal-dialog">
                     <div class="modal-content">
                       <div class="modal-header">
                         <h5 class="modal-title" id="exampleModalLabel">Tambah jadwal</h5>
                         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                           <span aria-hidden="true">&times;</span>
                         </button>
                       </div>
                       <div class="modal-body">
                        <form action="admin/create" method="POST">
                           {{csrf_field()}}
                            <div class="form-group">
                              <label for="input_starttime">waktu</label>
                              <input  name ="waktu" type="time" class="form-control timepicker" id="input_starttime"  placeholder="masukan waktu">
                            </div>
                              <div class="form-group">
                                <label for="exampleInputEmail1">Hari dan tanggal</label>
                                <input name ="tanggal_bulan" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="masukan tanggal dan bulan">
                              </div>
                              <div class="form-group">
                                <label for="exampleInputEmail1">kegiatan</label>
                                <input name ="kegiatan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="masukan kegiatan">
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
                           <th class="text-uppercase">waktu</th>
                           <th class="text-uppercase">tanggal</th>
                           <th class="text-uppercase">kegiatan</th>
                           <th class="text-uppercase">Aksi</th>
                       </tr>
                           @foreach ($data_jadwal as $jadwal)
                       <tr>
                           <td class="align-middle">{{$jadwal->waktu}}</td>
                           <td class="align-middle">{{$jadwal->tanggal_bulan}}</td>
                           <td class="align-middle">{{$jadwal->kegiatan}}</td>
                           <td>
                               <a href="admin/{{$jadwal->id}}/edit" class="btn btn-outline-info btn-sm">Edit</a>
                               <a href="admin/{{$jadwal->id}}/delete" class="btn btn-outline-danger btn-sm"onclick="return confirm('ingin menghapus jadwal ini?')">Delete</a>
                           </td>
                       </tr>
                           @endforeach

                      </table>




        </div>

    </div>
    </body>



@endsection




