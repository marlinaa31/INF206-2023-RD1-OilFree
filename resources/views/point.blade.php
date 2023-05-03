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
            <a href="{{ route('dashboard') }}" class="btn btn-Kembali">Kembali</a>
            <a class="navbar-brand" href="#">Point</a>
            <p align="center"></p>
        </div>
    </nav>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Saldo Point</h5>
                        <p class="card-text">5000 Point</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Saldo Pulsa</h5>
                        <p class="card-text">Rp. 50.000,-</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center mt-5">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Riwayat Penukaran Point</h5>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Tanggal</th>
                                    <th scope="col">Jumlah Point</th>
                                    <th scope="col">Jumlah Pulsa</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>1 Januari 2023</td>
                                    <td>1000</td>
                                    <td>Rp. 10.000,-</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>15 Januari 2023</td>
                                    <td>2000</td>
                                    <td>Rp. 20.000,-</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>20 Januari 2023</td>
                                    <td>1500</td>
                                    <td>Rp. 15.000,-</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>23 Januari 2023</td>
                                    <td>500</td>
                                    <td>Rp. 5.000,-</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>24 Januari 2023</td>
                                    <td>2500</td>
                                    <td>Rp. 25.000,-</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-end mt-5">
            <a href="{{ route('tukar-pulsa') }}"  class="btn btn-primary" id="pesanButton">Tukar Point</a>
            </div>
    </div>
</body>
</html>
