<?php
/*
|--------------------------------------------------------------------------
| Stub
|--------------------------------------------------------------------------
| When a test double is supposed to return some fixed values, you need a stub. The characteristics of a stub are:
| 
| -> It doesn't matter which arguments are provided and when one of its methods is called.
|       * No list of required arguments need to provide (using ->with(...)) and no need to invoke "setMethods".
| -> It doesn't matter how many times a method is called.
|       * $this->any() indicate that there is no limit of calling this method and it will always return same value.
|
*/

require_once(realpath(__DIR__.'/../Baz.php'));

class StubTest extends PHPUnit_Framework_TestCase
{ 
    public function setUp(){
        
    }
    public function tearDown(){
        
    }
    public function testprocessFoo(){
        
        /*Our Stub in this test is the foo object*/
        $foo = $this->getMockBuilder('Foo')
                    ->setMethods(array('process'))
                    ->getMock(); 

        $foo->expects($this->any())
            ->method('process')
            ->will($this->returnValue(1));

        $bar = $this->getMockBuilder('Bar')
                    ->getMock(); 

        $baz = new Baz($foo, $bar);

        $this->assertEquals(1, $baz->processFoo());
    }

    public function testmergeBar(){
        $foo = $this->getMockBuilder('Foo')
                    ->getMock(); 

        /*Our Stub in this test is the bar object*/
        $bar = $this->getMockBuilder('Bar')
                    ->setMethods(array('getStatus','merge'))        
                    ->getMock(); 

        $bar->expects($this->any())
            ->method('getStatus')
            ->will($this->returnValue('merge-ready'));

        $baz = new Baz($foo, $bar);

        $this->assertEquals(TRUE, $baz->mergeBar());
    }

}

?>
