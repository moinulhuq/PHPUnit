<?php
/*
|--------------------------------------------------------------------------
| PHPUnit Install.
|--------------------------------------------------------------------------
|
| 1. Create "composer.json" into your working directory, for mine "htdocs\xdb"
|	
|	{
|		"require"     : { },
|		"require-dev" : { "phpunit/phpunit": "*" }
|	}
|
| 2. Then in "cmd" goto "htdocs\xdb" directory where your "composer.json" file is and type 
|	
|	C:\xampp\htdocs\xdb>composer update
|
| 3. Right after that you can see one folder("vendor") and on file("composer.lock") took place in you working directory "htdocs\xdb"
|
| 4. Now to test whether this framwork working or not just write this code below to test.|
|
*/
 
class SimpleTest extends \PHPUnit_Framework_TestCase
{
     public function testSimple1()
     {
      $this->assertEquals(2, 1 + 2);
     }
     public function testSimple2()
     {
      $this->assertEquals(2, 1+1);
     }
}


/****OUTPUT******

PHPUnit 3.7.21 by Sebastian Bergmann.
Time: 0 seconds, Memory: 2.00Mb

There was 1 failure:

1) SimpleTest::testSimple1
Failed asserting that 3 matches expected 2.

C:\xampp\htdocs\xdb\index.php:35

FAILURES!
Tests: 2, Assertions: 2, Failures: 1.

****OUTPUT******/

/*
|--------------------------------------------------------------------------
| Notice.
|--------------------------------------------------------------------------
| Now if you want to do a unit test outside of your test folder, simple type in phpunit followed by relative path
| of your test file. In this case, I created a simple test named “OutsideSimpleTest” which I placed under “htdocs” folder.
| So the command will be 
|
| 	C:\xampp\htdocs\xdb>phpunit ../OutsideSimpleTest.php
|
*/
  
?>
