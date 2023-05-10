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


			<div class="main-content">

			<div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header">
                                    <div class="icon icon-success">
                                        <span class="material-icons">attach_money</span>

                                    </div>
                                </div>
                                <div class="card-content">
                                    <p class="category"><strong>Total Minyak</strong></p>
                                    <h3 class="card-title">4920 Liter</h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons">date_range</i> Weekly totals
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header">
                                    <div class="icon icon-info">
                                    <span class="material-icons">follow_the_signs</span>
                                    </div>
                                </div>
                                <div class="card-content">
                                    <p class="category"><strong>Total Jemput</strong></p>
                                    <h3 class="card-title">+245</h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons">update</i> Just Updated
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


					<div class="row ">
                        <div class="col-lg-10 col-md-12">
                            <div class="card" style="min-height: 485px">
                                <div class="card-header card-header-text">
                                    <h4 class="card-title">Riwayat Penjemputan</h4>
                                </div>
                                <div class="card-content table-responsive">
                                    <table class="table table-hover">
                                        <thead class="text-primary">
                                            <tr><th>ID</th>
                                            <th>Tanggal</th>
                                            <th>Customer</th>
                                            <th>Berat Minyak</th>
                                        </tr></thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>02/01/2023</td>
                                                <td>Bob Williams</td>
                                                <td>1 Liter</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>04/01/2023</td>
                                                <td>Mike Tyson</td>
                                                <td>4 Liter</td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>10/01/2023</td>
                                                <td>Eren Yeager</td>
                                                <td>4 Liter</td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>24/01/2023</td>
                                                <td>Killua Zoldyck</td>
                                                <td>5 Liter</td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>14/02/2023</td>
                                                <td>Mikasa Ackerman</td>
                                                <td>3 Liter</td>
                                            </tr>
                                            <tr>
                                                <td>6</td>
                                                <td>04/03/2023</td>
                                                <td>Miftah</td>
                                                <td>4 Liter</td>
                                            </tr>
                                            <tr>
                                                <td>7</td>
                                                <td>08/03/2023</td>
                                                <td>Najla Raihana</td>
                                                <td>4 Liter</td>
                                            </tr>
                                        </tbody>
                                    </table>
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


