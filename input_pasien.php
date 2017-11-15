<?php
echo"
<div style='margin:10px;'>
<br>
<br>
<br>
<br>
<center>
<table border=0 col=2 row=7>
<h3>Form Daftar Pasien</h3>
<br>
<form action='save_pasien.php' method='post'>
	<tr>
		<td>NIRM</td>
		<td><input type='text' name='nirm'></td>
	</tr>
	<tr>
		<td>Nama Pasien</td>
		<td><input type='text' name='nama_pasien'></td>
	</tr>
	<tr>
		<td>Alamat Pasien</td>
		<td><input type='text' name='alamat_pasien'></td>
	</tr>
	<tr>
		<td>Tanggal Lahir</td>
		<td><input type='date' name='tgl_lahir'></td>
	</tr>
	<tr>
		<td>Jenis Kelamin</td>
		<td><select name='jns_kelamin'>
        	<option>Pria</option>
            <option>Wanita</option></select></td>
	</tr>
    <tr>
    <td>&nbsp </td>
	<td>&nbsp </td>
    </tr>
	<tr>
		<td><button input type='submit' value='Simpan' class=btn>Simpan</button></td>
        <td><button input type='reset' value='Batal' class=btn>Batal</button></td>
	</tr>
	</form>
</table></center>
</div>";
?>




