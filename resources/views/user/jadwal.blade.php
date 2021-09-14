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
    <h2>Jadwal</h2>
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
                        <tbody>
                            <tr>
                                <td class="align-middle">08:00</td>
                                <td>
                                    <span class="bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom font-size16 xs-font-size13">kumpul</span>
                                    <div class="margin-10px-top font-size14">8:00-10:00</div>
                                </td>
                                <td>

                                </td>

                     </tbody>
                    </table>
                </div>
            </div>


@endsection
