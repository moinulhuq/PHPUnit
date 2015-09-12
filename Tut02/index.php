<?php
/*
|--------------------------------------------------------------------------
| PHPUnit testing with Sublime text 3
|--------------------------------------------------------------------------
|
| 1. Install "PHPUnit Support for Sublime Text 2" from Package Control. For this go to Preferences > Package Control. 
| 	 Select “Install Package”. Then search for "PHPUnit Support for Sublime Text 2” and click it to install.
|
| 2. Once this Package has installed then go to Preferences > Package Settings > PHPUnit > Settings-User and assign "path_to_phpunit"
|	 like below. Just copy and paste this code to that file(Settings-User).
|	
|	{
|	    "path_to_phpunit": "C:/xampp/htdocs/xdb/vendor/bin/PHPUnit"
|	}
| 
| 3. Here "C:/xampp/htdocs/xdb/vendor/bin/PHPUnit" means your installtion path of "PHPUnit", for mine 
|	 "C:/xampp/htdocs/xdb/vendor/" and "bin/PHPUnit" means under "bin" folder there is one file name "PHPUnit.bat"
|	 that is what we also need to mention in our "path_to_phpunit".
|
| 4. Your "phpunit.xml" will remain same like before.
|	
| 5. Now install another package "PHPUnit Snippets" from Package Control. For this go to Preferences > Package Control. 
|	 Select “Install Package”. Then search for "PHPUnit Snippets” and click it to install.
|
| 6. Once this Package has installed then create your "Test Class"(BaseballTest.php) to test "Your Class"(Baseball.php), 
|	 just type 
|
|		"phpunit-test"+"tab" > to create skeleton test method
|		"phpunit-testcase"+"tab" > to create skeleton of test class
|		"phpunit-test-with-data"+"tab" > to create skeleton test method with data provider
|
| 7. If every thing goes fine then it will create the test class skeleton automatically.
|
| 8. Once your "Test Class" is ready, just right click on "your class" and then select "Run Tests" to test, it will test 
|	 and give result under the text editor terminal. There is other options like 
|
|	"Open Test Class" > To open your created Test Class
|	"Open phpunit.xml" > To open your phpunit.xml file
|	"Run All Unit Tests" > To run all unit tests located in "phpunit.xml" > <directory suffix=".php">./Test/</directory>
|
*/
