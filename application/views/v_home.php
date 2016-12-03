<div class="container">
	<div class="row">
		<div class="col-xs-12">
			<h3>Laptop / Mackbook</h3>
		</div><!--end col 12-->
		<?php foreach ($laptop as $key => $value): ?>
		<div class="col-xs-12 col-sm-3 col-md-3">
			<img src="<?php echo base_url(); ?>assets/upload/<?php echo $value->gambar; ?>" alt="images product" class="img-thumbnail">
			<div class="text-center">
				<h5><?= isset($value->nama_produk)?$value->nama_produk:''; ?></h5>
				<p class="red">Rp. <?= isset($value->harga)?number_format($value->harga):''; ?></p>
			</div>
		</div>
		<?php endforeach ?>

		<!-- Kategori Car -->
		<div class="col-xs-12">
			<h3>Car / Truck</h3>
		</div>
		<!-- loopin data by car / truck -->
		<?php foreach ($car as $key => $value): ?>
			<div class="col-xs-12 col-sm-3 col-md-3">
				<img src="<?php echo base_url(); ?>assets/upload/<?php echo $value->gambar; ?>" alt="images product" class="img-thumbnail">
				<div class="text-center">
					<h5><?= isset($value->nama_produk)? $value->nama_produk:''; ?></h5>
					<p class="red">Rp. <?php echo number_format($value->harga); ?></p>
				</div>
			</div>
		<?php endforeach ?>
	</div><!--row-->
</div><!--container-->