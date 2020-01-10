<?php
include("koneksi.php");
header("Content-Type: application/force-download");
header("Cache-Control: no-cache, must-revalidate");
header("Expires: Sat, 26 Jul 2010 05:00:00 GMT");
header("content-disposition: attachment;filename=report_kwitansi.doc");
?>

<table width="950">
				<tr><td align="left" colspan="3">Pihak BPPKAD (Bendahara Penerimaan)</td></tr>
				<tr><td><br></td></tr>
				<tr><td align="left" width="400">Telah menerima uang sebesar</td><td width="50">:</td>
					<td width="500"><input type="text" maxlength="100" name="uang" id="uang" class="form-control" value="<?php echo $nominal?>"></td>
				</tr>
				<tr><td align="left" width="300">Terbilang</td><td width="50">:</td>
					<td width="600"><input type="text" maxlength="100" name="terbilang" id="terbilang" class="form-control" value="<?php echo $terbilang?>"></td>
				</tr>
				<tr><td align="left" width="300">Dari Nama</td><td width="50">:</td>
					<td width="600"><input type="text" maxlength="100" name="nama" id="nama" class="form-control" value="<?php echo $nama?>"></td>
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