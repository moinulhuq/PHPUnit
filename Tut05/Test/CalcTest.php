<?php
/*
|--------------------------------------------------------------------------
| Annotation with Dataprovider.
|--------------------------------------------------------------------------
| Instead of creating multiple test methods, you simply create a single method that accepts parameters corresponding 
| to the data and create a data provider method to provide that data.
|
| Below we have created a single test method "testAvgCal($a,$b)" and a data provider "providerTestAvgCal()" which 
| contain an array that can contains any number of arrays with any type of information.
|
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

    /**
     * testcase
     *
     * @dataProvider providerTestAvgCal
     * @covers CalcTest::testAvgCal
     * @return void
     */
    public function testAvgCal($a,$b)
    {
        // setup your test and test the results
        if($this->Calc->AvgCal($a, $b) == "input can not be Zero or String")
            $this->assertEquals("input can not be Zero or String", $this->Calc->AvgCal($a, $b));
        else
            $this->assertEquals($a/$b, $this->Calc->AvgCal($a, $b));
    }

    /**
     * Data Provider for CalcTest::testAvgCal
     *
     * @return array
     */
    public function providerTestAvgCal()
    {
        return array(
            array(1,2),
            array(2,1),
            array(2,2),
            array(0,2),
            array(2,0),
            array(2,"Number"),
            array("Number",2),
            array("Number","Number"),
            array(0,"Number"),
            array("Number",0)
        );
    }


}
?>
