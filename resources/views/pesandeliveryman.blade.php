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

            <button type="button" class="btn btn-Kembali">Kembali</button>
            <a class="navbar-brand" href="#">Delivery Man</a>
            <p align="center">
            </p>
        </div>
    </nav>

<div class="container">
    <div class="d-flex justify-content-center mt-3 mb-2">
        <p align="center"></p>
    </div>
		<div class="row mb-3">
            <label for="inputnama" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama" name="nama">
            </div>
          </div>
        <div class="row mb-3">
            <label for="inputnohp" class="col-sm-2 col-form-label">No Hp</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" id="nohp" placeholder="Masukkan No Hp" name="nohp">
            </div>
          </div>
        <div class="row mb-3">
			<label for="jumlah" class="col-sm-2 col-form-label">Berat Minyak (liter)</label>
            <div class="col-sm-5">
			<input type="number" class="form-control" id="jumlah" placeholder="Masukkan Berat Minyak" name="jumlah">
			<div class="form-text">Contoh: 5</div>
            </div>
		</div>
        <div class="row mb-3">
            <label for="formFileMultiple" class="col-sm-2 col-form-label">Foto Minyak</label>
            <div class="col-sm-5">
            <input class="form-control" type="file" id="formFileMultiple" multiple>
            </div>
        </div>
		<div class="row mb-3">
			<label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" id="alamat" placeholder="Masukkan Alamat" name="alamat">
                <div class="form-text">Contoh: Jalan Raya No. 123, Banda Aceh</div>
            </div>
		</div>
		<div class="row mb-3">
			<label for="tanggal" class="col-sm-2 col-form-label">Tanggal</label>
            <div class="col-sm-5">
			    <input type="date" class="form-control" id="tanggal" name="tanggal">
            </div>
		</div>
		<div class="row mb-3">
			<label for="waktu" class="col-sm-2 col-form-label">Waktu</label>
            <div class="col-sm-5">
                <input type="time" class="form-control" id="waktu" name="waktu">
            </div>
		</div>
		<div class="row mb-3">
			<label for="keterangan" class="col-sm-2 col-form-label">Keterangan</label>
            <div class="col-sm-5">
			<textarea class="form-control" id="keterangan" placeholder="Masukkan Keterangan" name="keterangan" rows="3"></textarea>
            </div>
		</div>
		<button type="submit" class="btn btn-dark">Pesan</button>
        <button type="button" class="btn btn-link">Cancel</button>
	</form>
</div>

</body>
</html>
