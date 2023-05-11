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
                        </ul>
                    </div>
                </div>
            </nav>
	    </div>

        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="card shadow-lg border-0 rounded-lg">
                        <div class="card-body">
                            <form action="#" method="POST">
                            <div class="d-flex justify-content-center align-items-center mt-1 mb-2">
                            <h4 class="mt-0">Alamat User</h4>
                            </div>
                                <div class="form-floating mb-2">
                                    <label for="username" class="form-label">Username</label>
                                    <input type="text" class="form-control" id="username" name="username">
                                </div>
                                <div class="form-floating mb-4">
                                    <label for="username" class="form-label">Alamat</label>
                                    <textarea class="form-control" id="alamat" name="alamat"></textarea>
                                </div>
                                <div class="form-floating mb-2">
                                    <label for="username" class="form-label">Berat Minyak</label>
                                    <input type="text" class="form-control" id="beratminyak" name="beratminyak">
                                </div>
                                <div class="form-floating mb-4">
                                    <label for="username" class="form-label">Foto Minyak</label>
                                    <textarea class="form-control" id="fotominyak" name="fotominyak"></textarea>
                                </div>

		<!-- Tombol "Selesai" di sudut kanan bawah -->
		<div class="d-flex justify-content-end mt-5">
            <button type="button" class="btn btn-dark" id="jemputButton">Jemput Sekarang</button>
        </div>
</div>
	</div>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<!-- file JavaScript SweetAlert -->
<script>
const jemputButton = document.querySelector('#jemputButton');
jemputButton.addEventListener('click', function(e) {
   e.preventDefault(); // membatalkan aksi default tombol
    Swal.fire({
        text: 'Anda telah sampai ke alamat tujuan!',
    }).then((result)=> {
        if (result.isConfirmed) {
            window.location.href = "{{ route('beri_point') }}"; // mengganti route dan halaman tujuan
        }
      });
  });
</script>


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
