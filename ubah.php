<?php

require("function.php");

if( isset($_POST["submit"])) {
  header("Location:index.php");
  if( ubah($_POST) > 0 ) {
    echo "Data berhasil diubah";
  } else {
    echo "gagal mengubah data";
  }
}

$id = $_GET["id"];
$penduduk = query("SELECT * FROM datapenduduk WHERE No = $id")[0];

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
      <p>Edit data</p>
      <p>masukkan data yang ingin anda ubah</p>
      
    </div>
    
    <div class="form-body" >
      
      <form action="" method="post">
         <input type="hidden" name="id" value="<?= $penduduk['No'] ?>">
      <div class="form-isi">
                <label for="nama">nama</label>
                <input name="nama" type="text" id="nama" value="<?= $penduduk["Nama"] ?>">
      </div>
            <div class="form-isi">
                <label for="umur">umur</label>
                <input name="umur" type="text" id="umur" value="<?= $penduduk["Umur"] ?>">
      </div>
      
            <div class="form-isi">
                <label for="gender">gender</label>
                <input name="gender" type="text" id="gender" value="<?= $penduduk["Gender"] ?>">
      </div>
            <div class="form-isi">
                <label for="pendidikan">pendidikan</label>
                <input name="pendidikan" type="text" id="pendidikan" value="<?= $penduduk["Pendidikan"] ?>">
      </div>
        <button name="submit" class="submit" type="submit">Edit</button>
      </form>
      
    </div>
    
    <div class="form-footer">
      
    </div>
    
  </div>
  
</div>

</body>

</html>
