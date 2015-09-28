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

require_once(realpath(__DIR__.'/../Spy.php'));

class SpyTest extends PHPUnit_Framework_TestCase
{ 
    public function setUp(){
        
    }
    public function tearDown(){
        
    }
    public function testTraceCount(){

        $Obj = $this->getMockBuilder('Obj')
                     ->setMethods(array('process'))
                     ->getMock();

        // Here "process" Mthod expected to be called 4 times but in main class "process" Mthod called 3 times
        $Obj->expects($this->exactly(3))
             ->method('process');

        $ExpectedTimesToCall = 3;

        $Spy = new Spy($Obj);

        $Spy->TraceCount($ExpectedTimesToCall);

    }
}

?>
