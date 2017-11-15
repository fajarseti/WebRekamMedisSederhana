<div style='margin:10px;'>
<center>
<table border=0 col=2 row=8>
<form action='save_periksa.php' method='post'>
	<tr>
		<td>No Periksa</td>
		<td><?php
			include 'koneksi.php';
			$result = mysql_query("SELECT * FROM periksa");
			while($data = mysql_fetch_array($result))
			{
				echo"<option value = '$data[id_periksa]'>$data[no_periksa]</option>";
			}
        	?></td>
	</tr>
    <tr>
		<td>Tanggal Periksa</td>
		<td><?php
			include 'koneksi.php';
			$result = mysql_query("SELECT * FROM periksa");
			while($data = mysql_fetch_array($result))
			{
				echo"<option value = '$data[id_periksa]'>$data[tgl_periksa]</option>";
			}
        	?></td>
	</tr>
    <tr>
		<td>NIRM</td>
		<td><?php
			include 'koneksi.php';
			$result = mysql_query("SELECT * FROM pasien");
			while($data = mysql_fetch_array($result))
			{
				echo"<option value = '$data[id_pasien]'>$data[nirm]</option>";
			}
        	?></td>
	</tr>
    <tr>
		<td>Nama Pasien</td>
		<td><?php
			include 'koneksi.php';
			$result = mysql_query("SELECT * FROM pasien");
			while($data = mysql_fetch_array($result))
			{
				echo"<option value = '$data[id_pasien]'>$data[nama_pasien]</option>";
			}
        	?></td>
	</tr>
    <tr>
		<td>Jenis Kelamin</td>
		<td><?php
			include 'koneksi.php';
			$result = mysql_query("SELECT * FROM pasien");
			while($data = mysql_fetch_array($result))
			{
				echo"<option value = '$data[id_pasien]'>$data[jns_kelamin]</option>";
			}
        	?></td>
	</tr>
	<tr>
		<td>NOID</td>
		<td><select name="noid">
        <?php
			include 'koneksi.php';
			$result = mysql_query("SELECT * FROM dokter");
			while($data = mysql_fetch_array($result))
			{
				echo"<option value = '$data[id_dokter]'>$data[noid] | $data[nama_dokter]</option>";
			}
        	?>
            </select></td>
	</tr>
    <tr>
		<td>Jumlah Periksa</td>
		<td><input type='text' name='jml_periksa'></td>
	</tr>
	<tr>
		<td><button input type='submit' value='Simpan' class=btn>Input Dokter</button></td>
        <td><button input type='reset' value='Batal' class=btn>Batal</button></td>
	</tr>
	</form>
</table></center>
</div>




