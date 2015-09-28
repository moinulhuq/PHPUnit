<?php

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
