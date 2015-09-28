<?php
/*
|--------------------------------------------------------------------------
| Dummy - Skeleton
|--------------------------------------------------------------------------
|
| $foo = $this->getMock('Foo', array('process')); 
|   (or)
| $foo = $this->getMockBuilder('Foo')
|             ->setMethods(array('process'))
|              ->getMock(); 
|
*/

require_once(realpath(__DIR__.'/../Dummy.php'));

class DummyObjTest extends PHPUnit_Framework_TestCase
{ 
    public function setUp(){
        
    }
    public function tearDown(){
        
    }
    public function testprocessFoo(){
        
        //$foo = $this->getMock('Foo', array('process')); 
        // (or)
        $foo = $this->getMockBuilder('Foo')
                    ->setMethods(array('process'))
                    ->getMock(); 

        $foo->expects($this->once())
            ->method('process')
            ->will($this->returnValue(1));

        /*Our dummy object in this test is the bar object*/
        //$bar = $this->getMock('Bar'); 
        // (or)
        $bar = $this->getMockBuilder('Bar')
                    ->getMock(); 
        
        $baz = new Baz($foo, $bar);

        $this->assertEquals(1, $baz->processFoo());
    }

    public function testmergeBar(){
        /*Our dummy object in this test is the "Foo" object*/
        $foo = $this->getMockBuilder('Foo')
                    ->getMock(); 
        
        $bar = $this->getMockBuilder('Bar')
                    ->setMethods(array('getStatus', 'merge'))        
                    ->getMock(); 

        $bar->expects($this->once())
            ->method('getStatus')
            ->will($this->returnValue('merge-ready'));

        $baz = new Baz($foo, $bar);

        $this->assertEquals(TRUE, $baz->mergeBar());
    }

}

?>
