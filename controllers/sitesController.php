<?php 

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include_once "baseController.php";
class  SitesController extends BaseController
{
	public function actionIndex()
	{

		 $model=new Sites();
		 $site=$model->findAll();
		// $name="kirti";

		$this->render("sites/index",array("site"=>$site));
	}
}	

// 	public function actionCreate(){
// 		if(isset($_POST['site'])){
// 		//print_r($_POST['student']);
// 		//exit;
// 			$model= new Sites();
// 			$model->name= $_POST['site']['name'];
// 			$model->address=$_POST['student']['address'];
// 			$model->email=$_POST['student']['email'];
// 			$model->mobile=$_POST['student']['mobile'];

// 			if(isset($_GET['id'])){
// 				$model->id= $_GET['id'];
// 				if($model->update())
// 				{
// 					$this->redirect("students/index");
// 				} 

// 			}else{
// 				if($model->save())
// 				{
// 					$this->redirect("students/index");
// 				} 
// 			}
// 		}
// 		$this->render("students/form");
// 	}

// public function actionDelete(){
// 		$model =new Students();
// 		$model->id = $_GET['id'];
// 		$id = $model->id;
// 		if($model->deleteByPk($id)){
// 			$this->redirect("students/index");
// 		}
// 	}
// public function actionView(){
// 	$model=new Students();
// 	$model->id =$_GET['id'];
// 	$id = $model->id;
// 	$student=$model->findByPk($id);
// 	$this->render('students/view',array("student"=>$student));
// } 

