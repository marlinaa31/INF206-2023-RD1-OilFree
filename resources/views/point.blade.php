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
    <div class="container my-4">
        <div class="row justify-content-center">
            <div class="col-md-2">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Saldo Point</h5>
                        <p class="card-text">5000 Point</p>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
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
                        <div class="d-flex justify-content-end mt-5">
                            <a href="{{ route('tukar-pulsa') }}"  class="btn btn-primary" id="pesanButton">Tukar Point</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
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

