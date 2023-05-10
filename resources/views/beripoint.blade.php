@extends('layouts.layoutdeliveryman')


@section('content')
        
  <!-- Content -->
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

@endsection
