<?php

	session_start();
	error_reporting(0);

	include 'koneksi.php';
	$no_periksa		=	$_GET['no_periksa'];
	$tgl_periksa	=	$_GET['tgl_periksa'];
	$nirm			=	$_GET['nirm'];
	
	$result = mysql_query("select * from pasien where nirm=$nirm");
	$data = mysql_fetch_array($result);
?>
	<center>
	<br><br><br><br>
	<form method="post" action="save_dtlperiksa.php">
	<table>
	<tr>
		<td>No Periksa</td>
		<td>:</td>
		<td><input type="hidden" value="<?php echo $no_periksa;?>" name="no_periksa"><?php echo $no_periksa;?></td>
	</tr>
	<tr>
		<td>Tanggal Periksa</td>
		<td>:</td>
		<td><input type="hidden" value="<?php echo $tgl_periksa;?>" name="tgl_periksa"><?php echo $tgl_periksa;?></td>
	</tr>
	<tr>
		<td>NIRM</td>
		<td>:</td>
		<td><input type="hidden" value="<?php echo $nirm;?>" name="nirm"><?php echo $nirm;?></td>
	</tr>
	<tr>
		<td>Nama Pasien</td>
		<td>:</td>
		<td><input type="hidden" value="<?php echo $data['nama_pasien'];?>" name="nama_pasien"><?php echo $data['nama_pasien'];?></td>
	</tr>
	<tr>
		<td>Jenis Kelamin</td>
		<td>:</td>
		<td><input type="hidden" value="<?php echo $data['jns_kelamin']; ?>" name="jenis_kelamin"><?php echo $data['jns_kelamin']; ?></td>
	</tr>
	<tr>
		<td>No Induk Dokter</td>
		<td>:</td>
		<td><select name='noid'>";
	
<?php
	$result = mysql_query("select * from dokter");
	while($data = mysql_fetch_array($result))
	{
		echo "<option value='$data[noid]'>$data[noid] : $data[nama_dokter]</option>";
	}
?>
	</select>
	</td>
	</tr>
	<tr>
		<td>Jumlah Periksa</td>
		<td>:</td>
		<td><input type='text' name='jml_periksa'></td>
	</tr>
	<tr>
		<td colspan='3'><button input type='submit' name='Simpan' value='INPUT DOKTER LAGI' class=btn>INPUT DOKTER LAGI
		<button input type='reset' value='Batal' class=btn>BATAL
		</td>
	</tr>
	</table>
	</form>
	</center>