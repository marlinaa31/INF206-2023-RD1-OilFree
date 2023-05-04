@extends('layouts.layoutUser')

@section('content')

<section class="two-col-sec section">
    <div class="container">
      <div class="mb-2">
        <form>
          <div class="row justify-content-center mb-3">
            <label for="validationNama" class="col-2 col-form-label">
              Nama
            </label>
            <div class="col-4">
              <input
                type="text"
                class="form-control is-valid"
                id="validationNama"
                placeholder="Masukkan Nama"
                name="nama"
                required>
              <div class="valid-feedback">
                Cek kembali nama
              </div>            
            </div>
          </div>
          <div class="row justify-content-center mb-3">
          <label for="validationNoHp" class="col-2 col-form-label">
            No Hp
          </label>
            <div class="col-4">
              <input
                type="text"
                class="form-control is-valid"
                id="validationNoHp"
                placeholder="Masukkan Nama"
                name="nama"
                required>
              <div class="valid-feedback">
                Cek kembali No Hp
              </div>
            </div>
          </div>
          <div class="row justify-content-center mb-3">
            <label for="ValidationJumlah" class="col-2 col-form-label"
              >Berat Minyak (liter)
            </label>
            <div class="col-4">
              <input
                type="number"
                class="form-control"
                id="jumlah"
                placeholder="Masukkan Berat Minyak"
                name="jumlah"
                required>
              <div class="valid-feedback">
                Cek kembali berat minyak
              </div>
              <div class="form-text">
                Contoh: 10
              </div>
            </div>
          </div>
          <div class="row justify-content-center mb-3">
            <label for="formFileMultiple" class="col-2 col-form-label"
              >Foto Minyak
              </label>
            <div class="col-4">
              <input
                class="form-control is-valid"
                type="file"
                id="formFileMultiple"
                multiple
                required>
              <div class="valid-feedback">
                Foto sudah tersimpan
            </div>
          </div>
        </div>
          <div class="row justify-content-center mb-3">
          <label for="ValidationAlamat" class="col-2 col-form-label"
              >Alamat
            </label>
            <div class="col-4">
              <input
                type="text"
                class="form-control is-valid"
                id="alamat"
                placeholder="Masukkan Alamat"
                name="alamat"
                required>
              <div class="form-text">
                Contoh: Jalan Raya No. 123, Banda Aceh
              </div>
              <div class="valid-feedback">
                Cek kembali alamat
              </div>
            </div>
          </div>
          <div class="row justify-content-center mb-3">
            <label for="ValidationTanggal" class="col-2 col-form-label">
              Tanggal
            </label>
            <div class="col-4">
              <input
                type="date"
                class="form-control is-valid"
                id="tanggal"
                name="tanggal"
                required>
              <div class="valid-feedback">
                Cek kembali tanggal
              </div>
            </div>
          </div>
          <div class="row justify-content-center mb-3">
            <label for="ValidationWaktu" class="col-2 col-form-label">
              Waktu
            </label>
            <div class="col-4">
              <input 
              type="time" 
              class="form-control is-valid" 
              id="waktu" 
              name="waktu"
              required>
              <div class="valid-feedback">
                Cek kembali waktu
              </div>
            </div>
          </div>
          <div class="row justify-content-center mb-3">
            <label for="Validationketerangan" class="col-2 col-form-label">
              Keterangan
            </label>
            <div class="col-4">
              <textarea
                class="form-control is-valid"
                id="keterangan"
                placeholder="Masukkan Keterangan"
                name="keterangan"
                rows="3">
              </textarea>
              <div class="valid-feedback">
                  Keterangan adalah opsional
              </div>
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