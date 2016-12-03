<form action="<?php echo base_url('admin/kategori/tambah');?>" method="post">
	<table class="table table-bordered table-hover">
		<tbody>
			<tr>
				<td>Nama Kategori</td>
				<td>:</td>
				<td><input type="text" name="nama_kategori" class="form-control"></td>
			</tr>	
			<tr>
				<td colspan="3">
					<input type="submit" name="submit" class="btn btn-primary" value="Tambah">
				</td>
			</tr>
		</tbody>
	</table>
</form>