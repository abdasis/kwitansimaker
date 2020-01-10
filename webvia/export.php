<?php
header("content-type: aplication/vnd-ms-excel");
header("content-Disposition:attachment; filename=kwitansi-export.xls");
include 'kwitansi.php';
?>