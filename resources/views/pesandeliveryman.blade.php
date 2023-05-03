@extends('layouts.layoutUser')

@section('content')

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Delivery</title>
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@10/dist/sweetalert2.min.css" rel="stylesheet">

    <!-- file CSS SweetAlert -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>

  <body class="bg-warning">
    <nav class="navbar bg-body-tertiary">
      <div class="container-fluid">
        <a href="{{ route('deskripsi_deliveryman') }}" class="btn btn-Kembali">Kembali</a>
        <a class="navbar-brand" href="#">Delivery Man</a>
        <p align="center"></p>
      </div>
    </nav>
    @endsection

    @section('content')
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg p-4 text-gray-700 border border-gray-200 bg-gray-50">
    <div class="container">
      <div class="mt-3 mb-2">
        <form>
          <div class="row justify-content-center mt-5 mb-3">
            <label for="validationServer01" class="col-2 col-form-label">
              Nama
            </label>
            <div class="col-4">
              <input
                type="text"
                class="form-control is-valid"
                id="validationServer01"
                placeholder="Masukkan Nama"
                name="nama"
                required>
            <div class="valid-feedback">
              Cek kembali Nama
            </div>
          </div>
          <div class="row justify-content-center mb-3">
            <label for="validationServerNama" class="col-2 col-form-label">
              No Hp
            </label>
            <div class="col-4">
              <input
                type="text"
                class="form-control is-valid"
                id="validationServerNama"
                placeholder="Masukkan No Hp"
                name="nohp"
                required>
            <div class="valid-feedback">
              Cek kembali nomor Hp
            </div>
          </div>
          <div class="row justify-content-center mb-3">
            <label for="ValidationServerJumlah" class="col-2 col-form-label">
              Berat Minyak (liter)
            </label>
            <div class="col-4">
              <input
                type="number"
                class="form-control is-valid"
                id="ValidationServerJumlah"
                placeholder="Masukkan Berat Minyak"
                name="jumlah"
                required>
            <div class="valid-feedback">
              Cek kembali Berat Minyak
            </div>
              <div class="form-text">
                Contoh: 10
              </div>
            </div>
          </div>
          <div class="row justify-content-center mb-3">
            <label for="formFileMultiple" class="col-2 col-form-label">
              Foto Minyak
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
          <div class="row justify-content-center mb-3">
            <label for="alamat" class="col-2 col-form-label">
              Alamat
            </label>
            <div class="col-4">
              <input
                type="text"
                class="form-control is-valid"
                id="alamat"
                placeholder="Masukkan Alamat"
                name="alamat"
              required>
              <div class="valid-feedback">
                Cek kembali alamat
              </div>
              <div class="form-text">
                Contoh: Jalan Raya No. 123, Banda Aceh
              </div>
            </div>
          </div>
          <div class="row justify-content-center mb-3">
            <label for="tanggal" class="col-2 col-form-label">
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
            <label for="waktu" class="col-2 col-form-label">
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
            <label for="keterangan" class="col-2 col-form-label">
              Keterangan
            </label>
            <div class="col-4">
              <textarea
                class="form-control is-valid"
                id="keterangan"
                placeholder="Masukkan Keterangan"
                name="keterangan"
                rows="3"
              ></textarea>
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
  </body>
</html>

@endsection
