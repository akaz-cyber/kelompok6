@extends('layouts.master')
<head>
    <title>Jadwal</title>
</head>
@section('content')
<br>
<br>
<br>
<br>
  <header class="section-header">
    <p>Jadwal ekstrakulikuler</p>
  </header>
<div class="container">

                <div class="timetable-img text-center">
                    <img src="img/content/timetable.png" alt="">
                </div>
                <div class="table-responsive">
                    <table class="table table-hover  table-striped table-bordered text-center">
                        <thead>
                            <tr class="table-primary bg-light-gray">
                                <th class="text-uppercase">waktu
                                </th>
                                <th class="text-uppercase">Hari</th>
                                <th class="text-uppercase">tanggal</th>
                                <th class="text-uppercase">kegiatan</th>

                            </tr>
                        </thead>
                        @foreach ($data_jadwal as $jadwal )


                        <tbody>
                            <tr>
                                <td class="align-middle">{{$jadwal->waktu}}</td>
                                <td class="align-middle">{{$jadwal->hari}}</td>
                                <td class="align-middle">{{$jadwal->tanggal_bulan}}</td>
                                <td class="align-middle">{{$jadwal->kegiatan}}</td>
                            </tr>
                     </tbody>
                     @endforeach
                    </table>
                </div>
            </div>


@endsection

