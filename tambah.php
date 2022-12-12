<?php

require("function.php");

if( isset($_POST["submit"])) {
  if( tambah($_POST) > 0 ) {
    echo "Data berhasil ditambah ke database";
  } else {
    echo "gagal menambah data";
  }
}

?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="style.css">
  <title></title>
</head>

<body>
  
<div class="container-form">
  
  <div class="form">
    
    <div class="form-head">
      <p>Add data</p>
      <p>masukkan data yang ingin anda tambahkan ke database</p>
      
    </div>
    
    <div class="form-body" >
      
      <form action="" method="post">
        
      <div class="form-isi">
                <label for="nama">nama</label>
                <input name="nama" type="text" id="nama">
      </div>
            <div class="form-isi">
                <label for="umur">umur</label>
                <input name="umur" type="text" id="umur">
      </div>
      
            <div class="form-isi">
                <label for="gender">gender</label>
                <input name="gender" type="text" id="gender">
      </div>
            <div class="form-isi">
                <label for="pendidikan">pendidikan</label>
                <input name="pendidikan" type="text" id="pendidikan">
      </div>
        <button name="submit" class="submit" type="submit">Tambahkan</button>
      </form>
      
    </div>
    
    <div class="form-footer">
      
    </div>
    
  </div>
  
</div>

</body>

</html>
