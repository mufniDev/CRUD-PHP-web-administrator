<?php

require('function.php');

$id = $_GET["No"];
if( hapus($id) > 0 ) {
  echo "
  <script>alert('data berhasil dihapus')</script>
       ";
} else {
    echo "
  <script>confirm('data gagal dihapus')</script>
       ";
}

?>