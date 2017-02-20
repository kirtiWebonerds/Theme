
<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include_once "html.php";
include_once "models/users.php";
include_once "models/students.php";
 if(isset($_GET['r']))
 { 

 	//print_r($_GET['r']);
 	//exit;

 	$action = explode('/', $_GET['r']);

 	//print_r($action);
 	//exit;
 	//echo 'viewfolder:'.$action[0]."<br>";
 	//echo 'viewfile:'.$action[1];
 	//exit;
 	require_once "controllers/{$action[0]}Controller.php";

 	//echo "controllers/{$action[0]}Controller.php";
 	//exit;
 		$class = ucfirst($action[0])."Controller"; 	
 	//echo $class;
 	//exit;	
 		$method = "action".$action[1];
 	//echo $method;
   //	exit;	
 		$controller = new $class; 
	 	$controller->$method(); 
}	
else{
		 	//require_once "controllers/studentsController.php";
		 //	$controller = new userController();
		 //	$controller->actionList();
}

