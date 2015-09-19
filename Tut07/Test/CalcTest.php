<?php

require_once(realpath(__DIR__.'/../Calc.php'));

class CalcTest extends PHPUnit_Framework_TestCase
{ 
    public function setUp()
    {
        $this->instance = new Calc();
    }

    public function tearDown()
    {
        unset($this->instance);
    }

    /**
     * Call protected/private method of a class.
     *
     * @param object &$object    object of "Clac"
     * @param string $methodName Method "AvgCal" to call
     * @param array  $parameters Args list for "AvgCal"
     *
     * @return mixed
     */
    public function invokeMethod(&$object, $methodName, array $parameters = array())
    {
        $reflection = new \ReflectionClass(get_class($object));
        $method = $reflection->getMethod($methodName);
        $method->setAccessible(true);

        return $method->invokeArgs($object, $parameters);
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
        $this->assertEquals($a/$b, $this->invokeMethod($this->instance, "AvgCal", array(3,3)));        
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
        $this->assertEquals($a+$b, $this->invokeMethod($this->instance, "SumCal", array(3,3)));                    
    }
}

?>
