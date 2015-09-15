<?php

require_once(realpath(__DIR__.'/../Number.php'));

class NumberTest extends \PHPUnit_Framework_TestCase
{
	public $Number;

    public function setUp()
    {
        $this->Number = new Number("420"); 
    }

    public function tearDown()
    {
        // your code here
    }

    public function testgetName()
    {	
    	$Number = $this->Number->getNumber();
        
        $this->assertTrue($Number=="420");
        $this->assertFalse($Number=="520");
        
        $this->assertSame($Number , "420"); //Same type and value "Will pass"
        $this->assertEquals($Number , 420);
    }
}

?>
