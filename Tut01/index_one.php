<?php
/*
|--------------------------------------------------------------------------
| PHPUnit Batch Files test.
|--------------------------------------------------------------------------
|
| 1. First need to define your test suite configuration in "phpunit.xml" file and place it in your working directory "htdocs\xdb".
|
|	<?xml version="1.0" encoding="UTF-8"?>
|		<phpunit colors="true" bootstrap="vendor/autoload.php">
|			<testsuites>
|				<testsuite name="Application Test Suite">
|					<directory>./Test/</directory>
|				</testsuite>
|			</testsuites>
|	</phpunit>
|
| 2. "<directory>./Test/</directory>" simply tells PHPUnit where your test will be located, for mine I specified that  
|    “xdb/Test" folder will contain all the test files. By default, anything in that folder “xdb/Test" that has the suffix 
|	 “test” in the file name, will be run as a test.
|
| 3. Then in "cmd" goto "htdocs\xdb" directory where your "phpunit.xml" file is located and type
|
|	C:\xampp\htdocs\xdb>phpunit
|
| 4. It will test and give result according to your test result.
|
| 4. But if you have a different naming convention like "Simple1.UnitTest.php" then you need to edit "phpunit.xml" like this
|
|	<?xml version="1.0" encoding="UTF-8"?>
|		<phpunit colors="true" bootstrap="vendor/autoload.php">
|			<testsuites>
|				<testsuite name="Application Test Suite">
|					<directory suffix=".UnitTest.php">./Test/</directory>
|				</testsuite>
|			</testsuites>
|	</phpunit>
|
| 4. Then to verify, I have created 2 test files under "htdocs\xdb\Test" folder (Simple1Test.UnitTest.php and Simple2Test.UnitTest.php) 
|	 both returning true assertions.
|
*/
 
/*
|--------------------------------------------------------------------------
| Simple1Test.UnitTest.php
|--------------------------------------------------------------------------
*/

class Simple1Test extends \PHPUnit_Framework_TestCase
{
     public function testSimple()
     {
          $this->assertEquals(2, 1 + 1);
     }
 
}

/*
|--------------------------------------------------------------------------
| Simple2Test.UnitTest.php
|--------------------------------------------------------------------------
*/

class Simple2Test extends \PHPUnit_Framework_TestCase
{
     public function testSimple()
     {
          $this->assertEquals(2, 3 - 1);
     }
 
}

/****OUTPUT******
PHPUnit 4.8.6 by Sebastian Bergmann and contributors.

Time: 4.09 seconds, Memory: 3.50Mb OK (2 tests, 2 assertions)
****OUTPUT******/

?>
