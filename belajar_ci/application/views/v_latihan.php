<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Belajar codeignitier</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<p>Latihan codeingitier pertama</p>

	<p>Nama : <?php echo $nama; ?></p>
	<p>Alamat :<?php echo $alamat; ?> </p>
	
	<h1><?php echo $title; ?></h1>
	<a href="<?php echo base_url('index.php/latihan/tambah'); ?>">Tambah</a>
	<a href="<?php echo base_url('index.php/latihan/kurang'); ?>">Kurang</a>
	<a href="<?php echo base_url('index.php/latihan/bagi'); ?>">Bagi</a>
	<a href="">Kali</a>
	<div class="main">
		<?php echo $view; ?>
	</div>
</body>
</html>