<?php
/*
|--------------------------------------------------------------------------
| Simple Class test Using PHPUnit.
|--------------------------------------------------------------------------
*/

class Calc{

	public $result;

	public function __construct(){			
			$this->result = 0;
	}

	public function AvgCal($a, $b){

			if($b!=0 and is_numeric($b))
				$this->result = (int)$a/(int)$b;
			else
				$this->result = "input can not be Zero or String";
			
			return $this->result;
	}

}

?>
