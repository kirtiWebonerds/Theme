<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include_once "base.php";
class Sites extends Base{

	public $primary = "id"; 

	public function getAttributes()
	{

		return  ['name', 'address','email', 'mobile']; 		
	}


	public function tableName()
	{
		return "students"; 
	}

	


}