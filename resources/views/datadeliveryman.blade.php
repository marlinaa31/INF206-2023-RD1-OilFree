<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Delivery</title>
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@10/dist/sweetalert2.min.css" rel="stylesheet" />
    <!-- file CSS SweetAlert -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" />
</head>

<body class="bg-warning">
    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
            <a href="{{ route('pesan_deliveryman') }}" class="btn btn-Kembali">Kembali</a>
            <a class="navbar-brand" href="#">Delivery Man</a>
            <p align="center"></p>
        </div>
    </nav>

    <div class="container ">
        <div class="d-flex justify-content-center align-items-center mt-5 mb-2">
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
</body>
