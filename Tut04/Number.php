<?php
/*
|--------------------------------------------------------------------------
| Simple Class test Using PHPUnit.
|--------------------------------------------------------------------------
*/

class Number{

	public $Number;

	public function __construct($Number){
			$this->Number = $Number;
	}

	public function getNumber(){
			return $this->Number;
	}

}

?>
