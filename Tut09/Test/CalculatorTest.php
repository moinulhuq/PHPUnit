<?php
/*
|--------------------------------------------------------------------------
| Mockery Example 02
|--------------------------------------------------------------------------
*/

require_once(realpath(__DIR__.'/../vendor/autoload.php'));

require_once(realpath(__DIR__.'/../Calculator.php'));

class MockeryVersusPHPUnitGetMockTest extends PHPUnit_Framework_TestCase {
 
    protected function tearDown() {
        \Mockery::close();
    }
 
    function testPartialMocking() {
        
	/*None of them will pass*/

	/*  
    	//With PHPUnit
        $phpMock = $this->getMock('Calculator', array('add'));
        $phpMock->expects($this->any())->method('add')->with(3,3)->will($this->returnValue(6));
    	$this->assertEquals(6, $phpMock->multiply(3,2)); 


    	//With Mockery
	$mockeryMock = \Mockery::mock('Calculator');
	$mockeryMock->shouldReceive('add')->with(3,3)->andReturn(6);
	$this->assertEquals(6, $mockeryMock->multiply(3,2));
	*/

        /*Now it will pass*/

	//With PHPUnit
        $phpMock = $this->getMock('Calculator', array('add', 'multiply'));
        $phpMock->expects($this->any())->method('add')->with(3,3)->will($this->returnValue(6));
    	$phpMock->expects($this->any())->method('multiply')->with(3,2)->will($this->returnValue(6)); // Defining return value of "multiply"
    	$this->assertEquals(6, $phpMock->multiply(3,2)); 

    	//With Mockery
	$mockeryMock = \Mockery::mock(new Calculator); // Passing a real object "new Calculator" to \Mockery::mock()
	$mockeryMock->shouldReceive('add')->with(3,3)->andReturn(6);
	$this->assertEquals(6, $mockeryMock->multiply(3,2));
	
	/* Mockery creates partial mock if you pass real object. That is why "multiply()"" method calls the real "add()"" method not 
	the Mock one. To test just change '->andReturn(6)' to '->andReturn(7)' and it will not shows any error. But if you want 
	"multiply()"" method will call mock "add()"" then you need to change your code like this
	*/

    	//With Mockery
	$mockeryMocked = \Mockery::mock('Calculator[add]');
	$mockeryMocked->shouldReceive('add')->andReturn(6); // Here we don't need to include "with(3,3)" as it is fake
	$this->assertEquals(6, $mockeryMocked->multiply(3,2));

    }

}
 
?>
