<?php
/*
|--------------------------------------------------------------------------
| Mock
|--------------------------------------------------------------------------
| Mock is another kind of stub with an expectation.
| 
| -> A mock verifies whether the method was called, how many times it was called or whether input parameters match our expectations or not.
|
*/

class Mock{

	public $Sum;

	public function __construct()
	{
		
	}
	public function Add($num1, $num2)
	{		
		$this->Sum = $num1+$num2;
		return $this->Sum;
	}
}

?>
