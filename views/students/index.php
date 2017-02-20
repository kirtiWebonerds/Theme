<div class="form-group">
	<a href="<?php echo HTML::url('students/create');?>" class="btn btn-success">Add Student</a>	
</div>
<table class="table table-bordered table-striped">
<thead>
   <th>Id</th>
   <th>Name</th>
   <th>Address</th>
   <th>Email</th>
   <th>Contact</th>
   <th colspan="3">Actions</th>
</thead>
<tbody>
<?php 
		foreach ($student as $student) {
		?>
			<tr>
				<td><?php echo $student['id'];?></td>
				<td><?php echo $student['name'];?></td>
				<td><?php echo $student['address'];?></td>
				<td><?php echo $student['email'];?></td>
				<td><?php echo $student['mobile'];?></td>
				
				
				<td>
					<a class="btn btn-success btn-block" href="<?php echo HTML::url('students/create',array('id'=>$student['id']));?>" >Update</a>				
				</td>
				<td>
					<a class="btn btn-danger btn-block" href="<?php echo HTML::url('students/delete',array('id'=>$student['id']));?>">Delete</a>
				</td>
				<td>
	                <a class="btn btn-info btn-block" href="<?php echo HTML::url('students/view',array('id'=>$student['id']));?>">View</a>
				</td>
		</tr>

		<?php }?>

	</tbody>


</table>