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
					
					<a class="navbar-brand" href="#"> Dashboard </a>
					
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
        
  <!-- Content -->
  <div class="container py-5">
            <div class="row justify-content-center align-items-center mt-3 mb-2">
                <div class="col-lg-5">
                    <div class="card shadow-lg border-0 rounded-lg">
                        <div class="card-body">
                            <form action="#" method="POST">
                            <div class="d-flex justify-content-center align-items-center mt-1 mb-2">
                            <h4 class="mt-3">Memberikan Point kepada User</h4>
                            </div>
							<div class="p-5 bg-white shadow-sm">
							<!-- Form untuk memberikan poin -->
							<form>
                                <div class="form-floating mb-3">
                                    <label for="username" class="form-label">Username</label>
                                    <input type="text" class="form-control" id="username" name="username">
                                </div>
                                <div class="form-floating mb-3 mt-2">
                                    <label for="username" class="form-label">Berat Minyak (liter)</label>
                                    <input type="number" class="form-control" id="berat_minyak" name="berat_minyak">
                                </div>
                                <div class="form-floating mb-3 mt-2">
                                    <label for="username" class="form-label">Jumlah Point</label>
                                    <input type="number" class="form-control" id="jumlah_poin" name="jumlah_poin">
                                </div>
							</form>
                            
		<!-- Tombol "Selesai" di sudut kanan bawah -->
		<div class="d-flex justify-content-end mt-5">
            <button type="button" class="btn btn-primary" id="beriButton">Berikan Poin</button>
        </div>
</div>
	</div>
	</div>

	<!-- Memanggil file JavaScript Bootstrap 5 -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
	
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
	<!-- file JavaScript SweetAlert -->
    <script>
    const beriButton = document.querySelector('#beriButton');
beriButton.addEventListener('click', function(e) {
   e.preventDefault(); // membatalkan aksi default tombol
   Swal.fire({
        title: 'Apakah anda yakin?',
        text: "Point akan dikirim kepada User sebanyak XX point!!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ya, Saya yakin!'
    }).then((result) => {
        if (result.isConfirmed) {
            Swal.fire(
                'Selamat!',
                'Point berhasil dikirim!!!.',
                'success'
            ).then(() => {
                window.location.href = "{{ route('dashboard_deliveryman') }}"; // mengganti route dan halaman tujuan
            });
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
