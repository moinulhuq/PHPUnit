<?php
/*
|--------------------------------------------------------------------------
| Accessing private and protected method
|--------------------------------------------------------------------------
*/

class Calc{

	public $result;

	public function __construct(){			
			$this->result = 0;
	}

	private function AvgCal($a, $b){

			if($b!=0 and is_numeric($b) and $a!=0 and is_numeric($a))
				$this->result = (int)$a/(int)$b;
			else
				$this->result = "input can not be Zero or String";
			return $this->result;
	}

	private function SumCal($a, $b){

			if($b!=0 and is_numeric($b) and $a!=0 and is_numeric($a))
				$this->result = (int)$a+(int)$b;
			else
				$this->result = "input can not be Zero or String";
			return $this->result;
	}

}

?>
