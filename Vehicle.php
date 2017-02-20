<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class Vehicle
{
	public $speed; 
	public function setSpeed($no)
	{
		$this->speed = $no; 
	}

	public function getSpeed($name, $n=array())
	{
		if($n===1)
		{
			return "I am default"; 
		}
		return $this->speed;
	}
}

class ZoomCar extends Vehicle
{
	public function getDetail()
	{
	   echo $this->getSpeed('anita'); 
	   exit; 
	}
}
$z = new ZoomCar(); 
$z->setSpeed(70); 
$z->getDetail(); 
?>