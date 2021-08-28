@extends('layouts.master')
<head>
    <title>halaman JADWAL</title>
</head>
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Table V04</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="jadwal/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="jadwal/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="jadwal/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="jadwal/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="jadwal/vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="jadwal/css/util.css">
	<link rel="stylesheet" type="text/css" href="jadwal/css/main.css">
<!--===============================================================================================-->
</head>
<header>
<section id="jadwal" class="jadwal">
<br>
<div class="container" data-aos="fade-up">
  <header class="section-header">
    <h2>jadwal</h2>
    <p>KEGIATAN ESKUL</p>
  </header>
<body>
  
	<div class="limiter">
			
				<div class="table100 ver1 m-b-110">
					<div class="table100-head">
						<table>
							<thead>

								<tr class="row100 head">
									<th class="cell100 column1">jadwal eskul</th>
									<th class="cell100 column2">Type</th>
									<th class="cell100 column3">Hours</th>	
								</tr>
							</thead>
						</table>
					</div>

					<div class="table100-body js-pscroll">
						<table>
							<tbody>
								<tr class="row100 body">
									<td class="cell100 column1">photo sunset</td>
									<td class="cell100 column2">senin</td>
									<td class="cell100 column3">5:00 - 8.00 WIB</td>
								</tr>
							</tbody>
						</table>
							</tbody>
						</table>
                	
<!--===============================================================================================-->	
	<script src="jadwal/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="jadwal/vendor/bootstrap/js/popper.js"></script>
	<script src="jadwal/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="jadwal/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="jadwal/vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
	<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
@endsection
