<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Registration Form</title>
	<link rel="stylesheet" href="{{url('css/registrasiuser.css')}}">
</head>
<body>

<div class="wrapper">
    <div class="title">
      Daftar Akun
    </div>
    <div class="form">
       <div class="inputfield">
          <label>Nama Lengkap</label>
          <input type="text" class="input">
       </div>  
        <div class="inputfield">
          <label>No HP</label>
          <input type="text" class="input">
       </div>  
       <div class="inputfield">
          <label>Alamat Email</label>
          <input type="text" class="input">
       </div>  
       <div class="inputfield">
        <label>Username</label>
        <input type="password" class="input">
       </div> 
      <div class="inputfield">
          <label>Password</label>
          <input type="password" class="input">
       </div> 
        <div class="inputfield">
          <label>Konfirmasi Password</label>
          <input type="text" class="input">
       </div> 
     <div class="inputfield terms">
          <label class="check">
            <input type="checkbox">
            <span class="checkmark"></span>
          </label>
          <p>Menyetujui syarat dan ketentuan</p>
       </div> 
      <div class="inputfield">
        <input type="submit" value="Daftar" class="btn">
      </div>
    </div>
</div>	
	
</body>
</html>