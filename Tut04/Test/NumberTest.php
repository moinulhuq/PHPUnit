<?php

require_once(realpath(__DIR__.'/../Number.php'));

class NumberTest extends \PHPUnit_Framework_TestCase
{
    public $Number;
    public $Arr;
    
    public function setUp()
    {
        $this->instan = new Number(); 
        $this->instan->setNumber("420");
    }

    public function tearDown()
    {
        // your code here
    }

    public function testgetNumber()
    {   
        $Num = $this->instan->getNumber();
        
        $this->assertTrue($Num=="420");
        $this->assertFalse($Num=="520");
        
        $this->assertSame($Num , "420"); //Same type and value "Will pass"
        $this->assertEquals($Num , 420);
    }

    public function testgetArr()
    {   
        $Arr = $this->instan->getArr();
        $this->assertArrayHasKey("key1",$Arr);
    }
}

?>
