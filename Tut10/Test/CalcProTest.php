<?php
/*
|--------------------------------------------------------------------------
| PHPUnit code coverage
|--------------------------------------------------------------------------
*/

require_once(realpath(__DIR__.'/../vendor/autoload.php'));

require_once(realpath(__DIR__.'/../CalcPro.php'));

class CalcProTest extends \PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        $this->instance = new CalcPro(); 
    }
    
    public function tearDown()
    {
        unset($this->instance);
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
        if($this->instance->AvgCal($a, $b) == "input can not be Zero or String")
            $this->assertEquals("input can not be Zero or String", $this->instance->AvgCal($a, $b));
        else
            $this->assertEquals($a/$b, $this->instance->AvgCal($a, $b));
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
        if($this->instance->AvgCal($a, $b) == "input can not be Zero or String")
            $this->assertEquals("input can not be Zero or String", $this->instance->AvgCal($a, $b));
        else
            $this->assertEquals($a/$b, $this->instance->AvgCal($a, $b));
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
