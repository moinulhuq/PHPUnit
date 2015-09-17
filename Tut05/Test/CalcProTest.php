<?php

require_once(realpath(__DIR__.'/../CalcPro.php'));

class CalcProTestTest extends \PHPUnit_Framework_TestCase
{
    public $CalcPro;

    public function setUp()
    {
        $this->CalcPro = new CalcPro(); 
    }
    
    public function tearDown()
    {
        // your code here
    }

    /**
     * testcase
     *
     * @dataProvider provider
     * @covers CalcProTest::testAvgCal
     * @return void
     */
    public function testAvgCal($a,$b)
    {
        // setup your test and test the results
        if($this->CalcPro->AvgCal($a, $b) == "input can not be Zero or String")
            $this->assertEquals("input can not be Zero or String", $this->CalcPro->AvgCal($a, $b));
        else
            $this->assertEquals($a/$b, $this->CalcPro->AvgCal($a, $b));
    }

    /**
     * testcase
     *
     * @dataProvider provider
     * @covers CalcProTest::testSumCal
     * @return void
     */
    public function testSumCal($a,$b)
    {
        // setup your test and test the results
        if($this->CalcPro->AvgCal($a, $b) == "input can not be Zero or String")
            $this->assertEquals("input can not be Zero or String", $this->CalcPro->AvgCal($a, $b));
        else
            $this->assertEquals($a/$b, $this->CalcPro->AvgCal($a, $b));
    }

    /**
     * Data Provider for CalcProTest::provider
     *
     * @return array
     */
    public function provider()
    {
        return array(
            array(1,2)
        );
    }
}
?>
