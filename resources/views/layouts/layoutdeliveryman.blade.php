<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

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

        @yield('script')

    </head>
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3><img src="{{ url('assets1/img/logo.png') }}" class="img-fluid"/><span>Oil Free</span></h3>
            </div>
            <ul class="list-unstyled components">
			<li  class="active">
                    <a href="{{ route('dashboard_deliveryman') }}" class="dashboard"><i class="material-icons">dashboard</i><span>Dashboard</span></a>
                </li>

                <li class="">
                    <a href="{{ route('profil_delivery') }}"><i class="material-icons">person_outline</i><span>Profile</span></a>
                </li>

                <li class="">
                    <a href="{{ route('dashboard_deliveryman') }}"><i class="material-icons">date_range</i><span>Riwayat</span></a>
                </li>

               <li class="">
                    <a href="{{ route('masuk_pesanan') }}"><i class="material-icons">border_color</i><span>Pesanan</span></a>
                </li>


                <form id="logout-form" action="{{ url('/logout') }}" method="POST">
                    @csrf
                    <li>
                      <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="material-icons">exit_to_app</i> Logout
                      </a>
                    </li>
                  </form>
            </ul>
        </nav>

        @yield('content')

        <!-- Footer  -->
        <!-- End Footer  -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <script src="{{ url('assets1/js/jquery-3.3.1.slim.min.js') }}"></script>
   <script src="{{ url('js/popper.min.js') }}"></script>
   <script src="{{ url('js/bootstrap.min.js') }}"></script>
   <script src="{{ url('js/jquery-3.3.1.min.js') }}"></script>

</body>
</html>
