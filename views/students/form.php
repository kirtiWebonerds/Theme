<?php

$model = new Students(); 

if(isset($_GET['id']))
{
	$student =  $model->findByPk($_GET['id']); 
}
if(isset($_GET['delete_id']))
{
	$student =  $model->deleteByPk($_GET['delete_id']); 
}
?>
<form action="<?php echo $_SERVER['REQUEST_URI'];?>" method="POST" name="cardFrm">
		<div class="form-group">
			<?php echo HTML::inputText((isset($student['name'])?$student['name']:''),array("placeholder"=>"Name",'class'=>"form-control",'name'=>'student[name]'));?>
		</div>

		<div class="form-group">
			<?php echo HTML::inputText((isset($student['address'])?$student['address']:''),array("placeholder"=>"address",'class'=>"form-control",'name'=>'student[address]'));?>
		</div>

		<div class="form-group">
			<?php echo HTML::inputText((isset($student['email'])?$student['email']:''),array("placeholder"=>"email",'class'=>"form-control",'name'=>'student[email]'));?>
		</div>


		<!--<?php// echo HTML::inputText((isset($user['phone'])?$user['phone']:''),array("placeholder"=>"phone",'class'=>"input-control",'name'=>'user[phone]','style'=>'border:solid 1px blue'));?>
		-->	
		<div class="form-group">
			<?php echo HTML::inputText((isset($student['mobile'])?$student['mobile']:''),array("placeholder"=>"mobile",'class'=>"form-control",'name'=>'student[mobile]'));?>
		</div>
		<div class="form-group">			
			<input type="submit" value="Submit" class="btn btn-primary">
		</div>
</form>

