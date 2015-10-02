<?php
/*
|--------------------------------------------------------------------------
| Mockery
|--------------------------------------------------------------------------
| -> Mockery is a powerful Mock Object framework for PHP testing. Although PHPUnit does actually ship with a Mock Object library, 
| I think most people prefer to use Mockery instead.
| 
| -> For bigger projects and complex code, Mockery might offer a few tricks which really help.
|
*/

class AClassToBeMocked {
    function someMethod(){
    }
}

class AClassToWorkWith {
    function doSomethingWit($anotherClass) {
        return $anotherClass->someMethod();
    }
}

?>
