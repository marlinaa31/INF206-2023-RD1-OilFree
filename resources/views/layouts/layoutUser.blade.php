<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- bootstrap  -->
    <link rel="stylesheet" href="{{ url('assets/css/bootstrap.min.css') }}">

    <!-- custom css  -->
    <link rel="stylesheet" href="{{ url('css/style.css') }}">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @yield('script')
</head>

<!-- start of header  -->

<body class="body-fixed">
    <!-- start of header  -->
    <header class="site-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="header-logo">
                        <a href="welcome.blade.php">
                            <h3>Oil Free</h3>
                        </a>
                    </div>
                </div>
                <div class="col-lg-10">
                    <div class="main-navigation">
                        <button class="menu-toggle"><span></span><span></span></button>
                        <nav class="header-menu">
                            <ul class="menu food-nav-menu">
                                <li><a href="{{ route('welcome') }}">Beranda</a></li>
                                <li><a href="{{ route('informasi') }}">Informasi</a></li>

                                    @auth
                                    @if (Auth::user()->role == 'user')
                                    <li><a href="{{ route('deskripsi_deliveryman') }}">Delivery Man</a></li>
                                    <li><a href="{{ route('point') }}">Redeem Point</a></li>

                                    @endif

                                    <li>
                                    <form action="{{ url('/logout') }}" method="post">
                                    @csrf
                                    <button type="submit" class="button-logout">
                                        <span class="button-icon"></span>
                                    <span class="button-text">Logout</span>
                                    </button>
                                    </form>
                                    </li>
                                    @else
                                    <li><a href="{{ route('login') }}">Masuk</a></li>
                                    @if (Route::has('register'))
                                    <li><a href="{{ route('register') }}">Daftar</a></li>
                                    @endif
                                    @endauth



                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header ends  -->

    @yield('content')

    <!-- footer starts  -->
    <footer class="site-footer" id="contact">
        <div class="top-footer section">
            <div class="sec-wp">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="footer-info">
                                <div class="footer-logo">
                                    <a href="index.html">
                                        <img src="{{ url('assets/images/logo.png') }}"
                                            style="width: 8rem; height: 7rem;" alt="">
                                    </a>
                                </div>
                                <p>Limbahmu Keuntunganmu.
                                </p>
                                <div class="social-icon">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <i class="uil uil-facebook-f"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.instagram.com/oilfree.21/">
                                                <i class="uil uil-instagram"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://github.com/marlinaa31/INF206-2023-RD1-OilFree">
                                                <i class="uil uil-github-alt"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="footer-flex-box">
                                <div class="footer-table-info">
                                    <h3 class="h3-title">Kontak</h3>
                                    <ul>
                                        <li><i class=""></i>Miftah Nadya </li>
                                        <li><i class=""></i>08xxxxxxxxxx</li>
                                    </ul>
                                </div>
                                <div class="footer-menu food-nav-menu">
                                    <h3 class="h3-title">Features</h3>
                                    <ul class="column-2">
                                        <li>
                                            <a href="{{ route('welcome') }}" class="footer-active-menu">Home</a>
                                        </li>
                                        <li><a href="{{ route('informasi') }}">Informasi</a></li>
                                        <li><a href="{{ route('deskripsi_deliveryman') }}">Delivery Man</a></li>
                                        <li><a href="{{ route('point') }}">Redeem Point</a></li>
                                    </ul>
                                </div>
                                <div class="footer-menu">
                                    <h3 class="h3-title">Perusahaan</h3>
                                    <ul>
                                        <li><i class=""></i>Jl. Syech Abdurrauf No.3,</li>
                                        <li><i class=""></i>Kopelma Darussalam, Kec. Syiah</li>
                                        <li><i class=""></i>Kuala, Kota Banda Aceh, Aceh 23111</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom-footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="copyright-text">
                            <p>Copyright &copy; 2023 <span class="name">Oil Free.</span>All Rights Reserved.
                            </p>
                        </div>
                    </div>
                </div>
                <button class="scrolltop"><i class="uil uil-angle-up"></i></button>
            </div>
        </div>
    </footer>

    <!-- bootstrap -->
    <script src="{{ url('assets/js/bootstrap.min.js') }}"></script>

    <!-- custom js  -->
    <script src="{{ url('main.js') }}"></script>

</body>

</html>
