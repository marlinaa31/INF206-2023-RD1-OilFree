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
    <style>
        .bg-white {
            border-radius: 40px;
            overflow: hidden;
        }
    </style>
</head>
<section class="two-col-sec section">
    <div class="container ">
        <div class="d-flex justify-content-center align-items-center mt-2 mb-2">
            <div class="row mb-3 mx-auto">
                <!-- <div class="col-10"> -->
                <div class="p-5 bg-white shadow-sm">
                    <h3 class="fw-bold mb-2">Deliveryman Profile</h3>
                    <p class="lead mb-4">Informasi detail mengenai deliveryman</p>
                    <div class="row align-items-center">
                        <div class="col-md-4 mb-4 mb-md-0">
                            <img src="https://via.placeholder.com/200" class="img-fluid rounded-circle"
                                alt="Deliveryman Photo" />
                        </div>
                        <div class="col-md-8">
                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="Nama" placeholder="Nama" />
                                        <label for="floatingNama">Nama</label>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="No Hp" placeholder="No Hp" />
                                        <label for="floatingNoHp">No Hp</label>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="Jenis Kendaraan"
                                            placeholder="Jenis Kendaraan" />
                                        <label for="floatingJenisKendaraan">Jenis Kendaraan</label>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="Plat Kendaraan"
                                            placeholder="Plat Kendaraan" />
                                        <label for="floatingPlatKendaraan">Plat Kendaraan</label>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-center gap-5 mt-4 mb-4">
                                    <button type="button" class="btn btn-primary" id="selesaiButton">Selesai</button>
                                    <a href="{{ route('pesan_deliveryman') }}" class="btn btn-outline-primary">Batal</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- </div> -->

            </div>
        </div>
    </div>
</section>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <!-- file JavaScript SweetAlert -->
    <script>
    const selesaiButton = document.querySelector('#selesaiButton');
    selesaiButton.addEventListener('click', function(e) {
       e.preventDefault(); // membatalkan aksi default tombol
        Swal.fire({
            title: 'Terimakasih',
            text: 'Deliveryman on the way!',
            icon: 'success',
        }).then((result)=> {
            if (result.isConfirmed) {
                window.location.href = "{{ route('deskripsi_deliveryman') }}"; // mengganti route dan halaman tujuan
            }
          });
      });
    </script>
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
