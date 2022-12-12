<?php

require("function.php");
$penduduk = query("SELECT * FROM datapenduduk");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>HTML</title>
  
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <nav>
    <div class="brand"></div>
    <div class="wadahMenu">
    
    <div class="menu"></div>
    </div>
    
  </nav>
  
  <br />
  <div class="breadcrumb">
    <a href="#">Home</a>&nbsp;&nbsp;
    <a>⟩</a>&nbsp;&nbsp;
    <a href="#">Admin</a>
  </div>
  <br />
 
 <h4>Data siswa</h4>
 
 <table border="1">
   
   <tr>
     
     <th>No</th>
     <th>Nama</th>
     <th>Umur</th>
     <th>Gender</th>
     <th>Pendidikan</th>
     <th>Setting</th>
     
   </tr>
  
      <?php $i = 1; ?>
   <?php foreach ($penduduk as $pdk) : ?>
   <tr class="isiTabel">
       
     <td><?= $i ?></td>
     <td><?= $pdk["Nama"] ?></td>
     <td><?= $pdk["Umur"] ?></td>
     <td><?= $pdk["Gender"] ?></td>
     <td><?= $pdk["Pendidikan"] ?></td>
     <td><a class="edit" href="ubah.php?id= <?= $pdk['No'] ?>">Edit</a><a class="hapus" href="hapus.php?No= <?= $pdk['No'] ?>" onclick="return confirm('anda yakin ingin menghapus data?')">Hapus</a></td>
     
   </tr>

     <?php $i++; ?>
  <?php endforeach; ?>
   
 </table>
 
 <br />
 <br />
 
 <a class="tambah" href="tambah.php">Tambah data</a>
 
 
 <footer>
   
   <div class="container-footer">
     <img width="60px" height="60px" src="image/logo-transp.png" alt="image/logo-transp.png">
     <br />
     <div class="footer-menu">
      <p>Mufni,<br>51254, Indonesia</p>
       <ul>
         
         <li>About</li>
         <li>Contact</li>
         <li>Project</li>
         <li>Privacy and policy</li>
       </ul>
     </div>
     <br />
     <p>© Copyright 2022, By mufni</p>
   </div>
   
 </footer>
 
  <script src="main.js"></script>
</body>
</html>
