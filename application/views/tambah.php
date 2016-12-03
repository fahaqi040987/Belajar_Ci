<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php echo $title; ?></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<h1>Tambah Form</h1>
	<form action="<?php echo base_url('index.php/latihan/tambah'); ?>" method="post">
		<label for="">Angka 1</label>
		<br>
		<input type="text" name="angka1">
		<br>
		<label for="">Angka 2</label>
		<input type="text" name="angka2">
		<br>
		<input type="submit" name='submit' value="Proses">
	</form>
	<p>Hasilnya : <?php echo isset($jumlah)?$jumlah:''; ?></p> 

	<a href="<?php echo base_url('index.php/latihan'); ?>"> Kembali ke menu utama</a>
</body>
</html>