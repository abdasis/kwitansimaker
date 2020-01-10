<?php
include 'koneksi.php';
if (isset($_GET['id'])) {
 $id=$_GET['id'];

 $hapus= mysqli_query($koneksi, "DELETE FROM `kwitansi` WHERE 'id'='$id'");
 
  if($hapus){
    echo '<script>alert("Berhasil di hapus!");
  location.replace("arsip.php");
    </script>';
  }else {
    // code...
    echo '<script>alert("Gagal di hapus!");
  location.replace("arsip.php");
    </script>';
  }
}
 ?>