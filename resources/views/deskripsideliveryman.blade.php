<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Delivery</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body class="bg-warning">
<nav class="navbar bg-body-tertiary">
    <div class="container-fluid">
        <a href="{{ route('dashboard') }}" class="btn btn-Kembali">Kembali</a>
        <a class="navbar-brand" href="#">Delivery Man</a>
        <p align="center">
        </p>
    </div>
</nav>
<!-- <p class="align-items-center"></p> -->
<div class="d-flex justify-content-center mt-5 mb-2">
    <div class="card mb-4" style="max-width: 1200px;">
        <div class="row g-0">
            <div class="col-md-6">
                <div class="card-body">
                    <h5 class="card-title">Delivery Man</h5>
                    <p class="card-text">Deliveryman minyak jelantah adalah layanan yang ditawarkan oleh perusahaan Oil Free yang bekerjasama dengan pabrik biodiesel. 
                        Layanan ini memungkinkan konsumen untuk memesan deliveryman yang akan menjemput minyak jelantah yang sudah tidak terpakai dari rumah atau tempat usaha mereka, dan mengirimkannya ke tempat pengolahan atau daur ulang. </p>
                    <p class="card-text">Proses pemesanan deliveryman untuk minyak jelantah dapat dilakukan melalui situs web OilFree yang disediakan oleh perusahaan. 
                        Konsumen dapat memilih waktu dan lokasi pengambilan minyak jelantah, serta menentukan jumlah minyak jelantah yang akan diambil.</p>
                    <p class="card-text">Setelah pemesanan terkonfirmasi, deliveryman akan datang ke lokasi yang ditentukan untuk menjemput minyak jelantah tersebut. Setelah itu, minyak jelantah akan diangkut ke tempat pengolahan atau daur ulang untuk diolah kembali menjadi produk yang dapat digunakan kembali.</p>
                    <p class="card-text"><small class="text-body-secondary"></small></p>
                    <a href="{{ route('pesan_deliveryman') }}" class="btn btn-dark">Jemput Sekarang</a>
                </div>
            </div>
            <div class="col-md-6">
                <!-- <img src="../img/sabun.jpg" class="img-fluid rounded-start" style="width: 600px; height: 100%; object-fit: fill;" alt="..."> -->

                <img src="https://coastal-law.com/wp-content/uploads/et_temp/best-buy-delivery-driver-murders-customer-scaled-313778_1080x675.jpg" class="img-fluid rounded-start " style="width: 600px; height: 100%; object-fit: fill;" alt="...">
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
</body>
</html>
