<h1>Kurang form</h1>
<form action="<?php echo base_url('index.php/latihan/prosesKurang'); ?>" method="post">
	<label for="">Angka 1</label>
	<p>&nbsp;</p>
	<input type="text" name="angka1">
	<p>&nbsp;</p>
	<label for="">Angka 2</label>
	<p>&nbsp;</p>
	<input type="text" name="angka2">
	<p>&nbsp;</p>
	<input type='submit' name='submit' value='Proses'>
</form>
<a href="<?php echo base_url('index.php/latihan'); ?>">Kembali ke menu utama</a>