<?php
/*
|--------------------------------------------------------------------------
| PHPUnit code coverage
|--------------------------------------------------------------------------
| 01. To setup "PHPUnit code coverage" with your codebase, edit your "phpunit.xml" and add some line so that finally it will look like this
| 
| <?xml version="1.0" encoding="UTF-8"?>
| <phpunit colors="true" bootstrap="vendor/autoload.php">
| 
|     <testsuites>
|         <testsuite name="Application Test Suite">            
|         	<directory suffix=".php">./Test/</directory>
|         </testsuite>
|     </testsuites>
|
|     <listeners>
| 	   		<listener class="\Mockery\Adapter\Phpunit\TestListener" file="vendor/mockery/mockery/library/Mockery/Adapter/Phpunit/TestListener.php">
|        	</listener>
|     </listeners>	
| 
|	<filter> 
| 	  <whitelist processUncoveredFilesFromWhitelist="true">
| 	    <directory suffix=".php">./Test/</directory>
| 	  </whitelist>
| 	</filter>
| 
| 	<logging>
| 	    <log type="coverage-html" target="coverage" charset="UTF-8" yui="true" highlight="false" lowUpperBound="35" highLowerBound="70" showUncoveredFiles="true"/>
|	</logging> 
| </phpunit>
| 
| Here we add "<filter>..</filter>" and "<logging>...</logging>" with our "phpunit.xml".
| 
| 02. After that run "phpunit" cmd in your project root directory.
|     "C:\xampp\htdocs\xdb>phpunit"
|
| 03. Then you will get "coverage" directory in your project root folder where you can click on "index.html" to see report.
|
*/

class CalcPro{
	public $result;
	public function __construct(){			
			$this->result = 0;
	}
	public function AvgCal($a, $b){
			if($b!=0 and is_numeric($b) and $a!=0 and is_numeric($a))
				$this->result = (int)$a/(int)$b;
			else
				$this->result = "input can not be Zero or String";
			return $this->result;
	}
	public function SumCal($a, $b){
			if($b!=0 and is_numeric($b) and $a!=0 and is_numeric($a))
				$this->result = (int)$a+(int)$b;
			else
				$this->result = "input can not be Zero or String";
			return $this->result;
	}
}
?>
