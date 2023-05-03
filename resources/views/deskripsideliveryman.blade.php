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
<section class="two-col-sec section">
<div class="d-flex justify-content-center mt-3 mb-2">
    <div class="card mb-4" style="max-width: 1200px;">
        <div class="row g-0">
            <div class="col-md-6">
                <div class="card-body">
                    <h5 class="card-title">Delivery Man</h5>
                    <p class="card-text">Deliveryman minyak jelantah adalah layanan yang ditawarkan oleh perusahaan Oil Free yang bekerjasama dengan pabrik biodiesel. 
                        Layanan ini memungkinkan konsumen untuk memesan deliveryman yang akan menjemput minyak jelantah yang sudah tidak terpakai dari rumah atau tempat usaha mereka, dan mengirimkannya ke tempat pengolahan atau daur ulang. </p>
                    <p class="card-text">Proses pemesanan deliveryman untuk minyak jelantah dapat dilakukan melalui situs web OilFree yang disediakan oleh perusahaan. 
                        Konsumen dapat memilih waktu dan lokasi pengambilan minyak jelantah, serta menentukan jumlah minyak jelantah yang akan diambil.</p>
                    <p class="card-text">Setelah pemesanan terkonfirmasi, deliveryman akan datang ke lokasi yang ditentukan untuk menjemput minyak jelantah tersebut. Setelah itu, minyak jelantah akan diangkut ke tempat pengolahan atau daur ulang untuk diolah kembali menjadi produk yang dapat digunakan kembali.</p>
                    <p class="card-text"><small class="text-body-secondary"></small></p>
                    <a href="{{ route('pesan_deliveryman') }}" class="btn btn-dark">Jemput Sekarang</a>
                </div>
            </div>
            <div class="col-md-6">
                <!-- <img src="../img/sabun.jpg" class="img-fluid rounded-start" style="width: 600px; height: 100%; object-fit: fill;" alt="..."> -->

                <img src="https://coastal-law.com/wp-content/uploads/et_temp/best-buy-delivery-driver-murders-customer-scaled-313778_1080x675.jpg" class="img-fluid rounded-start " style="width: 600px; height: 100%; object-fit: fill;" alt="...">
            </div>
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

    <!-- custom js  -->
    <script src="{{ url('main.js')}}"></script>

@endsection
