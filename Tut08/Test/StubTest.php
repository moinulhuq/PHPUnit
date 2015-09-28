<?php
/*
|--------------------------------------------------------------------------
| Stub - Skeleton
|--------------------------------------------------------------------------
| $foo = $this->getMock('Foo', array('process')); 
|   (or)
| $foo = $this->getMockBuilder('Foo')
|             ->setMethods(array('process'))
|              ->getMock(); 
| 
| $foo->expects($this->any())
|     ->method('process')
|     ->will($this->returnValue(1));
|
*/

require_once(realpath(__DIR__.'/../Stub.php'));

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
