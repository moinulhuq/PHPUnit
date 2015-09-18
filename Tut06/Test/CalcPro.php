<?php

require_once(realpath(__DIR__.'/../Calc.php'));

class CalcTest extends PHPUnit_Framework_TestCase
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
     * testcase-AvgCal
     *
     * @covers CalcTest::testAvgCal
     * @return float
     */
    public function testAvgCal()
    {
        // setup your test
        $a=3; 
        $b=3;
        $AvgCal = $this->Calc->AvgCal($a, $b);        
        return $AvgCal;            
    }
    
    /**
     * testcase-SumCal
     * 
     * @covers CalcTest::testSumCal
     * @return float
     */
    public function testSumCal()
    {
        // setup your test
        $a=3; 
        $b=3;
        $SumCal = $this->Calc->SumCal($a, $b);        
        return $SumCal;            
    }
    
    /** 
     * 
     * @depends testAvgCal
     * @depends testSumCal
     */
    public function testBaz($AvgCal , $SumCal)
    {
        $this->assertEquals(1, $AvgCal);
        $this->assertEquals(6, $SumCal);
    }

}

?>
