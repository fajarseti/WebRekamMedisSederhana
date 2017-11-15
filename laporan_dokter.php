<?php
	echo "<center>";
	echo "<br>
<br>
<br>
<br><h3 align=center>LAPORAN DOKTER</h3> <br>";
	include 'koneksi.php';
	$tampil=mysql_query("select * from dokter order by id_dokter asc");
	echo"
	<table border=0 align=center cellpadding=0 bgcolor='020202' width='1000'>
	<tr bgcolor=09fff1>
		<th width=25%>NO ID</th>
		<th width=25%>Nama Dokter</th>
		<th width=25%>Spesialis Dokter</th>
		<th width=25%>Tarif Dokter</th>
	</tr>";
	$x=1;
	while ($data=mysql_fetch_array($tampil))
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
		echo "<center>$data[noid]</center></td>";
		echo "<td><center>$data[nama_dokter]</center></td>";
		echo"<td><center>$data[spesialis_dokter]</center></td>";
		echo"<td><center>$data[tarif_dokter]</center></td>";
		echo "</tr>";
	$x++;
	}
echo "</table>";
echo "<br>";
echo "<center><a href=index.php?page=input_dokter><b>[Silahkan Input Dokter]</b></a></center>";
echo "</center>";
?>