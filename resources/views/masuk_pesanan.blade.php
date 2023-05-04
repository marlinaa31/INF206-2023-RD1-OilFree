@extends('layouts.layoutdeliveryman')

@section('content')

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Delivery</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body class="bg-warning">
<nav class="navbar bg-body-tertiary">
    <div class="container-fluid">
        <a href="{{ route('dashboard_deliveryman') }}" class="btn btn-Kembali">Kembali</a>
        <a class="navbar-brand" href="#">Pesanan</a>
        <p align="center">
        </p>
    </div>
</nav>

<div class="wrapper">
  
@section('content')
  <!-- Content -->
<div class="container">

		<!-- Card untuk menampilkan pesanan -->
		<div class="row row-cols-1 row-cols-md-3 g-4 mt-4">
			<!-- Card pertama -->
			<div class="col">
				<div class="card">
					<div class="card-body">
						<h5 class="card-title">Pesanan 1</h5>
						<p class="card-text">Selamat anda mendapatkan pesanan!!!.</p>
						<a href="{{ route('alamat_user') }}" class="btn btn-primary">Lihat Alamat</a>
					</div>
				</div>
			</div>
			<!-- Card kedua -->
			<div class="col">
				<div class="card">
					<div class="card-body">
						<h5 class="card-title">Pesanan 2</h5>
						<p class="card-text">Selamat anda mendapatkan pesanan!!!.</p>
                        <a href="{{ route('alamat_user') }}" class="btn btn-primary">Lihat Alamat</a>
					</div>
				</div>
			</div>
			<!-- Card ketiga -->
			<div class="col">
				<div class="card">
					<div class="card-body">
						<h5 class="card-title">Pesanan 3</h5>
						<p class="card-text">Selamat anda mendapatkan pesanan!!!.</p>
                        <a href="{{ route('alamat_user') }}" class="btn btn-primary">Lihat Alamat</a>
					</div>
				</div>
			</div>
			<!-- Card keempat -->
			<div class="col">
				<div class="card">
					<div class="card-body">
						<h5 class="card-title">Pesanan 4</h5>
						<p class="card-text">Selamat anda mendapatkan pesanan!!!.</p>
                        <a href="{{ route('alamat_user') }}" class="btn btn-primary">Lihat Alamat</a>
					</div>
				</div>
			</div>
			<!-- Card kelima -->
			<div class="col">
				<div class="card">
					<div class="card-body">
						<h5 class="card-title">Pesanan 5</h5>
						<p class="card-text">Selamat anda mendapatkan pesanan!!!</p>
                        <a href="{{ route('alamat_user') }}" class="btn btn-primary">Lihat Alamat</a>
					</div>
				</div>
			</div>
            <!-- Card keenam -->
			<div class="col">
				<div class="card">
					<div class="card-body">
						<h5 class="card-title">Pesanan 6</h5>
						<p class="card-text">Selamat anda mendapatkan pesanan!!!</p>
                        <a href="{{ route('alamat_user') }}" class="btn btn-primary">Lihat Alamat</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Memanggil file JavaScript Bootstrap 5 -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
</body>

@endsection
