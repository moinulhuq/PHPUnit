<?php
/*
|--------------------------------------------------------------------------
| Simple Class test Using PHPUnit.
|--------------------------------------------------------------------------
*/

class Number{

	public $Number;
	public $Arr;
	
	public function __construct($Number){
			$this->Number = $Number;
			$this->setArr();
	}

	public function getNumber(){
			return $this->Number;
	}

	public function setArr(){
			$this->Arr = array('key1' => 'Value 1', 'key2' => 'Value 2');
	}

	public function getArr(){
			return $this->Arr;
	}

}

?>
