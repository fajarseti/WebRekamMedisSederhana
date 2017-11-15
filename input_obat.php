<?php
echo"
<div style='margin:10px;'>
<br>
<br>
<br>
<br>
<center>
<table border=0 col=2 row=7>
<h3>Form Input Obat</h3>
<br>
<form action='save_obat.php' method='post'>
	<tr>
		<td>No Obat</td>
		<td><input type='text' name='no_obat'></td>
	</tr>
	<tr>
		<td>Nama Obat</td>
		<td><input type='text' name='nama_obat'></td>
	</tr>
	<tr>
		<td>Jenis Obat</td>
		<td><select name='jns_obat'>
        	<option>Puyer</option>
            <option>Sirup</option>
			<option>Tablet</option>
			<option>Tetes</option>
			<option>Salep</option>
			</select></td>
	</tr>
    <tr>
		<td>Gram Obat</td>
		<td><input type='text' name='gram_obat'></td>
	</tr>
	<tr>
		<td>Tarif Obat</td>
		<td><input type='text' name='tarif_obat'></td>
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