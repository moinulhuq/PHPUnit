<?php
/*
|--------------------------------------------------------------------------
| Annotation with Dataprovider.
|--------------------------------------------------------------------------
| Instead of creating multiple test methods, you simply create a single method that accepts parameters corresponding 
| to the data and create a data provider method to provide that data.
|
| Below we have created a single test method "testAvgCal($a,$b)" and a data provider "providerTestAvgCal()" which 
| contain an array that can contains any number of arrays with any type of information.
|
*/

class Calc{

	public $result;

	public function __construct(){			
			$this->result = 0;
	}

	public function AvgCal($a, $b){

			if($b!=0 and is_numeric($b) and $a!=0 and is_numeric($a))
				$this->result = (int)$a/(int)$b;
			else
				$this->result = "input can not be Zero or String";
			return $this->result;
	}

}

?>
