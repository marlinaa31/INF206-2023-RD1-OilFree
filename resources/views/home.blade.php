<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomePage OilFree</title>

    <!--Link to css-->
    <link rel="stylesheet" href="{{url('css/home.css')}}">

    <!-- Box Icons-->
    <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid px-5">
    <a href="#" class="logo"><img src="{{url('images/logo/png')}}" alt=""></a>
        <div class="bx bx-menu" id="menu-icon"></div>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarNavDropdown">
      <ul class="navbar-nav ">
        <li class="nav-item px-3">
          <a class="nav-link active" aria-current="page" href="#">HOME</a>
        </li>
        <li class="nav-item px-3">
          <a class="nav-link" href="#">INFORMASI</a>
        </li>
        <li class="nav-item dropdown px-3">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            DAFTAR
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">User</a></li>
            <li><a class="dropdown-item" href="#">DeliveryMan</a></li>
          </ul>
        </li>
        <li class="nav-item px-3">
            <a class="nav-link" href="#"><i class="fas fa-tags"></i> MASUK</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
       
    <!-- Home -->
    <section class="home" id="home">
        <div class="home-text">
            <span>Welcome To</span>
            <h1>Oil Free</h1>
            <h2>Limbahmu <br>Keutunganmu</h2>
        </div>
        <div class="home-img">
            <img src="img/home.png" alt="">
        </div>
    </section>

    <!-- Link To JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>
</html>
