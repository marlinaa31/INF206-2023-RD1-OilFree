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
            <a href="{{ route('point') }}" class="btn btn-Kembali">Kembali</a>
            <a class="navbar-brand" href="#">Tukar Point</a>
            <p align="center"></p>
        </div>
    </nav>
    <div class="container mt-5">
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
</body>
</html>
