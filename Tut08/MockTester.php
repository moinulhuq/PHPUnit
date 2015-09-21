<?php
/*
|--------------------------------------------------------------------------
| "Test Doubles" or "MOCK"
|--------------------------------------------------------------------------
| 1. Code you write often depends on other code i.e. function of one class is calling another class, function, or databases or 
| third-party APIs. But, unit test only test the smallest unit of functionality which means it will test only the caller
| function not other external depended class or function. To eliminate these dependencies We can use "test double" to replace
| the complex code (dependencies) and simply focus on testing the isolated code.
|
| 2. According to "Test Doubles" purpose we can categorise in 5 category
| 	 -> Dummy
| 	 -> Fake
| 	 -> Stub
| 	 -> Spy
| 	 -> Mock
|
| 3. Creating test doubles - two basic ways of creating test doubles| 
| 	 $double = $this->getMock('MyClass');
| 	 $double = $this->getMockBuilder('MyClass')->getMock();
|
| Both do same but different is "getMock()" method accepts eight different parameters, which affects how double will be created. e.g
|	
|	$this->getMock(
|	    $originalClassName,
|	    $methods = array(),
|	    array $arguments = array(),
|	    $mockClassName = '',
|	    $callOriginalConstructor = TRUE,
|	    $callOriginalClone = TRUE,
|	    $callAutoload = TRUE
|	);
|
| But for getMockBuilder() method, instead of passing 10 arguments, you can chain them up. e.g
|
|	$mock = $this->getMockBuilder($className)
|	    ->setMockClassName($name)
|	    ->setConstructorArgs(array())
|	    ->disableOriginalConstructor()
|	    ->disableOriginalClone()
|	    ->disableAutoload()
|	    ->setMethods(array()|NULL)
|	    ->getMock();
*/

class MockTester{

	public function getOne()
	{
		return 1;
	}
	public function getTwo()
	{
		return 2;
	}
}

?>
