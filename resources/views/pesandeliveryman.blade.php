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
        .card {
            border-radius: 30px;
            overflow: hidden;
        }
    </style>
</head>

<!-- Content -->
<section class="container py-5">
            <div class="row justify-content-center mb-2">
                <div class="col-lg-8">
                    <div class="card shadow-lg border-0 rounded-lg">
                        <div class="card-body">
                            <div class="d-flex justify-content-center align-items-center mt-1 mb-2">
                            <h4 class="mt-2">Form Pemesanan Delivery Man</h4>
                            </div>
							<div class="p-4 bg-white shadow-sm">
							<!-- Form untuk pemesanan -->
              <form action="{{ route('pesan.store') }}" method="POST" class="row g-3">
                @csrf
              <div class="row">
              <div class="col">
              <label for="name" class="form-label">Nama</label>
                  <input type="text" id="nama" name="nama" class="form-control" placeholder="Nama" aria-label="Nama">
              </div>
              <div class="col">
              <label for="nohp" class="form-label">No Handphone</label>
                  <input type="text" id="nohp" name="nohp" class="form-control" placeholder="0823xxxxxxxx" aria-label="0823xxxxxxxx">
              </div>
              </div>
              <div class="mt-4 mb-2">
              <label for="alamat" class="form-label">Alamat</label>
              <textarea class="form-control" id="alamat" name="alamat" placeholder="Alamat..."></textarea>
              </div>
              <div class="row">
              <div class="col mt-3">
              <label for="berat_minyak" class="form-label">Berat Minyak</label>
                  <input type="number" id="berat_minyak" name="berat_minyak" class="form-control" placeholder="Berat Minyak" aria-label="Berat Minyak">
              </div>
              <div class="col mt-3">
              <label for="foto_minyak"" class="form-label">Foto Minyak</label>
                  <input type="file" id="foto_minyak" name="foto_minyak" class="form-control" placeholder="Foto Minyak" aria-label="Foto Minyak">
              </div>
              </div>
              <div class="row">
              <div class="col mt-4 mb-2">
              <label for="tanggal" class="form-label">Tanggal</label>
                  <input type="date" id="tanggal" name="tanggal" class="form-control" placeholder="" aria-label="Tanggal">
              </div>
              <div class="col mt-4 mb-2">
              <label for="waktu" class="form-label">Waktu</label>
                  <input type="time" id="waktu" name="waktu" class="form-control" placeholder="" aria-label="Waktu">
              </div>
              </div>
              <div class="d-flex justify-content-center gap-5 mt-4">
          <button type="submit" class="btn btn-primary">Pesan</button>
          <a href="{{ route('deskripsi_deliveryman') }}" class="btn btn-outline-primary">Batal</a>
          </div>
							</form>
</section>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <!-- file JavaScript SweetAlert -->
    <script>
    const pesanButton = document.querySelector('#pesanButton');
    pesanButton.addEventListener('click', function(e) {
       e.preventDefault(); // membatalkan aksi default tombol
        Swal.fire({
            title: 'Tunggu sebentar',
            text: 'Kami akan segera menemukan deliveryman untuk anda:)',
            icon: 'info',
        }).then((result)=> {
            if (result.isConfirmed) {
                window.location.href = "{{ route('data_deliveryman') }}"; // mengganti route dan halaman tujuan
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
