<?php
/*
|--------------------------------------------------------------------------
| Mockery Example 02
|--------------------------------------------------------------------------
*/

class Calculator {
    public $myNumbers = array();

    function add($firstNo, $secondNo) {
        return $firstNo + $secondNo;
    }
 
    function subtract($firstNo, $secondNo) {
        return $firstNo - $secondNo;
    }
 
    function multiply($value, $multiplier) {
        $newValue = 0;
        for($i=0;$i<$multiplier;$i++)
            $newValue = $this->add($newValue, $value);
        return $newValue;
    }
}

?>
