<?php
include("koneksi.php");


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


<!DOCTYPE html>
<html lang="en">
<head>
<title>Aplikasi Cetak Kwitansi BPPKAD Kab Sampang</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Crispy Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
	
	<!-- css files -->
	<link href="css/css_slider.css" type="text/css" rel="stylesheet" media="all"><!-- slider css -->
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' /><!-- bootstrap css -->
    <link href="css/style.css" rel='stylesheet' type='text/css' /><!-- custom css -->
    <link href="css/font-awesome.min.css" rel="stylesheet"><!-- fontawesome css -->
	<!-- //css files -->
	
	<!-- google fonts -->
	<link href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
	<!-- //google fonts -->
	
</head>
<body>


<!-- //header -->
<header class="py-sm-3 pt-3 pb-2">
	<div class="container">
			<div id="logo">
				<h1> <a href="tambah.php"><span class="" aria-hidden="true"></span>Tambah Kwitansi</a></h1>
			</div>
		<!-- nav -->
		<nav class="d-lg-flex">
			<label for="drop" class="toggle"><span class="fa fa-bars"></span></label>
			<input type="checkbox" id="drop" />
			<ul class="menu mt-2 ml-auto">
				<li class="active"><a href="index.html">HOME</a></li>
				<li class=""><a href="tambah.php">TAMBAH</a></li>
				<li class=""><a href="arsip.php">ARSIP</a></li>
			</ul>
		</nav>
		<div class="clear"></div>
		<!-- //nav -->
	</div>
</header>
<!-- //header -->

<!-- banner -->


<!-- contact -->




<form action="" method="post">
<section class="mail pt-lg-5 pt-4">
	<div class="container pt-lg-5">
			<table width="1150">
				<tr>
					<td rowspan="3"><img src="images/logo2.jpg"/></td>
					<td align="center"><b><h2>PEMERINTAH KABUPATEN SAMPANG</b></h2></td>
				</tr>
				<tr>
					<td align="center"><b><h2>BADAN PENDAPATAN PENGELOLAAN KEUANGAN DAN ASET</b></h2></td>
				</tr>
				<tr>
					<td align="center"><h4>Jl. Rajawali No. 04 Telp. (0323)321024</h4></td>
				</tr>
			</table>
			<hr style="border: 5px; border-top: 10px double;">
			<table width="1150" align="right">
				<tr><td></td><td> </td><td width="70"><input type="text"  name="no" id="no" class="form-control" value="<?php echo $no?>"></td></tr>
			</table>
			<br>
			<table width="1150">
				<tr><td align="center"><b><h3>TANDA BUKTI PEMBAYARAN</b></h3></td></tr>
				<tr><td align="center"><h5>NOP : </h5></td></tr>
			</table>
			<br>
			<h5>
			<table width="1100">
				<tr><td align="left" colspan="3">Pihak BPPKAD (Bendahara Penerimaan)</td></tr>
				<tr><td><br></td></tr>
				<tr><td align="left" width="300">Telah menerima uang sebesar</td><td width="50">:</td>
					<td width="750"><input type="text" maxlength="100" name="uang" id="uang" class="form-control" value="<?php echo $nominal?>"></td>
				</tr>
				<tr><td align="left" width="300">Terbilang</td><td width="50">:</td>
					<td width="750"><input type="text" maxlength="100" name="terbilang" id="terbilang" class="form-control" value="<?php echo $terbilang?>"></td>
				</tr>
				<tr><td align="left" width="300">Dari Nama</td><td width="50">:</td>
					<td width="750"><input type="text" maxlength="100" name="nama" id="nama" class="form-control" value="<?php echo $nama?>"></td>
				</tr>
				<tr><td align="left" width="300">Alamat</td><td width="50">:</td>
					<td width="750"><input type="text" maxlength="100" name="alamat" id="alamat" class="form-control" value="<?php echo $alamat?>"></td>
				</tr>
				<tr><td align="left" width="300">Sebagai Pembayaran</td><td width="50">:</td>
					<td width="750"><input type="text" maxlength="200" name="uraian" id="uraian" class="form-control" value="<?php echo $uraian?>"></td>
				</tr>
				<tr><td align="left" width="300">Tanggal</td><td width="50">:</td>
					<td width="750"><input type="date" name="tanggal" id="tanggal" class="form-control" value="<?php echo $tanggal?>"></td>
				</tr>
			</table>
			</h5>
			<br><br>
			<h5>
			<table width="1100">
				<tr>
					<td align="center" width="300">Ayat Penerimaan</td>
					<td align="center" width="500">Uang Tersebut Diatas Diterima</td>
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
			<br>
			<br>
		<div class="row agileinfo_mail_grids">
			<div class="col-lg-8 agileinfo_mail_grid_right">
					<table width="1100">
						<tr><td align="CENTER">
						<div class="col-md-12">
							<div class="submit-buttons">
								<button class="btn">
									<a target="_blank" href="word_kwitansi.php?id=<?php echo $data['no']?>">
						Export Word
					</a>
					</button>
							</div>
						</div>
					</td></tr>
					</table>
				</form>
			</div>
		</div>
	</div>
	<div class="map mt-5">

	</div>
</section>
</b>
</td>
</tr>
</table>
</form>


<!-- //contact -->

<!-- copyright -->
<div class="copyright">
	<div class="container py-4">
		<div class=" text-center">
			<p>© 2019 Badan Pendapatan Pengelolaan Keuangan dan Aset - Kabupaten Sampang </p>
		</div>
	</div>
</div>
<!-- //copyright -->
		
<!-- move top -->
<div class="move-top text-right">
	<a href="#home" class="move-top"> 
		<span class="fa fa-angle-up  mb-3" aria-hidden="true"></span>
	</a>
</div>
<!-- move top -->

</body>
</html>

<script>
      function exportHTML(){
         var header = "<html xmlns:o='urn:schemas-microsoft-com:office:office' "+
              "xmlns:w='urn:schemas-microsoft-com:office:word' "+
              "xmlns='http://www.w3.org/TR/REC-html40'>"+
              "<head><meta charset='utf-8'><title>Export HTML to Word Document with JavaScript</title></head><body>";
         var footer = "</body></html>";
         var sourceHTML = header+document.getElementById("source-html").innerHTML+footer;
         
         var source = 'data:application/vnd.ms-word;charset=utf-8,' + encodeURIComponent(sourceHTML);
         var fileDownload = document.createElement("a");
         document.body.appendChild(fileDownload);
         fileDownload.href = source;
         fileDownload.download = 'document.doc';
         fileDownload.click();
         document.body.removeChild(fileDownload);
    }
</script>