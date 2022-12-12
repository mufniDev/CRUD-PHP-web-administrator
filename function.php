<?php

$koneksi = mysqli_connect('127.0.0.1','root','119205','latihanphp');

function query($query) {
  global $koneksi;
  $result = mysqli_query($koneksi, $query);
  $rows = [];
  while( $row = mysqli_fetch_assoc($result)) {
  $rows[] = $row;
  }
  return $rows;
}

function tambah($data) {
  global $koneksi;
  $nama = htmlspecialchars($data["nama"]);
  $umur = htmlspecialchars($data["umur"]);
  $gender = htmlspecialchars($data["gender"]);
  $pendidikan = htmlspecialchars($data["pendidikan"]);
  
  $dat = "INSERT INTO datapenduduk VALUES(NULL , '$nama', '$umur', '$gender', '$pendidikan')
            ";
            mysqli_query($koneksi, $dat);
            
            return mysqli_affected_rows($koneksi);
}

function hapus($id) {
  global $koneksi;
  mysqli_query($koneksi, "DELETE FROM datapenduduk WHERE No = $id");
  return mysqli_affected_rows($koneksi);
}


function ubah($data) {
  global $koneksi;
  
  $id = $data["id"];
  $nama = htmlspecialchars($data["nama"]);
  $umur = htmlspecialchars($data["umur"]);
  $gender = htmlspecialchars($data["gender"]);
  $pendidikan = htmlspecialchars($data["pendidikan"]);
  
  $dat = "UPDATE datapenduduk SET 
  Nama = '$nama', Umur = '$umur', Gender = '$gender', Pendidikan = '$pendidikan' WHERE No = '$id'
  ";
            mysqli_query($koneksi, $dat);
            
            return mysqli_affected_rows($koneksi);
  
  
}




?>