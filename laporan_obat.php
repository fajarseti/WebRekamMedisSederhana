<?php
	echo "<center>";
		echo "<br>
<br>
<br>
<br><h3 align=center>LAPORAN OBAT</h3> <br>";
	include 'koneksi.php';
	$tampil=mysql_query("select * from obat order by id_obat asc");
	echo"
	<table border=0 align=center cellpadding=0 bgcolor='020202' width='1000'>
	<tr bgcolor=09fff1>
		<th width=20%>No Obat</th>
		<th width=20%>Nama Obat</th>
		<th width=20%>Jenis Obat</th>
		<th width=20%>Gram Obat</th>
		<th width=20%>Tarif Obat</th>
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
		echo "<center>$data[no_obat]</center></td>";
		echo "<td><center>$data[nama_obat]</center></td>";
		echo"<td><center>$data[jns_obat]</center></td>";
		echo "<td><center>$data[gram_obat]</center></td>";
		echo"<td><center>$data[tarif_obat]</center></td>";
		echo "</tr>";
	$x++;
	}
echo "</table>";
echo "<br>";
echo "<center><a href=index.php?page=input_obat><b>[Silahkan Input Obat]</b></a></center>";
echo "</center>";
?>