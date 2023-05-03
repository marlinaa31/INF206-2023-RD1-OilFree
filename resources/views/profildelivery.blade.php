<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="{{url('css\profildelivery.css')}}">

    <title>Profil</title>
</head>
<body class="bg-warning">
    <nav class="navbar bg-body-tertiary">
      <div class="container-fluid">
        <a href="{{ route('dashboard_deliveryman') }}" class="btn btn-Kembali">Kembali</a>
        <a class="navbar-brand" href="#">Profil Deliveryman</a>
        <p align="center"></p>
      </div>
    </nav>

    <div class="container rounded bg-white mt-5 mb-5">
        <div class="row">
            <div class="col-md-3 border-right">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                    <img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><span class="font-weight-bold">Edogaru</span><span class="text-black-50">edogaru@mail.com.my</span><span> </span></div>
                </div>
                <div class="col-md-5 border-right">
                    <div class="p-3 py-5">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h4 class="text-right">Profile Settings</h4>
                        </div>
                    <div class="row mt-2">
                        <div class="col-md-6"><label class="labels">Nama depan</label>
                        <input type="text" class="form-control" placeholder="nama depan" value="">
                    </div>
                        <div class="col-md-6"><label class="labels">Nama Belakang</label>
                        <input type="text" class="form-control" value="" placeholder="nama belakang">
                    </div>
                </div>
                    <div class="row mt-3">
                        <div class="col-md-12"><label class="labels">Jenis Kelamin</label>
                        <input type="text" class="form-control" placeholder="Jenis Kelamin" value="">
                    </div>
                        <div class="col-md-12"><label class="labels">Email</label>
                        <input type="text" class="form-control" placeholder="Email" value="">
                    </div>
                        <div class="col-md-12"><label class="labels">No Hp</label>
                        <input type="text" class="form-control" placeholder="No Hp" value="">
                    </div>
                        <div class="col-md-12"><label class="labels">Alamat</label>
                        <input type="text" class="form-control" placeholder="Alamat" value="">
                    </div>
                        <div class="col-md-12"><label class="labels">Jenis Kendaraan</label>
                        <input type="text" class="form-control" placeholder="Jenis Kendaraan" value="">
                    </div>
                        <div class="col-md-12"><label class="labels">Plat Kendaraan</label>
                        <input type="text" class="form-control" placeholder="Plat Kendaraan" value="">
                    </div>
                        <div class="col-md-12"><label class="labels">Upload Foto Diri</label>
                        <input type="text" class="form-control" placeholder="Upload Foto Diri" value="">
                    </div>
                        <div class="col-md-12"><label class="labels">Upload Foto KTP</label>
                        <input type="text" class="form-control" placeholder="education" value="">
                    </div>
                </div>
                    <div class="row mt-3">
                        <div class="col-md-6">
                            <label class="labels">Country</label>
                            <input type="text" class="form-control" placeholder="country" value="">
                        </div>
                        <div class="col-md-6">
                            <label class="labels">State/Region</label>
                            <input type="text" class="form-control" value="" placeholder="state">
                        </div>
                    </div>
                    <div class="mt-5 text-center">
                        <button type="button" class="btn btn-primary profile-button">Save Profile</button>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center experience">
                        <span>Edit Experience</span>
                        <span class="border px-3 p-1 add-experience">
                            <i class="fa fa-plus"></i>&nbsp;Experience</span></div><br>
                    <div class="col-md-12"><label class="labels">Experience in Designing</label>
                        <input type="text" class="form-control" placeholder="experience" value="">
                    </div> <br>
                    <div class="col-md-12"><label class="labels">Additional Details</label>
                        <input type="text" class="form-control" placeholder="additional details" value="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
</body>
</html>
