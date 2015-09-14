<?php

class Simple1Test extends PHPUnit_Framework_TestCase
{
    public function testSomething() {
        $args = array('arg1'=>30, 'arg2'=>12);
        $_GET = $args;
        $result = include_once(realpath(__DIR__.'/../Simple1.php'));
        $this->assertEquals(42, $result); 
    }
}

?>
