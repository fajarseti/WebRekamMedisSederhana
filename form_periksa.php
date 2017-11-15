<?php
	echo "<center>";
	echo "<br>
<br>
<br>
<br><h3 align=center>FORMULIR PERIKSA</h3><br>";
	include 'koneksi.php';
	$tampil=mysql_query("select a.no_periksa, a.tgl_periksa, a.nirm, b.nama_pasien, c.noid, d.nama_dokter, 
	c.jml_periksa, c.jml_periksa*d.tarif_dokter as Biaya_Periksa 
	from periksa a, pasien b, dtl_periksa c, dokter d 
	where a.nirm=b.nirm AND a.no_periksa=c.no_periksa AND c.noid=d.noid order by no_periksa asc");
	echo"
	<table border=0 align=center cellpadding=0 bgcolor='020202' width='1000'>
	<tr bgcolor=09fff1>
		<th width=10%>No Periksa</th>
		<th width=10%>Tgl Periksa</th>
		<th width=10%>NIRM</th>
		<th width=17,5%>Nama Pasien</th>
		<th width=10%>NOID</th>
		<th width=17,5%>Nama Dokter</th>
		<th width=12,5%>Jumlah Periksa</th>
		<th width=12,5%>Biaya Periksa</th>
	</tr>";
	$x=1;
	while ($data = mysql_fetch_array($tampil))
	{
	if ($x%2==0)
	{
		$bg='#66CCCC';
	}
	else
	{
		$bg='#FFFFFF';
	}
	echo "<tr bgcolor=$bg>";
	echo "<td>";
		echo "<center>$data[no_periksa]</center></td>";
		echo "<td><center>$data[tgl_periksa]</center></td>";
		echo"<td><center>$data[nirm]</center></td>";
		echo"<td><center>$data[nama_pasien]</center></td>";
		echo"<td><center>$data[noid]</center></td>";
		echo"<td><center>$data[nama_dokter]</center></td>";
		echo"<td><center>$data[jml_periksa]</center></td>";
		echo"<td><center>$data[Biaya_Periksa]</center></td>";
		echo "</tr>";
	$x++;
	}
echo "</table>";
echo "<br>";
echo "<center><a href=index.php?page=input_periksa><b>[Silahkan Input Periksa]</b></a></center>";
echo "</center>";
?>
