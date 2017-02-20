<div class="form-group">
<a href="<?php echo HTML::url('students/create',array('id'=>$student['id']));?>" class="btn btn-success">Update</a>	
	<a href="<?php echo HTML::url('students/index',array('id'=>$student['id']));?>" class="btn btn-danger">Delete</a>
</div>
<table class="table table-bordered table-striped">
	<tbody>
		<tr>
			<td><strong>Id</strong></td>
			<td><?= $student['id']; ?></td>
		</tr>
		<tr>
			<td><strong>Name</strong></td>
			<td><?= $student['name']; ?></td>
		</tr>
		<tr>
			<td><strong>Address</strong></td>
			<td><?= $student['address'] ?></td>
		</tr>
		<tr>
			<td><strong>Email</strong></td>
			<td><?= $student['email'] ?></td>
		</tr>
		<tr>
			<td><strong>Mobile</strong></td>
			<td><?= $student['mobile'] ?></td>
		</tr>
	</tbody>
</table>