<?php
/*
|--------------------------------------------------------------------------
| Mockery Installation
|--------------------------------------------------------------------------
| 01. For installation of Mockery Framework with your phpunit go to your project root and open composer.json. For mine it is 
|     "C:\xampp\htdocs\xdb\composer.json".
| 
| 02. After that add this lines to your composer.json which will look like.
| 
|   {
|       "require"     : { "Mockery/Mockery": ">=0.7.2" },
|       "require-dev" : { "phpunit/phpunit": "*" },
|       "autoload"    : {
|                      "psr-0": { "xdb": "" }
|                   }
|   }
| 
| 03. Right aftre that open your cmd and write "composer update" going to your project root.
|     "C:\xampp\htdocs\xdb>composer update"
| 
| 04. Once installation finished integrate Mockery with your PHPUnit testing framework. To do that you need to define a 
|     tearDown() method with your test class.
| 
|   class abc extends PHPUnit_Framework_TestCase {
|         protected function tearDown() {
|             \Mockery::close();
|         }
|   }
| 
| 05. As we are using Composer that's why simply add this line to your test class to include Mockery.
| 
|   require_once(realpath(__DIR__.'/../vendor/autoload.php'));
| 
|   class abc extends PHPUnit_Framework_TestCase {
|         protected function tearDown() {
|             \Mockery::close();
|         }
|   }
| 
| 06. Then as we are using PHPUnit’s XML configuration approach, We can include the following line to load the TestListener:
| 
| <?xml version="1.0" encoding="UTF-8"?>
| <phpunit colors="true" bootstrap="vendor/autoload.php">
|
|     <testsuites>
|         <testsuite name="Application Test Suite">            
|           <directory suffix=".php">./Test/</directory>
|         </testsuite>
|     </testsuites>
| 
|     <listeners>
|           <listener class="\Mockery\Adapter\Phpunit\TestListener" file="vendor/mockery/mockery/library/Mockery/Adapter/Phpunit/TestListener.php">
|           </listener>
|     </listeners>  
|
| </phpunit>
| 
| 07. After all of this Run this file using PHPUnit command and make sure this file should be under "Test" directory of your project root. 
|     for mine. "C:\xampp\htdocs\xdb\Test\MockeryTest.php" and main file under root directory 
|     "C:\xampp\htdocs\xdb\Mockery.php".
| 
*/

require_once(realpath(__DIR__.'/../vendor/autoload.php'));

require_once(realpath(__DIR__.'/../Mockery.php'));

class JustToCheckMockeryTest extends PHPUnit_Framework_TestCase {
 
    protected function tearDown() {
        \Mockery::close();
    }
 
    function testMockeryWorks() {
        $mock = \Mockery::mock('AClassToBeMocked');
        $mock->shouldReceive('someMethod')->once();
 
        $workerObject = new AClassToWorkWith;
        $workerObject->doSomethingWit($mock);
    }
}
 
?>
