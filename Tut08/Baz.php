<?php
/*
|--------------------------------------------------------------------------
| Dummy Objects
|--------------------------------------------------------------------------
| Dummy objects are objects that the System Under Test (SUT) depends on, but they are actually never used. A dummy object 
| can be an argument passed to another object, or it can be returned by a second object and then passed to a third object.
|
| Below "Baz" class take two class "foo" and "bar". 
| -> foo has one function 
|		foo->process()
| -> bar has two function 
|		bar->getStatus()
|		bar->merge()
|
| Here we want to test "processFoo()" and "mergeBar()" methods of "Baz" class.
|
*/

class Baz{

	public $foo;
	public $bar;

	public function __construct(Foo $foo, Bar $bar)
	{
		$this->foo = $foo;
		$this->bar = $bar;
	}

	public function processFoo()
	{
		return $this->foo->process();
	}

	public function mergeBar()
	{
		if ($this->bar->getStatus() == 'merge-ready') 
		{
			$this->bar->merge();
			return true;
		}

		return false;
	}
}

?>
