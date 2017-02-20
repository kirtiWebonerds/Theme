<?php
class HTML
{
		public $options;
		
		public static function inputText($value,$options=array())
		{
			$optionText = "" ;
			foreach($options  as $key=>$val)
			{

				$optionText.= " $key='$val' ";
			}	


			return  "<div><input  value='$value' $optionText ></div>";
		}
		public static function textArea($value,$options=array()){
			$optionText = "";
			foreach ($options as $key => $val) {
				$optionText.= "$key='$val'";
			}

			return "<div><textarea value='$value' $optionText></textarea></div>";
		}

		public static function  url($action,$params=array())
		{
			return "index.php?r={$action}&".http_build_query($params);
		}

		
}
?>