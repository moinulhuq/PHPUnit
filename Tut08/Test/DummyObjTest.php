<?php
/*
|--------------------------------------------------------------------------
| Dummy Objects - Test Class Example
|--------------------------------------------------------------------------
| Here we want to test "processFoo()" and "mergeBar()" methods of "Baz" class.
| 
| To do this we need to create Dummy Objects of "Foo" and "Bar" class and pass it to "Baz" Class. Here we are going to 
| immitate/fake "Foo" and "Bar", these two object function so that we can run test.
|
| Here we want to test "processFoo()" and "mergeBar()" methods of "Baz" class.
|
*/

require_once(realpath(__DIR__.'/../Baz.php'));

class DummyObjTest extends PHPUnit_Framework_TestCase
{ 
    public function setUp(){
        
    }
    public function tearDown(){
        
    }
    public function testprocessFoo(){
        
        //Creating "Foo" Dummy object
        //$foo = $this->getMock('Foo', array('process')); // (or)
        $foo = $this->getMockBuilder('Foo')
                    ->setMethods(array('process'))
                    ->getMock(); 

        //Configuring "Foo" Dummy object
        $foo->expects($this->once())
            ->method('process')
            ->will($this->returnValue(1));

        //Creating "Bar" Dummy object but no need to define methods "getStatus()" and "merge()" of this object because
        //At "processFoo()" of Baz Class there is no use of these methods
        //$bar = $this->getMock('Bar'); // (or)
        $bar = $this->getMockBuilder('Bar')
                    ->getMock(); 

        $baz = new Baz($foo, $bar);

        $this->assertEquals(1, $baz->processFoo());
    }

    public function testmergeBar(){
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
