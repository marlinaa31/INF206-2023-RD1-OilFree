<!DOCTYPE html>
<html lang="en">
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
        <a href="{{ route('alamat_user') }}" class="btn btn-Kembali">Kembali</a>
        <a class="navbar-brand" href="#">Delivery Man</a>
        <p align="center"></p>
      </div>
    </nav>
	<div class="container">
	<div class="d-flex justify-content-center align-items-center mt-5 mb-2">
	<div class="p-5 bg-white shadow-sm">
		<h4 class="mt-0">Memberikan Poin kepada User</h4>
		<div class="p-4 bg-white shadow-sm">
		<!-- Form untuk memberikan poin -->
		<form>
			<div class="mb-3 mt-2">
				<label for="username" class="form-label">Username</label>
				<input type="text" class="form-control" id="username" name="username">
			</div>
			<div class="mb-3">
				<label for="berat_minyak" class="form-label">Berat Minyak (liter)</label>
				<input type="number" class="form-control" id="berat_minyak" name="berat_minyak">
			</div>
			<div class="mb-3">
				<label for="jumlah_poin" class="form-label">Jumlah Poin</label>
				<input type="number" class="form-control" id="jumlah_poin" name="jumlah_poin">
			</div>
		</form>

		<!-- Tombol "Selesai" di sudut kanan bawah -->
		<div class="d-flex justify-content-end mt-4">
            <button type="button" class="btn btn-primary" id="beriButton">Berikan Poin</button>
        </div>
</div>
	</div>
	</div>

	<!-- Memanggil file JavaScript Bootstrap 5 -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
	
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
	<!-- file JavaScript SweetAlert -->
    <script>
    const beriButton = document.querySelector('#beriButton');
beriButton.addEventListener('click', function(e) {
   e.preventDefault(); // membatalkan aksi default tombol
   Swal.fire({
        title: 'Apakah anda yakin?',
        text: "Point akan dikirim kepada User sebanyak XX point!!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ya, Saya yakin!'
    }).then((result) => {
        if (result.isConfirmed) {
            Swal.fire(
                'Selamat!',
                'Point berhasil dikirim!!!.',
                'success'
            ).then(() => {
                window.location.href = "{{ route('dashboard_deliveryman') }}"; // mengganti route dan halaman tujuan
            });
        }
    });
});

    </script>
</body>
</html>
