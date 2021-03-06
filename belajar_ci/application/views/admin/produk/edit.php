<form action="<?php echo base_url('admin/produk/edit/'.$editProduk->id_produk);?>" method="post" enctype="multipart/form-data">
	<table class="table table-bordered table-hover">
		<tbody>
			<tr>
				<td>Kategori</td>
				<td>
					<select name="id_kategori" class="form-control">
						<option value="">Pilih Kategori</option>
						<?php foreach ($data_kategori as $key => $value): ?>
							<option value="<?php echo $value->id_kategori; ?>" 
								<?php if($editProduk->id_kategori == $value->id_kategori){  echo "selected"; } ?>><?php echo $value->nama_kategori; ?></option>
						<?php endforeach ?>
					</select>
				</td>
			</tr>
			<tr>
				<td>Nama Produk</td>
				<td><input type="text" name="nama_produk" class="form-control" value="<?php echo $editProduk->nama_produk; ?>"></td>
			</tr>
			<tr>
				<td>Kode Produk</td>
				<td><input type="number" name="kode" class="form-control" value="<?php echo $editProduk->kode; ?>"></td>
			</tr>
			<tr>
				<td>Harga</td>
				<td><input type="number" name="harga" class="form-control" value="<?php echo $editProduk->harga; ?>"></td>
			</tr>
			<tr>
				<td>Dimensi</td>
				<td><input type="text" name="dimensi" class="form-control" value="<?php echo $editProduk->dimensi; ?>"></td>
			</tr>
			<tr>
				<td>Warna</td>
				<td><input type="text" name="warna" class="form-control" value="<?php echo $editProduk->warna; ?>"></td>
			</tr>
			<tr>
				<td>Material</td>
				<td><input type="text" name="material" class="form-control" value="<?php echo $editProduk->material; ?>"></td>
			</tr>
			<tr>
				<td>Keterangan</td>
				<td><textarea name="keterangan" id="" cols="30" rows="10" class="form-control"><?php echo $editProduk->keterangan; ?></textarea></td>
			</tr>
			<tr>
				<td>Gambar</td>
				<td>
					<input type="file" name="gambar">
				</td>
			</tr>
			<tr>
				<td>Gambarnya</td>
				<td><img src="<?php echo base_url('assets/upload/'.$editProduk->gambar); ?>" width="100"></td>
			</tr>
			<tr>
				<td colspan="2">
					<input type="submit" name="submit" class="btn btn-primary" value="Simpan">
				</td>
			</tr>
		</tbody>
	</table>
</form>