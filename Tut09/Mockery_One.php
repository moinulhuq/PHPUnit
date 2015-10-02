<?php
/*
|--------------------------------------------------------------------------
| Mockery Example 01
|--------------------------------------------------------------------------
*/

class AClassToBeMocked {
 
    function someMethod() {
 
    }

    function getNumber($number) {
        return $number;
    } 
}
 
class SomeClass {
 
    function doSomething($anotherObject) {
        return $anotherObject->someMethod();
    }

    function doubleNumber($anotherObject, $number) {
        return $anotherObject->getNumber($number) * 2;
    }    
 
}

?>
