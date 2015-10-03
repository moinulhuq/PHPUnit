<?php
/*
|--------------------------------------------------------------------------
| Mockery Example 03 - Dealing with Constructor Parameters
|--------------------------------------------------------------------------
*/

require_once(realpath(__DIR__.'/../vendor/autoload.php'));

require_once(realpath(__DIR__.'/../Mockery_Two.php'));

class MockeryVersusPHPUnitGetMockTest extends PHPUnit_Framework_TestCase {
 
    protected function tearDown() {
        \Mockery::close();
    }
 
    function testPartialMocking() {
        
		/*With PHPUnit
		
		$this->getMock(
			    $originalClassName,
			    $methods = array(),
			    array $arguments = array(),
			    $mockClassName = '',
			    $callOriginalConstructor = TRUE,
			    $callOriginalClone = TRUE,
			    $callAutoload = TRUE
			);
		*/

		//Specify Constructor Parameters
		$phpMock = $this->getMock('Calculator', array('add'), array(1,2));
		 
		//Do not call original constructor
		$phpMock = $this->getMock('Calculator', array('add'), array(), '', false);

    	/*With Mockery*/

	    // Use constructor parameters
	    $withConstructParams = \Mockery::mock('Calculator[add]', array(1,2));
	    $withConstructParams->shouldReceive('add')->andReturn(6);
	 
	    // User real object with real values and mock over it
	    $mockRealObj = \Mockery::mock(new Calculator(1,2));
	    $mockRealObj->shouldReceive('add')->andReturn(6);

	    // Do not call constructor
	    $noConstrucCall = \Mockery::mock('Calculator');
	    $noConstrucCall->shouldReceive('add')->andReturn(6);
    }
}
 
?>
