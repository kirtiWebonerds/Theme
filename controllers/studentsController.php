<?php 

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include_once "baseController.php";
class  StudentsController extends BaseController
{
	public function actionIndex()
	{

		 $model=new Students();
		 $student=$model->findAll();
		// $name="kirti";

		$this->render("students/index",array("student"=>$student));
	}

	public function actionCreate(){
		if(isset($_POST['student'])){
		//print_r($_POST['student']);
		//exit;
			$model= new Students();
			$model->name= $_POST['student']['name'];
			$model->address=$_POST['student']['address'];
			$model->email=$_POST['student']['email'];
			$model->mobile=$_POST['student']['mobile'];

			if(isset($_GET['id'])){
				$model->id= $_GET['id'];
				if($model->update())
				{
					$this->redirect("students/index");
				} 

			}else{
				if($model->save())
				{
					$this->redirect("students/index");
				} 
			}
		}
		$this->render("students/form");
	}

public function actionDelete(){
		$model =new Students();
		$model->id = $_GET['id'];
		$id = $model->id;
		if($model->deleteByPk($id)){
			$this->redirect("students/index");
		}
	}
public function actionView(){
	$model=new Students();
	$model->id =$_GET['id'];
	$id = $model->id;
	$student=$model->findByPk($id);
	$this->render('students/view',array("student"=>$student));
} 

}