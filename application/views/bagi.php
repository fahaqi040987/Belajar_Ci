<h1>Form Bagi</h1>

<form action="<?php echo base_url('index.php/latihan/bagi'); ?>" method="post">
	<label for="">Angka1</label>
	<input type="text" name="angka1">
	/
	<label for="">Angka2</label>
	<input type="text" name="angka2">
	<p>&nbsp;</p>
	<input type="submit" name="submit" value="proses">
</form>

Hasilnya : <?php echo isset($bagi)?$bagi:''; ?>
<br>
<a href="<?php echo base_url('index.php/latihan'); ?>">Kembali ke menu utama</a>