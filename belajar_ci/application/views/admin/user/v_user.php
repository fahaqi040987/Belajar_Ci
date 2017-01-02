<a href="<?php echo base_url('admin/user/tambah'); ?>" class="btn btn-primary">Tambah</a>
<table class="table table-bordered table-hover table-stripped">
	<thead>
		<tr>
			<th>No</th>
			<th>Username</th>
			<th>Password</th>
			<th>Level</th>
			<th>Action</th>
		</tr>
	</thead>
	<?php foreach ($listing as $key => $value): ?>
	<tbody>
		<tr>
			<td></td>
			<td><?php echo $value->username; ?></td>
			<td><?= $value->password; ?></td>
			<td><?= $value->id_level; ?></td>
			<td><a href="<?php echo base_url('admin/user/edit/'.$value->id);?>">Edit</a> |
			<a href="<?php echo base_url('admin/user/delete/'.$value->id); ?>" onclick="return confirm('Yakin mau delete?')">Delete</a></td>
		</tr>
	</tbody>
	<?php endforeach ?>
</table>