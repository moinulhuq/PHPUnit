<?php
/*
|--------------------------------------------------------------------------
| Mock - skeleton
|--------------------------------------------------------------------------
| 
| $Mock->expects($this->once())
|      ->method('Add')
|      ->with(2, 1)
|      ->will($this->returnValue(3));
|
| -> expects: This shows how many times a method is called
| -> method: This calls a method name
| -> with: This shows what needs to be passed to the method
| -> will: This shows what the method will return
|
| expects() can use the following methods
| --------------------------------------
| -> any(): This can be called as many times as you want.
| -> never(): This is never called.
| -> atLeastOnce(): This is similar to the any() method but needs to be called.
| -> once(): This is called just once.
| -> exactly($count): You can specify how many times this method must be called.
| -> at($index): This calls a method when an index matches the number of times it was called. 
|    For example, at(0) will be called first, and at(1) will be called second.
|
| will() can use the following values:
| --------------------------------------
| -> returnValue($value): This returns the passed value.
| -> returnValueMap(array $valueMap): This returns different values depending on the passed argument
|   e.g.
|   $valueMap = array(array(1,2),array(2,3));
|   $mock->expects($this->any())
|        ->method('someMethod')
|        ->will($this->returnValueMap($valueMap));
|
|   when someMethod is called with the argument one, it will return two, and when it is called with two, it will return three.
|
| -> returnArgument($argumentIndex): This returns an unchanged passed argument
| -> returnCallback($callback): This returns a callback
|   e.g.
|       $mock->expects($this->any())
|            ->method('someMethod')
|            ->will($this->returnCallback(array($this,'myCallback')));
|       public function myCallback(){
|               $arguments = func_get_args();   // "func_get_args()" get the parameters of depended function
|               return $arguments[0] + 1;
|            }
|
|   myCallback() is a method that returns as a result input argument plus one.
|
| -> returnSelf(): This returns itself, that is, the called object
| -> throwException(Exception $exception): This simply throws an exception
| -> onConsecutiveCalls(): This returns different predefined values after each call:
|
*/

require_once(realpath(__DIR__.'/../Mock.php'));

class BazTest extends PHPUnit_Framework_TestCase
{ 
    public function setUp(){
        
    }
    public function tearDown(){
        
    }
    /*  
        -> expects: This shows how many times a method is called
        -> method: This calls a method name
        -> with: This shows what needs to be passed to the method
        -> will: This shows what the method will return
    */
    public function testAdd(){

    $MockDupli = $this->getMockBuilder('Mock')
                      ->setMethods(array('Add'))
                      ->getMock();

           $MockDupli->expects($this->once())
                     ->method('Add')
                     ->with(2, 1)
                     ->will($this->returnValue(3));

    $MockOrgi = new Mock();

    $this->assertEquals($MockOrgi->Add(2,1), $MockDupli->Add(2,1));

    }
}

?>
