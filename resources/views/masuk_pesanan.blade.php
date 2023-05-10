@extends('layouts.layoutdeliveryman')

@section('content')
  <head>
	    <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{ url('assets1/css/bootstrap.min.css')}}">
	    <!----css3---->
        <link rel="stylesheet" href="{{ url('assets1/css/custom.css')}}">
		<!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
	
	    <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">

	    <!--google material icon-->
        <link href="https://fonts.googleapis.com/css2?family=Material+Icons"
        rel="stylesheet">
  </head>
  <body>
        <!-- Page Content  -->
        <div id="content">
		
		<div class="top-navbar">
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="d-xl-block d-lg-block d-md-mone d-none">
                        <span class="material-icons">arrow_back_ios</span>
                    </button>
					
					<a class="navbar-brand" href="#"> Pesanan </a>
					
                    <button class="d-inline-block d-lg-none ml-auto more-button" type="button" data-toggle="collapse"
					data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="material-icons">more_vert</span>
                    </button>

                    <div class="collapse navbar-collapse d-lg-block d-xl-block d-sm-none d-md-none d-none" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">   
                            <li class="dropdown nav-item active">
                                <a href="#" class="nav-link" data-toggle="dropdown">
                                   <span class="material-icons">person</span>
                               </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('profil_delivery') }}">
                                            <span class="material-icons">person_outline</span>Profile
                                          </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('welcome') }}">
                                            <span class="material-icons">logout</span>Logout</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
	    </div>

		<div class="main-content">
			<div class="row">
				<!-- Card untuk menampilkan pesanan -->
			<div class=" col-lg-3 row-col-md-6 col-sm-6">
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
		</div>
			<!-- Card kedua -->
			<div class=" col-lg-3 row-col-md-6 col-sm-6">
			<div class="col">
				<div class="card">
					<div class="card-body">
						<h5 class="card-title">Pesanan 2</h5>
						<p class="card-text">Selamat anda mendapatkan pesanan!!!.</p>
                        <a href="{{ route('alamat_user') }}" class="btn btn-primary">Lihat Alamat</a>
					</div>
				</div>
			</div>
			</div>
			<!-- Card ketiga -->
			<div class=" col-lg-3 row-col-md-6 col-sm-6">
			<div class="col">
				<div class="card">
					<div class="card-body">
						<h5 class="card-title">Pesanan 3</h5>
						<p class="card-text">Selamat anda mendapatkan pesanan!!!.</p>
                        <a href="{{ route('alamat_user') }}" class="btn btn-primary">Lihat Alamat</a>
					</div>
				</div>
			</div>
			</div>
			<!-- Card keempat -->
			<div class=" col-lg-3 row-col-md-6 col-sm-6">
			<div class="col">
				<div class="card">
					<div class="card-body">
						<h5 class="card-title">Pesanan 4</h5>
						<p class="card-text">Selamat anda mendapatkan pesanan!!!.</p>
                        <a href="{{ route('alamat_user') }}" class="btn btn-primary">Lihat Alamat</a>
					</div>
				</div>
			</div>
			</div>
			<!-- Card kelima -->
			<div class=" col-lg-3 row-col-md-6 col-sm-6">
			<div class="col">
				<div class="card">
					<div class="card-body">
						<h5 class="card-title">Pesanan 5</h5>
						<p class="card-text">Selamat anda mendapatkan pesanan!!!</p>
                        <a href="{{ route('alamat_user') }}" class="btn btn-primary">Lihat Alamat</a>
					</div>
				</div>
			</div>
			</div>
            <!-- Card keenam -->
			<div class=" col-lg-3 row-col-md-6 col-sm-6">
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
	</div>


  <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="{{ url('assets1/js/jquery-3.3.1.slim.min.js') }}"></script>
   <script src="{{ url('js/popper.min.js') }}"></script>
   <script src="{{ url('js/bootstrap.min.js') }}"></script>
   <script src="{{ url('js/jquery-3.3.1.min.js') }}"></script>
  
  
  <script type="text/javascript">
  $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
				$('#content').toggleClass('active');
            });
			
			 $('.more-button,.body-overlay').on('click', function () {
                $('#sidebar,.body-overlay').toggleClass('show-nav');
            });
			
        });   
</script>
@endsection
