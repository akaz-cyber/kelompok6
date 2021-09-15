<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>
    <body>
    <div class="container">
    @if (session('suksess'))
    <div class="alert alert-success" role="alert">
        {{session('suksess')}}
      </div>
    @endif
    <h3>Edit data siswa</h3>
    <div class="row">
        <div class="col-lg-12">
        <form action="admin/create" method="POST">
            {{csrf_field()}}
             <div class="form-group">
               <label for="input_starttime">waktu</label>
               <input  name ="waktu" type="time" class="form-control timepicker" id="input_starttime"  placeholder="masukan waktu" value="{{$jadwal -> waktu}}">
             </div>
             <div class="form-group">
                 <label for="exampleInputEmail1">hari</label>
                 <input name ="hari" type="Text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="masukan hari" value="{{$jadwal -> hari}}">
               </div>
               <div class="form-group">
                 <label for="exampleInputEmail1">tanggal dan bulan</label>
                 <input name ="tanggal_bulan" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="masukan tanggal dan bulan" value="{{$jadwal -> tanggal_bulan}}">
               </div>
               <div class="form-group">
                 <label for="exampleInputEmail1">kegiatan</label>
                 <input name ="kegiatan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="masukan kegiatan"  value="{{$jadwal -> kegiatan}}">
               </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Submit</button>
         </form>
        </div>
    </div>
</div>
        </body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

</html>
