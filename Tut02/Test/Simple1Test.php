<?php

class Simple1Test extends PHPUnit_Framework_TestCase
{

    public function testadd() {
        include("Simple1.php");
        $result =  add(1,1); 
        $this->assertEquals(2, $result);
    }

}

?>
