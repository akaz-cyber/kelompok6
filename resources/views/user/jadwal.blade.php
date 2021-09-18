@extends('layouts.jadwal')
@section('jadwal')
	<section class="ftco-section">
        <div class="container" data-aos="fade-up">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
						<table class="table">
						  <thead class="thead-primary">
						    <tr>
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
                                <td>{{$jadwal->waktu}}</td>
                                <td>{{$jadwal->hari}}</td>
                                <td>{{$jadwal->tanggal_bulan}}</td>
                                <td>{{$jadwal->kegiatan}}</td>
						    </tr>
                            @endforeach
						  </tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection

{{-- @extends('layouts.master')
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
<div class="table-responsive">
    <table class="table ">
        <thead>
            <tr class="table">
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
                <td>{{$jadwal->waktu}}</td>
                <td>{{$jadwal->hari}}</td>
                <td>{{$jadwal->tanggal_bulan}}</td>
                <td>{{$jadwal->kegiatan}}</td>
            </tr>
    </tbody>
    @endforeach
    </table>
</div>
</div>


@endsection
 --}}
