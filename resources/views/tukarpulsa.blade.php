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
<section class="two-col-sec section">
    <div class="container">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="card shadow-lg border-0 rounded-lg">
                        <div class="card-body">
                            <form action="#" method="POST">
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="no_hp" name="no_hp" type="tel" placeholder="Nomor HP"/>
                                    <label for="no_hp">Nomor HP</label>
                                </div>
                                <div class="mb-0">
                                <div id="nominal_terpilih">
                                    <p>Pilih Nominal Pulsa:</p>
                                    <div class="mb-3">
                                                <div class="d-flex justify-content-center gap-5">
                                                <button type="button" class="btn btn-outline-info btn-nominal" data-nominal="5000">Rp5.000<br>Harga 500 Poin</button>
                                                <button type="button" class="btn btn-outline-info btn-nominal" data-nominal="10000">Rp10.000<br>Harga 1000 Poin</button>
                                                <button type="button" class="btn btn-outline-info btn-nominal" data-nominal="25000">Rp15.000<br>Harga 2500 Poin</button>
                                            </div>
                                                <div class="col mt-4">
                                                    <div class="mb-3">
                                                        <div class="d-flex justify-content-center gap-5">
                                                <button type="button" class="btn btn-outline-info btn-nominal" data-nominal="50000">Rp20.000<br>Harga 5000 Poin</button>
                                                <button type="button" class="btn btn-outline-info btn-nominal" data-nominal="10000">Rp25.000<br>Harga 1000 Poin</button>
                                                <button type="button" class="btn btn-outline-info btn-nominal" data-nominal="25000">Rp40.000<br>Harga 2500 Poin</button>
                                                <button type="button" class="btn btn-outline-info btn-nominal" data-nominal="50000">Rp50.000<br>Harga 5000 Poin</button>
                                                        </div>
                                            </div>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-end mt-5">
                                        <button type="button" class="btn btn-primary" id="tukarButton">Tukar</button>
                                            </div>
                </form>
            </div>
        </div>
    </div>
</section>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <!-- file JavaScript SweetAlert -->
    <script>
    const tukarButton = document.querySelector('#tukarButton');
    tukarButton.addEventListener('click', function(e) {
       e.preventDefault(); // membatalkan aksi default tombol
        Swal.fire({
            title: 'Selamat',
            text: 'Penukaran Poin Berhasil!',
            icon: 'success',
        }).then((result)=> {
            if (result.isConfirmed) {
                window.location.href = "{{ route('point') }}"; // mengganti route dan halaman tujuan
        }
    });
});
    </script>

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

