@extends('layouts.layoutUser')

@section('content')

<head>
    <!-- for icons  -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <!-- bootstrap  -->
    <link rel="stylesheet" href="{{ url('assets/css/bootstrap.min.css') }}">
    <!-- for swiper slider  -->
    <link rel="stylesheet" href="{{ url('assets/css/swiper-bundle.min.css') }}">

    <!-- fancy box  -->
    <link rel="stylesheet" href="{{ url('assets/css/jquery.fancybox.min.css') }}">
    <!-- custom css  -->
    <link rel="stylesheet" href="{{ url('css/style.css') }}">
</head>

<div id="viewport">
            <div id="js-scroll-content">
                <section class="main-banner" id="home">
                    <div class="js-parallax-scene">
                        <div class="banner-shape-1 w-100" data-depth="0.30">
                            <img src="{{ url('assets/images/oil.png') }}" alt="">
                        </div>
                        <div class="banner-shape-2 w-100" data-depth="0.25">
                            <img src="{{ url('assets/images/left.png') }}" alt="">
                        </div>
                    </div>
                    <div class="sec-wp">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="banner-text">
                                        <h1 class="h1-title">
                                            Welcome to Oil
                                            <span>Free</span>
                                        </h1>
                                        <h3>Membuat Aceh Bebas Minyak Jelantah</h3>
                                        <p>Kami adalah perusahaan peduli lingkungan, yang mengumpulkan limbah minyak goreng bekas 
                                        atau biasa disebut Jelantah /used cooking oil (UCO)
                                        </p>
                                        <div class="banner-btn mt-4">
                                            <a href="{{ route('register') }}" class="sec-btn">Bergabung Sekarang</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="banner-img-wp">
                                        <div class="banner-img" style="background-image: url(assets/images/main-bg.jpg);">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

            <section class="about-sec section" id="about">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="sec-title text-center mb-5">
                                <p class="sec-sub-title mb-3">Tentang</p>
                                <h2 class="h2-title">Apa saja <span>yang kami kumpulkan?</span></h2>
                                <div class="sec-title-shape mb-4">
                                    <img src="{{ url('assets/images/title-shape.svg') }}" alt="">
                                </div>
                                <p>Kami mengumpulkan minyak jelantah atau biasa disebut Used Cooking Oil (UCO) 
                                    yang merupakan minyak yang dihasilkan dari minyak goreng nabati seperti minyak 
                                    jagung, minyak sayur, minyak samin, dan sebagai nya. Minyak jelantah ini adalah 
                                    minyak bekas pemakaian rumah tangga maupun industri. Mengkonsumsi minyak jelantah 
                                    yang berkelanjutan sangat berbahaya bagi kesehatan manusia, karena mengandung senyawa 
                                    yang bersifatk arsinogenik yang dapat memicu berbagai penyakit seperti kanker,hipertensi, 
                                    dan berbagai penyakit lain nya. Dengan pengelolaan yang tepat, limbah jelantah ini dapat dikelola 
                                    menjadi energi alami yang ramah lingkungan yaitu menjadi Bioenergi (Biodiesel).</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-8 m-auto">
                                <div class="about-img" style="background-image: url(assets/images/jelantah.webp);">
                                </div>
                        </div>
                    </div>
                </div>
            </section>


            <section class="book-table section bg-light">
                <div class="book-table-shape">
                    <img src="{{ url('assets/images/table-leaves-shape.png') }}" alt="">
                </div>

                <div class="book-table-shape book-table-shape2">
                    <img src="{{ url('assets/images/table-leaves-shape.png') }}" alt="">
                </div>

                <div class="sec-wp">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="sec-title text-center mb-5">
                                    <p class="sec-sub-title mb-3">Upaya</p>
                                    <h2 class="h2-title">Upaya kami</h2>
                                    <div class="sec-title-shape mb-4">
                                        <img src="{{ url('assets/images/title-shape.svg') }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="book-table-info">
                            <div class="row align-items-center">
                                <div class="col-lg-4">
                                    <div class="table-title text-center">
                                        <h3>Sejak 2023</h3>
                                        <p>Akan bekerja keras bersama sama mengumpulkan minyak Jelantah / Used Cooking Oil (UCO), kami akan terus bekerja keras
                                            dari tahun ke tahun.</p>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="call-now text-center">
                                        <h3>Jangkauan Daerah</h3>
                                        <p>Kami mencakup seluruh wilayah Jakarta, Tanggerang, Bandung dan Wilayah sekitarnya.</p>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="table-title text-center">
                                        <h3>Edukasi</h3>
                                        <p>Kami bekerja sepenuh hati danmengedukasi masyarakat tentang bahayanya limbah minyak Jelantah / Used Cooking Oil (UCO).</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row" id="gallery">
                            <div class="col-lg-10 m-auto">
                                <div class="book-table-img-slider" id="icon">
                                    <div class="swiper-wrapper">
                                        <a href="{{ url('assets/images/bt1.jpg') }}" data-fancybox="table-slider"
                                            class="book-table-img back-img swiper-slide"
                                            style="background-image: url(assets/images/bt1.jpg)"></a>
                                        <a href="{{ url('assets/images/bt2.jpg') }}" data-fancybox="table-slider"
                                            class="book-table-img back-img swiper-slide"
                                            style="background-image: url(assets/images/bt2.jpg)"></a>
                                        <a href="{{ url('assets/images/bt3.jpg') }}" data-fancybox="table-slider"
                                            class="book-table-img back-img swiper-slide"
                                            style="background-image: url(assets/images/bt3.jpg)"></a>
                                        <a href="{{ url('assets/images/bt4.jpg') }}" data-fancybox="table-slider"
                                            class="book-table-img back-img swiper-slide"
                                            style="background-image: url(assets/images/bt4.jpg)"></a>
                                        <a href="{{ url('assets/images/bt1.jpg') }}" data-fancybox="table-slider"
                                            class="book-table-img back-img swiper-slide"
                                            style="background-image: url(assets/images/bt1.jpg)"></a>
                                        <a href="{{ url('assets/images/bt2.jpg') }}" data-fancybox="table-slider"
                                            class="book-table-img back-img swiper-slide"
                                            style="background-image: url(assets/images/bt2.jpg)"></a>
                                        <a href="{{ url('assets/images/bt3.jpg') }}" data-fancybox="table-slider"
                                            class="book-table-img back-img swiper-slide"
                                            style="background-image: url(assets/images/bt3.jpg)"></a>
                                        <a href="{{ url('assets/images/bt4.jpg') }}" data-fancybox="table-slider"
                                            class="book-table-img back-img swiper-slide"
                                            style="background-image: url(assets/images/bt4.jpg)"></a>
                                    </div>

                                    <div class="swiper-button-wp">
                                        <div class="swiper-button-prev swiper-button">
                                            <i class="uil uil-angle-left"></i>
                                        </div>
                                        <div class="swiper-button-next swiper-button">
                                            <i class="uil uil-angle-right"></i>
                                        </div>
                                    </div>
                                    <div class="swiper-pagination"></div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>

            </section>

            <section class="our-team section">
                <div class="sec-wp">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="sec-title text-center mb-5">
                                    <p class="sec-sub-title mb-3">Tim Kami</p>
                                    <h2 class="h2-title">Berkenalan dengan Tim</h2>
                                    <div class="sec-title-shape mb-4">
                                        <img src="{{ url('assets/images/title-shape.svg') }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row team-slider">
                            <div class="swiper-wrapper">
                                <div class="col-lg-4 swiper-slide">
                                    <div class="team-box text-center">
                                        <div style="background-image: url(assets/images/Tim/c1.jpeg);"
                                            class="team-img back-img">

                                        </div>
                                        <h3 class="h3-title">Marlina</h3>
                                        <div class="social-icon">
                                            <ul>
                                                <li>
                                                    <a href="#"><i class="uil uil-facebook-f"></i></a>
                                                </li>
                                                <li>
                                                    <a href="https://www.instagram.com/marlina31_/">
                                                        <i class="uil uil-instagram"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="uil uil-linkedin"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 swiper-slide">
                                    <div class="team-box text-center">
                                        <div style="background-image: url(assets/images/Tim/c2.jpg);"
                                            class="team-img back-img">

                                        </div>
                                        <h3 class="h3-title">Najla Raihana Kamila</h3>
                                        <div class="social-icon">
                                            <ul>
                                                <li>
                                                    <a href="#"><i class="uil uil-facebook-f"></i></a>
                                                </li>
                                                <li>
                                                    <a href="https://www.instagram.com/najlarhana/">
                                                        <i class="uil uil-instagram"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="uil uil-linkedin"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 swiper-slide">
                                    <div class="team-box text-center">
                                        <div style="background-image: url(assets/images/Tim/c3.jpg);"
                                            class="team-img back-img">

                                        </div>
                                        <h3 class="h3-title">Aulia Muzhaffar</h3>
                                        <div class="social-icon">
                                            <ul>
                                                <li>
                                                    <a href="#"><i class="uil uil-facebook-f"></i></a>
                                                </li>
                                                <li>
                                                    <a href="https://www.instagram.com/muzhaffar_02/">
                                                        <i class="uil uil-instagram"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="uil uil-linkedin"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 swiper-slide">
                                    <div class="team-box text-center">
                                        <div style="background-image: url(assets/images/Tim/c4.jpg);"
                                            class="team-img back-img">

                                        </div>
                                        <h3 class="h3-title">Ardiansyah</h3>
                                        <div class="social-icon">
                                            <ul>
                                                <li>
                                                    <a href="#"><i class="uil uil-facebook-f"></i></a>
                                                </li>
                                                <li>
                                                    <a href="https://www.instagram.com/ardiansyah25ar/">
                                                        <i class="uil uil-instagram"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="uil uil-linkedin"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 swiper-slide">
                                    <div class="team-box text-center">
                                        <div style="background-image: url(assets/images/Tim/c5.jpg);"
                                            class="team-img back-img">

                                        </div>
                                        <h3 class="h3-title">Miftah Nadya</h3>
                                        <div class="social-icon">
                                            <ul>
                                                <li>
                                                    <a href="#"><i class="uil uil-facebook-f"></i></a>
                                                </li>
                                                <li>
                                                    <a href="https://www.instagram.com/miiftahnadyaa/">
                                                        <i class="uil uil-instagram"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="uil uil-linkedin"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-button-wp">
                                <div class="swiper-button-prev swiper-button">
                                    <i class="uil uil-angle-left"></i>
                                </div>
                                <div class="swiper-button-next swiper-button">
                                    <i class="uil uil-angle-right"></i>
                                </div>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>
            </section>

    <!-- jquery  -->
    <script src="{{ url('assets/js/jquery-3.5.1.min.js')}}"></script>
    <!-- bootstrap -->
    <script src="{{ url('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ url('assets/js/popper.min.js') }}"></script>

    <!-- fontawesome  -->
    <script src="{{ url('assets/js/font-awesome.min.js')}}"></script>

    <!-- swiper slider  -->
    <script src="{{ url ('assets/js/swiper-bundle.min.js') }}"></script>

    <!-- mixitup -- filter  -->
    <script src="{{ url('assets/js/jquery.mixitup.min.js') }}"></script>

    <!-- fancy box  -->
    <script src="{{ url('assets/js/jquery.fancybox.min.js') }}"></script>

    <!-- parallax  -->
    <script src="{{ url ('assets/js/parallax.min.js') }}"></script>

    <!-- gsap  -->
    <script src="{{ url ('assets/js/gsap.min.js')}}"></script>

    <!-- scroll trigger  -->
    <script src="{{ ('assets/js/ScrollTrigger.min.js')}}"></script>
    <!-- scroll to plugin  -->
    <script src="{{ ('assets/js/ScrollToPlugin.min.js')}}"></script>
    <!-- rellax  -->
    <!-- <script src="assets/js/rellax.min.js"></script> -->
    <!-- <script src="assets/js/rellax-custom.js"></script> -->
    <!-- smooth scroll  -->
    <script src="{{ url('assets/js/smooth-scroll.js')}}"></script>
    <!-- custom js  -->
    <script src="{{ url('main.js')}}"></script>

    @endsection
