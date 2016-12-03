<a href="<?php echo base_url('admin/kategori/tambah'); ?>" class="btn btn-primary">Tambah</a>
<table class="table table-bordered table-hover table-stripped">
	<thead>
		<tr>
			<th>No</th>
			<th>Nama Kategori</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<?php $no=1; foreach ($listing as $key => $value): ?>
	<tbody>
		<tr>
			<td><?php echo $no; ?></td>
			<td><?php echo $value->nama_kategori; ?></td>
			<td><a href="<?= base_url('admin/kategori/edit/'.$value->id_kategori); ?>">Edit</a> | 
				<a href="<?= base_url('admin/kategori/delete/'.$value->id_kategori); ?>" onClick="return confirm('Yakin mau di hapus?')">Delete</a></td>
		</tr>
	</tbody>
	<?php $no++; endforeach ?>
</table>