<?php
include("koneksi.php");

$query = "select max(no) as maxkode from kwitansi";
$hasil = mysqli_query($koneksi,$query);
$data = mysqli_fetch_array($hasil);
$noo = $data['maxkode'];

$noo++;
$no1 = sprintf("%04s", $noo);

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





<section class="mail pt-lg-5 pt-4">
	<div class="container pt-lg-5">
			<table width="1150">
				<tr>
					<td rowspan="3"><img src="images/logo2.jpg"/></td>
					<td align="center"><b><h2>PEMERINTAH KABUPATEN SAMPANG</b></h2></td>
				</tr>
				<tr>
					<td align="center"><b><h2>BADAN PENDAPATAN PENGELOLAAN KEUANGAN DAN ASET DAERAH</b></h2></td>
				</tr>
				<tr>
					<td align="center"><h4>Jl. Rajawali No. 04 Telp. (0323)321024</h4></td>
				</tr>
			</table>
			<hr style="border: 5px; border-top: 10px double;">
			<br>
			<table width="1150">
				<tr><td align="center"><b><h3>INPUT DATA KWITANSI</b></h3></td></tr>
				<tr><td align="center"><br></td></tr>
			</table>
			<br>
			<h5>

			<form action="" method="post">
			<table width="1100">
				<tr><td align="left" width="300">No Kwitansi</td><td width="50">:</td>
					<td width="750"><input type="text" name="no" id="no" class="form-control" value="<?php echo $no1?>"></td>
				</tr>
				<tr><td align="left" width="300">Telah menerima uang sebesar</td><td width="50">:</td>
					<td width="750"><input type="text" name="uang" id="uang" class="form-control"></td>
				</tr>
				<tr><td align="left" width="300">Dari Nama</td><td width="50">:</td>
					<td width="750"><input type="text" name="nama" id="nama" class="form-control"></td>
				</tr>
				<tr><td align="left" width="300">Alamat</td><td width="50">:</td>
					<td width="750"><input type="text" name="alamat" id="alamat" class="form-control"></td>
				</tr>
				<tr><td align="left" width="300">Sebagai Pembayaran</td><td width="50">:</td>
					<td width="750"><input type="text" name="uraian" id="uraian" class="form-control"></td>
				</tr>
				<tr><td align="left" width="300">Tanggal</td><td width="50">:</td>
					<td width="750"><input type="date" name="tanggal" id="tanggal" class="form-control"></td>
				</tr>
			</table>
			</h5>
			<br>
			<br>
		<div class="row agileinfo_mail_grids">
			<div class="col-lg-8 agileinfo_mail_grid_right">
				<form action="#" method="post">
					<table width="1100">
						<tr><td align="left" width="300"></td><td width="50"></td><td width="750">
						<div class="col-md-12">
							<div class="submit-buttons">
								<button type="submit" name="submit" id="submit" class="btn">SIMPAN</button>
								<button type="reset" name="reset" class="btn">RESET</button>
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


<?php
include("koneksi.php");

if(isset($_POST['submit'])){
$no = $_POST["no"];
$uang = $_POST["uang"];
$nama = $_POST["nama"];
$alamat = $_POST["alamat"];
$uraian = $_POST["uraian"];
$tanggal = $_POST["tanggal"];

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

if($no!=""){
  $input=mysqli_query($koneksi,"insert into kwitansi(no,uang,terbilang,nama,alamat,uraian,tanggal) values('$no','$uang','$terbilang','$nama','$uraian','$alamat','$tanggal')");
			if(!$input){
			echo"<script language='javascript'>alert('data gagal tersimpan');
			document.location='tambah.php' </script>";
			}
				else{
					echo"<script language='javascript'>alert('data telah tersimpan');
					 document.location='arsip.php'</script>";
					}
        }
	else{
		echo"<script language='javascript'>alert('NO belum terisi');
		document.location='tambah.php' </script>";
			}
}
?>
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