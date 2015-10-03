<?php
/*
|--------------------------------------------------------------------------
| Mockery Example 03 - Dealing with Constructor Parameters
|--------------------------------------------------------------------------
*/

class Calculator{

    public $myNumbers = array();
 
    function __construct($firstNo, $secondNo) {
        $this->myNumbers[]=$firstNo;
        $this->myNumbers[]=$secondNo;
    }

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
