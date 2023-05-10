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
        <section id="content">
		
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

    <div class="container rounded bg-white mt-5 mb-5">
        <div class="row">
            <div class="col-md-3 border-right">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                    <img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><span class="font-weight-bold">Edogaru</span><span class="text-black-50">edogaru@mail.com.my</span><span> </span></div>
                </div>
                <div class="col-md-5 border-right">
                    <div class="p-3 py-5">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h4 class="text-right">Profile Settings</h4>
                        </div>
                    <div class="row mt-2">
                        <div class="col-md-6"><label class="labels">Nama depan</label>
                        <input type="text" class="form-control" placeholder="nama depan" value="">
                    </div>
                        <div class="col-md-6"><label class="labels">Nama Belakang</label>
                        <input type="text" class="form-control" value="" placeholder="nama belakang">
                    </div>
                </div>
                    <div class="row mt-3">
                        <div class="col-md-12"><label class="labels">Jenis Kelamin</label>
                        <input type="text" class="form-control" placeholder="Jenis Kelamin" value="">
                    </div>
                        <div class="col-md-12"><label class="labels">Email</label>
                        <input type="text" class="form-control" placeholder="Email" value="">
                    </div>
                        <div class="col-md-12"><label class="labels">No Hp</label>
                        <input type="text" class="form-control" placeholder="No Hp" value="">
                    </div>
                        <div class="col-md-12"><label class="labels">Alamat</label>
                        <input type="text" class="form-control" placeholder="Alamat" value="">
                    </div>
                        <div class="col-md-12"><label class="labels">Jenis Kendaraan</label>
                        <input type="text" class="form-control" placeholder="Jenis Kendaraan" value="">
                    </div>
                        <div class="col-md-12"><label class="labels">Plat Kendaraan</label>
                        <input type="text" class="form-control" placeholder="Plat Kendaraan" value="">
                    </div>
                        <div class="col-md-12"><label class="labels">Upload Foto Diri</label>
                        <input type="text" class="form-control" placeholder="Upload Foto Diri" value="">
                    </div>
                        <div class="col-md-12"><label class="labels">Upload Foto KTP</label>
                        <input type="text" class="form-control" placeholder="education" value="">
                    </div>
                </div>     
                    <div class="mt-5 text-center">
                        <button type="button" class="btn btn-primary profile-button">Save Profile</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
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
