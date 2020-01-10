<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "webkwitansi";

$koneksi = mysqli_connect($host,$username,$password)
or die ("Kesalahan Koneksi");
mysqli_select_db($koneksi,$database) or die ("Tidak ada database ".$database);
?>