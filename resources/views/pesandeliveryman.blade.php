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
      <div class="mt-2 mb-2">
        <form>
          <div class="row justify-content-center mt-3 mb-3">
            <label for="inputnama" class="col-2 col-form-label">Nama</label>
            <div class="col-4">
              <input
                type="text"
                class="form-control"
                id="nama"
                placeholder="Masukkan Nama"
                name="nama"
              />
            </div>
          </div>
          <div class="row justify-content-center mb-3">
            <label for="inputnohp" class="col-2 col-form-label">No Hp</label>
            <div class="col-4">
              <input
                type="text"
                class="form-control"
                id="nohp"
                placeholder="Masukkan No Hp"
                name="nohp"
              />
            </div>
          </div>
          <div class="row justify-content-center mb-3">
            <label for="jumlah" class="col-2 col-form-label"
              >Berat Minyak (liter)</label>
            <div class="col-4">
              <input
                type="number"
                class="form-control"
                id="jumlah"
                placeholder="Masukkan Berat Minyak"
                name="jumlah"
              />
              <div class="form-text">Contoh: 5</div>
            </div>
          </div>
          <div class="row justify-content-center mb-3">
            <label for="formFileMultiple" class="col-2 col-form-label"
              >Foto Minyak</label
            >
            <div class="col-4">
              <input
                class="form-control"
                type="file"
                id="formFileMultiple"
                multiple
              />
            </div></div>
          <div class="row justify-content-center mb-3">
            <label for="alamat" class="col-2 col-form-label">Alamat</label>
            <div class="col-4">
              <input
                type="text"
                class="form-control"
                id="alamat"
                placeholder="Masukkan Alamat"
                name="alamat"
              />
              <div class="form-text">
                Contoh: Jalan Raya No. 123, Banda Aceh
              </div>
            </div>
          </div>
          <div class="row justify-content-center mb-3">
            <label for="tanggal" class="col-2 col-form-label">Tanggal</label>
            <div class="col-4">
              <input
                type="date"
                class="form-control"
                id="tanggal"
                name="tanggal"
              />
            </div>
          </div>
          <div class="row justify-content-center mb-3">
            <label for="waktu" class="col-2 col-form-label">Waktu</label>
            <div class="col-4">
              <input type="time" class="form-control" id="waktu" name="waktu" />
            </div>
          </div>
          <div class="row justify-content-center mb-3">
            <label for="keterangan" class="col-2 col-form-label"
              >Keterangan</label>
            <div class="col-4">
              <textarea
                class="form-control"
                id="keterangan"
                placeholder="Masukkan Keterangan"
                name="keterangan"
                rows="3"
              ></textarea>
            </div>
          </div>
          <div class="d-flex justify-content-center gap-5">
          <button type="button" class="btn btn-primary" id="pesanButton">Pesan</button>
          <a href="{{ route('deskripsi_deliveryman') }}" class="btn btn-outline-primary">Batal</a>
          </div>
        </form>
        </div>
    </div>
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