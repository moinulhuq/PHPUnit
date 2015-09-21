<?php

require_once(realpath(__DIR__.'/../MockTester.php'));

class MockTesterTest extends PHPUnit_Framework_TestCase
{ 
    public function setUp(){
        
    }
    public function tearDown(){
        
    }
    public function testZero()
    {
        $mockTester = $this->getMock('MockTester');
        print_r(get_class_methods($mockTester)); // print all the methods of "MockTester" class
        //(or)
        $mockTester = $this->getMockBuilder('MockTester')->getMock();
        print_r(get_class_methods($mockTester)); // print all the methods of "MockTester" class
    }

    public function testgetOne()
    {
        $mockTester = $this->getMock('MockTester'); 
        $this->assertEquals(1, $mockTester->getOne()); // fail
        $this->assertEquals(2, $mockTester->getTwo());  // fail

        // When you create a mock without second parameter ($methods = array()) all class methods are replaced with "NULL"
        // That is why it will (Failed asserting that "null" matches expected "1")
    }

    public function testgetTwo()
    {
        $mockTester = $this->getMock('MockTester',array('getTwo'));
        $this->assertEquals(1, $mockTester->getOne()); // pass
        $this->assertEquals(2, $mockTester->getTwo()); // fail

        // When you pass method name 'getTwo', only that method 'getTwo' is replaced to imitate/fake the original 
        // functionality of 'getTwo' otherwise original method 'getOne' is used with same functionality.
        // That is why it will (Failed asserting that "null" matches expected "1")
    }

    public function testThree()
    {
        // Here we are creating a stub same like mock object
        $mockTester = $this->getMock('MockTester',array('getOne'));
        // And configuring the stub so that it return 3 instead of 1
        $mockTester->expects($this->any())->method('getOne')->will($this->returnValue(3));

        $this->assertEquals(3, $mockTester->getOne()); // pass (we imitate/fake "getOne" method functionality so that ir return 3)
        $this->assertEquals(2, $mockTester->getTwo()); // pass (it will pass becuase it originally return 2 and it will remain same)

        // Here we replace getOne() method and now it will return 3 when it is called. That is why it will pass.
    }

}

?>
