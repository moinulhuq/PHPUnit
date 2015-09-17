<?php

/*
|--------------------------------------------------------------------------
| Annotation with depends annotation.
|--------------------------------------------------------------------------
| If either "testFoo" or "testBar" fail "testBaz" will be skipped. Multiple return values are passed in to testBaz.
|
*/

class SimpleDepenAnnoTest extends PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        // your code here
    }

    public function tearDown()
    {
        // your code here
    }

	function testFoo() {
	  // Run tests.
	  return 'foo';
	}

	function testBar() {
	  // Run tests.
	  return 'bar';
	}

	/**
	 * @depends testFoo
	 * @depends testBar
	 */
	function testBaz($foo, $bar) {
	  $this->assertEquals('foobar', $foo . $bar);
	}    

}

?>
