<?php
/*
|--------------------------------------------------------------------------
| Mockery Example 01
|--------------------------------------------------------------------------
*/

require_once(realpath(__DIR__.'/../vendor/autoload.php'));

require_once(realpath(__DIR__.'/../Mockery_One.php'));

class MockeryVersusPHPUnitGetMockTest extends PHPUnit_Framework_TestCase {
 
    protected function tearDown() {
        \Mockery::close();
    }

    public function testSimpleMocks()
    {
        $user = Mockery::mock('AClassToBeMocked', array('someMethod'=>1));
        $user->someMethod(); // Print "1"
    }

    //Simple Return Values
    function testSimpleReturnValue() {
        $someObject = new SomeClass();
 
        // With PHPUnit
        $phpunitMock = $this->getMock('AClassToBeMocked');
        $phpunitMock->expects($this->once())->method('someMethod')->will($this->returnValue('some value'));
        // Expect the returned value
        $this->assertEquals('some value', $someObject->doSomething($phpunitMock));

        // With Mockery
        $mockeryMock = \Mockery::mock('AnInexistentClass');
        $mockeryMock->shouldReceive('someMethod')->once()->andReturn('some value');
        // Expect the returned value
        $this->assertEquals('some value', $someObject->doSomething($mockeryMock));
    }

    //Expect More Than One Call
    function testExpectMultiple() {
        $someObject = new SomeClass();
     
        // With PHPUnit 2 times
        $phpunitMock = $this->getMock('AClassToBeMocked');
        $phpunitMock->expects($this->exactly(2))->method('someMethod');
        // Exercise for PHPUnit
        $someObject->doSomething($phpunitMock);
        $someObject->doSomething($phpunitMock);

        // With Mockery 2 times
        $mockeryMock = \Mockery::mock('AnInexistentClass');
        $mockeryMock->shouldReceive('someMethod')->twice();
        // Exercise for Mockery
        $someObject->doSomething($mockeryMock);
        $someObject->doSomething($mockeryMock);
     
        // With Mockery 3 times
        $mockeryMock = \Mockery::mock('AnInexistentClass');
        $mockeryMock->shouldReceive('someMethod')->times(3);
        // Exercise for Mockery
        $someObject->doSomething($mockeryMock);
        $someObject->doSomething($mockeryMock);
        $someObject->doSomething($mockeryMock);
    }

    //Returning Different Values
    function testDemonstratePHPUnitCallIndexing() {
        $someObject = new SomeClass();
     
        // With PHPUnit
        $phpunitMock = $this->getMock('AClassToBeMocked');
        $phpunitMock->expects($this->at(0))->method('someMethod')->will($this->returnValue('First value'));
        $phpunitMock->expects($this->at(1))->method('someMethod')->will($this->returnValue('Second value'));
        $phpunitMock->expects($this->at(2))->method('someMethod')->will($this->returnValue('Third value'));
        $phpunitMock->expects($this->at(3))->method('someMethod')->will($this->returnValue('Fourth value'));

        // Expect the returned value
        $this->assertEquals('First value', $someObject->doSomething($phpunitMock));
        $this->assertEquals('Second value', $someObject->doSomething($phpunitMock));
        $this->assertEquals('Third value', $someObject->doSomething($phpunitMock));
        $this->assertEquals('Fourth value', $someObject->doSomething($phpunitMock));
     
        // With Mockery
        $mockeryMock = \Mockery::mock('AnInexistentClass');
        $mockeryMock->shouldReceive('someMethod')->andReturn('First value', 'Second value', 'Third value', 'Fourth value');
     
        // Expect the returned value
        $this->assertEquals('First value', $someObject->doSomething($mockeryMock));
        $this->assertEquals('Second value', $someObject->doSomething($mockeryMock));
        $this->assertEquals('Third value', $someObject->doSomething($mockeryMock));
        $this->assertEquals('Fourth value', $someObject->doSomething($mockeryMock));
    }

    //Return Values Based on Given Parameter
    function testPHUnitCandDecideByParameter() {
        $someObject = new SomeClass();
     
        // With PHPUnit
        $phpunitMock = $this->getMock('AClassToBeMocked');
        $phpunitMock->expects($this->any())->method('getNumber')->with(2)->will($this->returnValue(2));
        $phpunitMock->expects($this->any())->method('getNumber')->with(3)->will($this->returnValue(3));
     
        $this->assertEquals(4, $someObject->doubleNumber($phpunitMock, 2));
        $this->assertEquals(6, $someObject->doubleNumber($phpunitMock, 3));

        /*This test fails because PHPUnit cannot differentiate between the two expectations*/

        // With Mockery
        $mockeryMock = \Mockery::mock('AClassToBeMocked');
        $mockeryMock->shouldReceive('getNumber')->with(2)->andReturn(2);
        $mockeryMock->shouldReceive('getNumber')->with(3)->andReturn(3);
     
        $this->assertEquals(4, $someObject->doubleNumber($mockeryMock, 2));
        $this->assertEquals(6, $someObject->doubleNumber($mockeryMock, 3));
    }
 
}
 
?>
