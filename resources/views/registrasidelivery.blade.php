<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Registration Form</title>
	<link rel="stylesheet" href="{{url('css/registrasidelivery.css')}}">
</head>
<body>

<div class="wrapper">
    <div class="title">
      Registration Form
    </div>
    <div class="form">
       <div class="inputfield">
          <label>Nama Lengkap</label>
          <input type="text" class="input">
       </div>  
        <div class="inputfield">
          <label>Username</label>
          <input type="text" class="input">
       </div>  
       <div class="inputfield">
          <label>Password</label>
          <input type="password" class="input">
       </div>  
      <div class="inputfield">
          <label>Confirm Password</label>
          <input type="password" class="input">
       </div> 
        <div class="inputfield">
          <label>Jenis Kelamin</label>
          <div class="custom_select">
            <select>
              <option value="">Select</option>
              <option value="male">Laki laki</option>
              <option value="female">Perempuan</option>
            </select>
          </div>
       </div> 
        <div class="inputfield">
          <label>Email Address</label>
          <input type="text" class="input">
       </div> 
      <div class="inputfield">
          <label>No HP</label>
          <input type="text" class="input">
       </div> 
      <div class="inputfield">
          <label>Alamat</label>
          <textarea class="textarea"></textarea>
       </div> 
      <div class="inputfield">
          <label>Jenis kendaraan</label>
          <div class="custom_select">
            <select>
              <option value="">Select</option>
              <option value="Pick Up">Pick Up</option>
              <option value="Truk box">Truk box</option>
              <option value="Truk box">Viar</option>
            </select>
          </div>
       </div> 
       <div class="inputfield">
          <label>Upload Foto Diri</label>
          <input type="file" class="input">
     </div>
     <div class="inputfield">
          <label>Upload Foto KTP</label>
          <input type="file" class="input">
      </div>
      <div class="inputfield">
        <label>Upload Plat kendaraan</label>
        <input type="file" class="input">
   </div>
     <div class="inputfield terms">
          <label class="check">
            <input type="checkbox">
            <span class="checkmark"></span>
          </label>
          <p>Agreed to terms and conditions</p>
       </div> 
      <div class="inputfield">
        <input type="submit" value="Register" class="btn">
      </div>
    </div>
</div>	
	
</body>
</html>