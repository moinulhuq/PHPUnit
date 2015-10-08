<?php
/*
|--------------------------------------------------------------------------
| PHPUnit dbunit
|--------------------------------------------------------------------------
| 01. To use "dbunit" you need to extend "PHPUnit_Extensions_Database_TestCase"
| 
| 02. And another essential thing is you need to implement two methods "getConnection()" and "getDataSet()".
| 
| 03. getConnection() will contain Mysql Database PDO connection and getDataSet() will load XML file that you will
|     create from your Database table.
|
| 04. As we don't over-write our main database that's why we will use database fixtures(XML).
| 
| 04. To create Database Table -> XML file write down the following code into your cmd prompt, for mine 
|     "C:\xampp\mysql\bin>mysqldump --xml -t -u root -p studentdb > C:\xampp\htdocs\xdb\Test\fixtures\studenttbl.xml"
|  
|  for help "mysqldump --opt -u [uname] -p[pass] [dbname] > [backupfile.sql]"
| 
|            mysqldump --xml -t -u root -p studentdb > C:\studenttbl.xml
| 
| 05. Dbunit use database fixtures - DataSets and DataTables 
| 
|     DataSets
|             ->Set of tables.
|             ->Can be in a variety of formats YAML, XML (two flavors), CSV, PHP arrays.
|     DataTables
|             ->Individual table.
| 
| 06. After that in our "Test" folder we will create another folder name "fixtures" and will put "studenttbl.xml" dataset.
|     "C:\xampp\htdocs\xdb\Test\fixtures\studenttbl.xml"
| 
| 07. Then just run the following code to test.
| 
*/

require_once(realpath(__DIR__.'/../Dataaccess.php'));

class dataaccessTest extends \PHPUnit_Extensions_Database_TestCase
{
    public function setUp()
    {
        $this->getConnection(); 
    }
    
    public function tearDown()
    {
        
    }

    public function getConnection()
    {
		try {
				$pdo = new PDO("mysql:host=localhost;dbname=studentdb", "root", "");
				$con = $this->createDefaultDBConnection($pdo, "studentdb");
		}   
			catch (PDOException $e) {
				echo "Error: " . $e->getMessage();		
		}

		return $con;
    }

    public function getDataSet(){
    	return $this->createMySQLXMLDataSet(dirname(__FILE__) . '/fixtures/studenttbl.xml');    	
    }

    public function testDataBaseConnection()
    {
        //Fetching table from Database
        $this->getConnection()->createDataSet(array('studenttbl'));        
        $queryTable = $this->getConnection()->createQueryTable('studenttbl', 'SELECT * FROM studenttbl');

        //Fetching table from XML
        $expectedTable = $this->getDataSet()->getTable('studenttbl');

        //Comparing database table matches with XML
        $this->assertTablesEqual($expectedTable, $queryTable);
    }

    public function testSelectStudenttbl()
    {
        $Dataaccess = new Dataaccess();
        $name = $Dataaccess->SelectStudenttbl(1);
        $this->assertEquals(array("Moin"), $name);
    }

    public function testInsertStudenttbl()
    {
        $Dataaccess = new Dataaccess();
        $result = $Dataaccess->InsertStudenttbl("Rakesh","Science","D+");

        $this->assertEquals(true, $result);
    }

    public function testUpdateStudenttbl()
    {
        $Dataaccess = new Dataaccess();
        $result = $Dataaccess->UpdateStudenttbl("Robin","Arts",4);
        
        $this->assertEquals(true, $result);
    }

    public function testDeleteStudenttbl()
    {
        $Dataaccess = new Dataaccess();
        $result = $Dataaccess->DeleteStudenttbl(4);

        $this->assertEquals(true, $result);
    }

}

?>
