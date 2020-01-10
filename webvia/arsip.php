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
				<h1> <a href="arsip.php"><span class="" aria-hidden="true"></span>Arsip Kwitansi</a></h1>
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
				<tr><td align="center"><b><h3>DAFTAR KWITANSI</b></h3></td></tr>
			</table>
			<br>

			<table width="1100" border="1" align="center">
				<tr bgcolor="lightblue">
					<td align="center" width="100" height="50">NO</td>
					<td align="center" width="1">JUMLAH UANG</td>
					<td align="center" width="200">TERBILANG</td>
					<td align="center" width="200">TERIMA DARI</td>
					<td align="center" width="200">ALAMAT</td>
					<td align="center" width="200">URAIAN</td>
					<td align="center" width="150">TANGGAL</td>
					<td align="center" width="150">AKSI</button></td>
				</tr>
<?php
include("koneksi.php");
?>
<?php
//mengambil data dari tabel mahasiswa untuk menampilkan
$tampil=mysqli_query($koneksi,"select * from kwitansi order by no");
$cek=mysqli_num_rows($tampil); //mengetahui jumlah baris dalam table db dalam perintah yag ada didalam $tampil

//apabila data kosong atau baris=0
if($cek==0){
	  echo"<h3>Maaf Data Masih Kosong</h3>";
  }
  //data terisi
	  else{ 
      while($data=mysqli_fetch_array($tampil)){ //mengubah baris data yang dipilih menjadi pecahan array
		  
  ?>

  <tr>
					<td align="center" width="50" height="50"><?php echo $data['no']?></td>
					<td align="center" width="200"><?php echo $data['uang']?></td>
					<td align="center" width="200"><?php echo $data['terbilang']?></td>
					<td align="center" width="200"><?php echo $data['nama']?></td>
					<td align="center" width="300"><?php echo $data['alamat']?></td>
					<td align="center" width="300"><?php echo $data['uraian']?></td>
					<td align="center" width="150"><?php echo $data['tanggal']?></td>
					<td align="center" width="150">
						<div class="col-md-12"><div class="submit-buttons">
						<button class="btn">
							<a style="color : black;"href="kwitansi.php?id=<?php echo $data['no']?>">
						BUAT KWITANSI

					</a>
                    
					</button>
                    <button><a style="color : black;"href="hapus.php?id=<?php echo $row['id']; ?>">
						HAPUS

					</a></button>
					</div></div>
					</td>
				</tr>

  <?php
		  }
	  }
  ?>
</table>
<br>

	</div>
	<div class="map mt-5">

	</div>
</section>
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