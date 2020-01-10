<?php
include("koneksi.php");
header("Content-Type: application/force-download");
header("Cache-Control: no-cache, must-revalidate");
header("Expires: Sat, 26 Jul 2010 05:00:00 GMT");
header("content-disposition: attachment;filename=report_kwitansi.doc");

$id=$_GET['id'];
$ambildata=mysqli_query($koneksi,"select * from kwitansi where no='$id'");
$data=mysqli_fetch_array($ambildata);

$no = $data['no'];
$uang = $data["uang"];
$nama = $data["nama"];
$alamat = $data["alamat"];
$uraian = $data["uraian"];
$tanggal = $data["tanggal"];

 function Terbilang($x)   
 {   
  $bilangan = array("", "Satu", "Dua", "Tiga", "Empat", "Lima", "Enam", "Tujuh", "Delapan", "Sembilan", "Sepuluh", "Sebelas");   
  if ($x < 12)   
   return " " . $bilangan[$x];   
  elseif ($x < 20)   
   return Terbilang($x - 10) . "belas";   
  elseif ($x < 100)   
   return Terbilang($x / 10) . " Puluh" . Terbilang($x % 10);   
  elseif ($x < 200)   
   return " seratus" . Terbilang($x - 100);   
  elseif ($x < 1000)   
   return Terbilang($x / 100) . " Ratus" . Terbilang($x % 100);   
  elseif ($x < 2000)   
   return " seribu" . Terbilang($x - 1000);   
  elseif ($x < 1000000)   
   return Terbilang($x / 1000) . " Ribu" . Terbilang($x % 1000);   
  elseif ($x < 1000000000)   
   return Terbilang($x / 1000000) . " Juta" . Terbilang($x % 1000000);    
 }  

if ($uang)   
 {   
     $nominal = "Rp ".number_format($uang, 0, ',','.');   
     $terbilang = ucwords(Terbilang($uang)." Rupiah");   
 } 


 ?>

<table width="950">
				<tr><td align="left" colspan="3">Pihak BPPKAD (Bendahara Penerimaan)</td></tr>
				<tr><td><br></td></tr>
				<tr><td align="left" width="400">Telah menerima uang sebesar</td><td width="50">:</td>
					<td width="500"><p><?php echo $nominal?></p></td>
				</tr>
				<tr><td align="left" width="300">Terbilang</td><td width="50">:</td>
					<td width="600"><p><?php echo $terbilang?></p></td>
				</tr>
				<tr><td align="left" width="300">Dari Nama</td><td width="50">:</td>
					<td width="600"><p><?php echo $nama?></p>
				</tr>
				<tr><td align="left" width="300">Alamat</td><td width="50">:</td>
					<td width="750"><p><?php echo $alamat?></p></td>
				</tr>
				<tr><td align="left" width="300">Sebagai Pembayaran</td><td width="50">:</td>
					<td width="750"><p><?php echo $uraian?></p></td>
				</tr>
				<tr><td align="left" width="300">Tanggal</td><td width="50">:</td>
					<td width="750"><p><?php echo $tanggal?></p></td>
				</tr>
			</table>
			</h5>
			<br><br>
			<h5>
			<table width="950">
				<tr>
					<td align="center" width="300">Ayat Penerimaan</td>
					<td align="center" width="350">Uang Tersebut Diatas Diterima</td>
					<td align="center" width="300">Sampang, <?php echo $tanggal?></td>
				</tr>
				<tr>
					<td align="center" width="300">411.16.01</td>
					<td align="center" width="500">Sampang, <?php echo $tanggal?></td>
					<td align="center" width="300">Penyetor</td>
				</tr>
				<tr>
					<td align="center" width="300"></td>
					<td align="center" width="500">Bendahara Penerimaan</td>
					<td align="center" width="300"></td>
				</tr>
				<tr>
					<td align="center" width="300"><br><br><br><br></td>
					<td align="center" width="500"></td>
					<td align="center" width="300"></td>
				</tr>
				<tr>
					<td align="center" width="300"></td>
					<td align="center" width="500">(_______________________)</td>
					<td align="center" width="300">( <?php echo $nama?> )</td>
				</tr>
			</table>
			</h5>
      

</tbody></h3></table>