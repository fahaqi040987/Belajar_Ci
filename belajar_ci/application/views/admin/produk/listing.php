<a class="btn btn-primary" href="<?php echo base_url('admin/produk/tambah'); ?>">Tambah</a>
<table class="table table-bordered table-hover table-striped">
	<thead>
		<tr>
			<th>No</th>
			<th>Gambar</th>
			<th>Kategori</th>
			<th>Nama</th>
			<th>Kode</th>
			<th>Harga</th>
			<th>Dimensi</th>
			<th>Warna</th>
			<th>Material</th>
			<th>Tanggal</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<?php $no=1; foreach ($listing as $key => $value): ?>
	<tbody>
		<tr>
			<td><?= $no; ?></td>
			<td><img src="<?php echo base_url('assets/upload/'.$value->gambar); ?>" class="img-thumbnail" width="100"></td>
			<td><?= $value->nama_kategori; ?></td>
			<td><?= $value->nama_produk; ?></td>
			<td><?= $value->kode; ?></td>
			<td><?= $value->harga ?></td>
			<td><?= $value->dimensi; ?></td>
			<td><?= $value->warna; ?></td>
			<td><?= $value->material; ?></td>
			<td><?= $value->tanggal; ?></td>
			<td><a href="<?= base_url('admin/produk/edit/'.$value->id_produk); ?>">Edit</a> | 
				<a href="<?= base_url('admin/produk/delete/'.$value->id_produk); ?>" onclick="return confirm('Yakin mau didelete??');">Delete</a> | Detail</td>
		</tr>
	</tbody>
	<?php $no++; endforeach ?>
</table>