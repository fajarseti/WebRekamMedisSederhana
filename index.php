<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Ujian | Genap 2015/2016 | Dosen : MY Teguh S, M.Kom</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	
	<div class="fly">
		<div class="content">
			<ul>
				<li><a class="active" href="index.php?page=masuk">Home</a></li>
				<li><a href="index.php?page=lihat_pasien">Pasien</a></li>
				<li><a href="index.php?page=lihat_dokter">Dokter</a></li>
				<li><a href="index.php?page=lihat_obat">Obat</a></li>
				<li><a href="index.php?page=lihat_periksa">Periksa</a></li>
				<li><a href="#">Penunjang</a></li>
				<li><a href="#">Biaya</a></li>
				<li><a href="#">Rekam Medis</a></li>
			</ul>
		</div>
	</div> <!-- /.fly -->
	<div class="flying-books"><img src="books.png" alt=""></div>
		<div class="main">
			<div class="content">
			<h1>TUGAS UAS | GENAP 2015/2016</h1>
			<p>Dosen : MY Teguh Sulistyono, M.Kom | <strong>NIM : A12.2014.05084 | NAMA : MUHAMMAD FAJAR SETIADI</a></strong></p> 
			<?php
				$page = (isset($_GET['page']))? $_GET['page'] : "main";
				switch ($page) 
				{
				case 'masuk': include "home.php"; break;
				case 'lihat_pasien': include "laporan_pasien.php"; break;
				case 'input_pasien': include "input_pasien.php"; break;	
				case 'lihat_dokter': include "laporan_dokter.php"; break;
				case 'input_dokter': include "input_dokter.php"; break;
				case 'lihat_obat': include "laporan_obat.php"; break;
				case 'input_obat': include "input_obat.php"; break;	
				case 'lihat_periksa': include "form_periksa.php"; break;
				case 'input_periksa': include "input_periksa.php"; break;
				case 'input_dtlperiksa': include "input_dtlperiksa.php"; break;		
				case 'main' :
				default : include 'home.php';
				}
			?>
			</div>
		</div>
	<div class="footer">
		<div class="content">
			<p>
				<center>Copyright &copy; 2016 | Ujian UAS Genap 2015/2016 | MY Teguh Sulistyono, M.Kom</center>
			</p>
		</div>
	</div> <!-- /.footer -->
		
</body>
</html>