@extends('layouts.layoutdeliveryman')

@section('content')

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
                    <h2 class="fs-2 m-0">Dashboard</h2>
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle second-text fw-bold" href="#" id="navbarDropdown"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-user me-2"></i>John Doe
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a href="{{ route('profil_delivery') }}" class="dropdown-item" href="#">Profile</a></li>
                                <li><a class="dropdown-item" href="/">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>

            <div class="container-fluid px-4">
                <div class="row g-3 my-2">
                    <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2">720</h3>
                                <p class="fs-5">Total jemput</p>
                            </div>
                            <i class="fas fa-gift fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2">4920 Liter</h3>
                                <p class="fs-5">Total Minyak</p>
                            </div>
                            <i
                                class="fas fa-hand-holding-usd fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                        </div>
                    </div>




                <div class="row my-5">
                    <h3 class="fs-4 mb-3">Riwayat penjemputan</h3>
                    <div class="col">
                        <table class="table bg-white rounded shadow-sm  table-hover">
                            <thead>
                                <tr>
                                    <th scope="col" width="50">#</th>
                                    <th scope="col">tanggal</th>
                                    <th scope="col">Customer</th>
                                    <th scope="col">berat Minyak</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>01/01/2023</td>
                                    <td>Jonny</td>
                                    <td>1 Liter</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>03/01/2023</td>
                                    <td>Kenny</td>
                                    <td>4 Liter</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>05/01/2023</td>
                                    <td>Jenny</td>
                                    <td>10 Liter</td>
                                </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <td>07/01/2023</td>
                                    <td>Killy</td>
                                    <td>4 Liter</td>
                                </tr>
                                <tr>
                                    <th scope="row">5</th>
                                    <td>08/01/2023</td>
                                    <td>Filly</td>
                                    <td>2 Liter</td>
                                </tr>
                               
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- /#page-content-wrapper -->
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        var el = document.getElementById("wrapper");
        var toggleButton = document.getElementById("menu-toggle");

        toggleButton.onclick = function () {
            el.classList.toggle("toggled");
        };
    </script>
</body>

@endsection