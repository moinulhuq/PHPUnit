<?php
/*
|--------------------------------------------------------------------------
| Stub
|--------------------------------------------------------------------------
| When a test double is supposed to return some fixed values, you need a stub. The characteristics of a stub are:
| 
| -> It doesn't matter which arguments are provided and when one of its methods is called.
|       * No list of required arguments need to provide (using ->with(...))
| -> It doesn't matter how many times a method is called.
|       * $this->any() indicate that there is no limit of calling this method and it will always return same value.
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
