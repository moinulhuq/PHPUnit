<?php
/*
|--------------------------------------------------------------------------
| Spy
|--------------------------------------------------------------------------
| If you want to keep track of method calls being made to a test double, you should use a spy.
| 
| -> Difference between a test spy and a test stub is that you’re not concerned with testing return values.
|
*/

class Spy{

	public $Obj;	

	public function __construct($Obj)
	{
		$this->Obj = $Obj;
	}

	public function TraceCount($ExpectedTimesToCall)
	{		
		for($i=0;$i<$ExpectedTimesToCall;$i++) {
					$this->Obj->process();
				}
	}
}

?>
