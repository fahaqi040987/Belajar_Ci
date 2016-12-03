<form action="<?php echo base_url('admin/user/edit/'.$editData->id); ?>" method="post">
	<table class="table table-bordered table-hover">
		<tbody>
			<tr>
				<td>Username</td>
				<td>:</td>
				<td><input type="text" name="username" class="form-control" value="<?php echo $editData->username; ?>"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td>:</td>
				<td><input type="password" name="password" class="form-control" value="<?php echo $editData->password; ?>"></td>
			</tr>
			<tr>
				<td>Level</td>
				<td>:</td>
				<td>
					<select name="id_level" id="" class="form-control">
						<option value="0">Pilih Level</option>
						<option value="1" <?php if($editData->id_level == "1"){echo "selected"; }?>>Administrator</option>
						<option value="2" <?php if($editData->id_level == "2"){echo "selected"; } ?>>Admin</option>
					</select>
				</td>
			</tr>
			<tr>
				<td colspan="3">
					<input type="submit" name="submit" class="btn btn-success" value="Edit">
				</td>
			</tr>
		</tbody>
	</table>
</form>