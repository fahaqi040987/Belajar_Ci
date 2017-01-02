<form action="<?php echo base_url('admin/user/tambah'); ?>" method="post">
	<table class="table table-bordered table-hover">
		<tbody>
			<tr>
				<td>Username</td>
				<td>:</td>
				<td><input type="text" name="username" class="form-control"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td>:</td>
				<td><input type="password" name="password" class="form-control"></td>
			</tr>
			<tr>
				<td>Level</td>
				<td>:</td>
				<td>
					<select name="id_level" id="" class="form-control">
						<option value="0">Pilih Level</option>
						<option value="1">Administrator</option>
						<option value="2">Admin</option>
					</select>
				</td>
			</tr>
			<tr>
				<td colspan="3">
					<input type="submit" name="submit" class="btn btn-success" value="Tambah">
				</td>
			</tr>
		</tbody>
	</table>
</form>