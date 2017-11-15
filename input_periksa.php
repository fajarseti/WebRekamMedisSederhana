<?php
include 'koneksi.php';
echo"
<div style='margin:10px;'>
<br>
<br>
<br>
<br>
<center>
<table border=0 col=2 row=7>
<h3>Form Input Periksa</h3>
<br>
<form action='save_periksa.php' method='post'>
	<tr>
		<td>No Periksa</td>
		<td><input type='text' name='no_periksa'></td>
	</tr>
	<tr>
		<td>Tanggal Periksa</td>
		<td><input type='date' name='tgl_periksa'></td>
	</tr>
	<tr>
		<td>NIRM</td>
		<td><select name='nirm'>";
		?>
        <?php
			include 'koneksi.php';
			$result = mysql_query("SELECT * FROM pasien");
			while($data = mysql_fetch_array($result))
			{
				echo"<option value = '$data[nirm]'>$data[nirm] | $data[nama_pasien]</option>";
			}
        	?>
		<?php
echo"		
            </select></td>
	</tr>
    <tr>
    <td>&nbsp </td>
	<td>&nbsp </td>
    </tr>
	<tr>
		<td><button input type='submit' value='Simpan' name='Simpan' class=btn>PROSES PERIKSA</button></td>
        <td><button input type='reset' value='Batal' class=btn>BATAL PERIKSA</button></td>
	</tr>
	</form>
</table>
    </center>
</div>";
?>