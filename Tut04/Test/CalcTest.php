<?php

/*
|--------------------------------------------------------------------------
| Run all test one by one and refactor your "Calc Class" accordingly
|--------------------------------------------------------------------------
*/

require_once(realpath(__DIR__.'/../Calc.php'));

class CalcTest extends \PHPUnit_Framework_TestCase
{
    public $Calc;

    public function setUp()
    {
        $this->Calc = new Calc(); 
    }

    public function tearDown()
    {
        // your code here
    }

    public function testAvgCalwithNumber()
    {   
        $a = 1;
        $b = 2;        
        $this->assertEquals($a/$b, $this->Calc->AvgCal($a, $b));

        $a = 2;
        $b = 1;
        $this->assertEquals($a/$b, $this->Calc->AvgCal($a, $b));

        $a = 2;
        $b = 2;
        $this->assertEquals($a/$b, $this->Calc->AvgCal($a, $b));

        $a = 0;
        $b = 2;
        $this->assertEquals($a/$b, $this->Calc->AvgCal($a, $b));

        // "Division by zero" error occured refactor your code so that nuber can not "Division by zero"
        $a = 2;
        $b = 0; 
        $this->assertEquals("input can not be Zero or String", $this->Calc->AvgCal($a, $b)); 

    }

    public function testAvgCalwithString()
    {           
        $a = 2;
        $b = "Number";
        $this->assertEquals("input can not be Zero or String", $this->Calc->AvgCal($a, $b)); // "Division by zero"

        $a = "Number";
        $b = 2;
        $this->assertEquals(0, $this->Calc->AvgCal($a, $b));

        $a = "Number";
        $b = "Number";
        $this->assertEquals("input can not be Zero or String", $this->Calc->AvgCal($a, $b)); // "Division by zero"

        $a = 0;
        $b = "Number";
        $this->assertEquals("input can not be Zero or String", $this->Calc->AvgCal($a, $b)); // "Division by zero"

        $a = "Number";
        $b = 0;
        $this->assertEquals("input can not be Zero or String",$this->Calc->AvgCal($a, $b)); // "Division by zero"

    }
}

?>
