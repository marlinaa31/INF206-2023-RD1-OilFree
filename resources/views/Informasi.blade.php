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
    <!-- <p class="align-items-center"></p> -->
    <!--card 1-->
    <section class="two-col-sec section">
    <div class="d-flex justify-content-center mt-3 mb-2">
        <div class="card mb-3" style=" max-width: 1350px;">
            <div class="row g-0">
                <div class="col-md-6">
                    <img src="https://images.unsplash.com/photo-1600857544200-b2f666a9a2ec?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80"
                        class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-6">
                    <div class="card-body">
                        <h5 class="card-title">Sabun</h5>
                        <p class="card-text">

                            Sabun dapat dibuat dari minyak jelantah dengan proses saponifikasi, di mana minyak jelantah
                            bereaksi dengan soda kaustik (NaOH) untuk menghasilkan senyawa sabun dan gliserol. Proses
                            ini melibatkan pemanasan dan pencampuran yang dilakukan dengan hati-hati karena soda kaustik
                            adalah zat yang berbahaya.
                            Setelah proses saponifikasi selesai, campuran sabun dan gliserol dipisahkan dari larutan
                            berair dan dijalani proses pemurnian dengan mencuci dan mengeringkannya. Hasil akhirnya
                            adalah sabun yang terbuat dari minyak jelantah yang siap digunakan.
                            Pembuatan sabun dari minyak jelantah merupakan salah satu bentuk daur ulang yang ramah
                            lingkungan dan membantu mengurangi limbah minyak jelantah yang dapat mencemari lingkungan
                            jika dibuang begitu saja.</p>
                        <p class="card-text"><small class="text-body-secondary"></small></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- card 2 -->
    <div class="d-flex justify-content-center mt-4 mb-5">
        <div class="card mb-5" style=" max-width: 1350px;">
            <div class="row g-0">

                <div class="col-md-6">
                    <div class="card-body">
                        <h5 class="card-title">Pupuk</h5>
                        <p class="card-text">

                            Pembuatan pupuk dari minyak jelantah melibatkan proses pengolahan limbah minyak jelantah
                            menjadi bahan organik yang dapat digunakan sebagai pupuk tanaman. Prosesnya meliputi
                            pemisahan minyak dari limbah, pengolahan dengan bantuan mikroorganisme, dan pengeringan
                            hingga menjadi bentuk granul atau serbuk. Pupuk yang dihasilkan dari minyak jelantah dapat
                            membantu meningkatkan kesuburan tanah dan memperbaiki kualitas pertumbuhan tanaman secara
                            alami, sambil juga membantu mengurangi limbah yang mencemari lingkungan. Namun, sebelum
                            digunakan, pupuk dari minyak jelantah harus diuji dan dijamin aman bagi kesehatan manusia
                            dan lingkungan.</p>
                        <p class="card-text"><small class="text-body-secondary"></small></p>
                    </div>
                </div>
                <div class="col-md-6">
                    <img src="https://images.unsplash.com/photo-1609784969374-b53a14d91338?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80"
                        class="img-fluid rounded-start " alt="...">
                </div>
            </div>
        </div>
    </div>
    <!-- card 3 -->
    <div class="d-flex justify-content-center mb-2">
        <div class="card mb-3" style=" max-width: 1350px;">
            <div class="row g-0">
                <div class="col-md-6">
                    <img src="https://images.unsplash.com/photo-1630487378070-ec90568485b3?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1098&q=80"
                        class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-6">
                    <div class="card-body">
                        <h5 class="card-title">Bahan bakar lampu</h5>
                        <p class="card-text">

                            Pembuatan bahan bakar lampu dari minyak jelantah melibatkan proses pengolahan minyak
                            jelantah menjadi bahan bakar yang dapat digunakan sebagai pengganti minyak tanah pada lampu.
                            Prosesnya meliputi pemisahan minyak dari limbah, pengolahan dengan bantuan bahan kimia, dan
                            penyulingan hingga menjadi bahan bakar yang dapat digunakan pada lampu. Bahan bakar lampu
                            yang dihasilkan dari minyak jelantah dapat membantu mengurangi ketergantungan pada bahan
                            bakar fosil dan membantu mengurangi limbah yang mencemari lingkungan. Namun, sebelum
                            digunakan, bahan bakar lampu dari minyak jelantah harus diuji dan dijamin aman bagi
                            kesehatan manusia dan lingkungan.</p>
                        <p class="card-text"><small class="text-body-secondary"></small></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- card 4 -->
    <div class="d-flex justify-content-center mt-4 mb-2">
        <div class="card mb-3" style=" max-width: 1350px;">
            <div class="row g-0">
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
