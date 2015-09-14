<?php

class Simple1Test extends PHPUnit_Framework_TestCase
{

    public function testadd() {    	
        include_once(realpath(__DIR__.'/../Simple1.php'));
        $result =  add(1,1); 
        $this->assertEquals(2, $result);
    }

}

?>
