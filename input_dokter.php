<?php
echo"
<div style='margin:10px;'>
<br>
<br>
<br>
<br>
<center>
<table border=0 col=2 row=6>
<h3>Form Input Dokter</h3>
<br>
<form action='save_dokter.php' method='post'>
	<tr>
		<td>NOID</td>
		<td><input type='text' name='noid'></td>
	</tr>
	<tr>
		<td>Nama Dokter</td>
		<td><input type='text' name='nama_dokter'></td>
	</tr>
	<tr>
		<td>Spesialis Dokter</td>
		<td><select name='spesialis_dokter'>
        	<option>Tulang</option>
            <option>Penyakit Dalam</option>
			<option>Jantung</option>
            <option>Kelamin</option>
			<option>Paru</option>
			<option>Saraf</option>
            <option>Mata</option>
			<option>Anastesi</option>
			<option>THT</option>
            <option>Ginjal</option>
			</select></td>
	</tr>
	<tr>
		<td>Tarif Dokter</td>
		<td><input type='text' name='tarif_dokter'></td>
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