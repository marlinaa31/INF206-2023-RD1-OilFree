<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Alamat User</title>
  <link href="https://cdn.jsdelivr.net/npm/sweetalert2@10/dist/sweetalert2.min.css" rel="stylesheet">
  <!-- file CSS SweetAlert -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
	<link rel="stylesheet" href="{{url('css\alamatuser.css')}}"/>
</head>
<body class="bg-warning">
    <nav class="navbar bg-body-tertiary">
      <div class="container-fluid">
        <a href="{{ route('masuk_pesanan') }}" class="btn btn-Kembali">Kembali</a>
        <a class="navbar-brand" href="#">Oil Free</a>
        <p align="center"></p>
      </div>
    </nav>
<div class="wrapper">
    <div class="title">
      Alamat user
    </div>
    <div class="form">
        <div class="inputfield">
          <label>Username</label>
          <input type="text" class="input">
       </div>  
       <div class="inputfield">
        <label>Alamat</label>
        <textarea class="textarea"></textarea>
     </div>  
      <div class="inputfield">
          <label>Berat minyak</label>
          <input type="text" class="input">
       </div> 
      <div class="inputfield">
          <label>Foto minyak</label>
          <textarea class="textarea"></textarea>
       </div> 
       <div class="d-flex justify-content-center mt-3 gap-5">
      <button type="button" class="btn btn-dark" id="jemputButton">Jemput Sekarang</button>
      </div>
    </div>
</div>	
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<!-- file JavaScript SweetAlert -->
<script>
const jemputButton = document.querySelector('#jemputButton');
jemputButton.addEventListener('click', function(e) {
   e.preventDefault(); // membatalkan aksi default tombol
    Swal.fire({
        text: 'Anda telah sampai ke alamat tujuan!',
    }).then((result)=> {
        if (result.isConfirmed) {
            window.location.href = "{{ route('beri_point') }}"; // mengganti route dan halaman tujuan
        }
      });
  });
</script>
</body>
</html>