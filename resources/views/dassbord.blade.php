@extends('layouts.main')
@section('content')
<body>
      <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal">
        Tambah jadwal
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
                        <form>
                            <div class="form-group">
                              <label for="exampleInputEmail1">waktu</label>
                              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="masukan waktu">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">hari</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="masukan hari">
                              </div>
                              <div class="form-group">
                                <label for="exampleInputEmail1">tanggal dan bulan</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="masukan tanggal dan bulan">
                              </div>
                              <div class="form-group">
                                <label for="exampleInputEmail1">kegiatan</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="masukan kegiatan">
                              </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                          </form>
                       </div>
                       <div class="modal-footer">
                         <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                         <button type="button" class="btn btn-primary">Save changes</button>
                       </div>
                     </div>
                   </div>
                 </div>

                      <table class="table table-hover">
                        <tr>
                           <th class="text-uppercase">waktu</th>
                           <th class="text-uppercase">Hari</th>
                           <th class="text-uppercase">tanggal</th>
                           <th class="text-uppercase">kegiatan</th>
                       </tr>
                           @foreach ($data_jadwal as $jadwal)
                       <tr>
                           <td class="align-middle">{{$jadwal->waktu}}</td>
                           <td class="align-middle">{{$jadwal->hari}}</td>
                           <td class="align-middle">{{$jadwal->tanggal_bulan}}</td>
                           <td class="align-middle">{{$jadwal->kegiatan}}</td>
                       </tr>
                           @endforeach

                      </table>
                       </div>
                   </div>

        </div>

    </div>
    </body>



@endsection




