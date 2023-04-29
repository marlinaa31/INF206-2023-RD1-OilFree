<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Alamat User</title>
	<link rel="stylesheet" href="{{url('css\alamatuser.css')}}"/>
</head>
<body>
@include('layouts.Sidebar')
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
      <div class="inputfield">
        <input type="submit" value="Jemput sekarang" class="btn">
      </div>
    </div>
</div>	
	
</body>
</html>