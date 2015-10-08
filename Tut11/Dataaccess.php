<?php
/*
|--------------------------------------------------------------------------
| PHPUnit dbunit
|--------------------------------------------------------------------------
| 01. To setup phpunit "dbunit", edit your "composer.json" and add this line "phpunit/dbunit": ">=1.2" 
|     to your composer. After that your "composer.json" should be like this
| 
| {
|     "require"     : { "Mockery/Mockery": ">=0.7.2" },
|     "require-dev" : { "phpunit/phpunit": "*", "phpunit/dbunit": ">=1.2" },
|     "autoload"	  : {
|         			   		"psr-0": { "xdb": "" }
|     					}
| }
| 
| 02. Right after that run this command "composer update" to your cmd prompt.
| 	  "C:\xampp\htdocs\xdb>composer update"
| 
| 03. Now you are ready to test your database with you phpunit.
| 
| 04. After all of this create one database name it "studentdb" and then make one table under it name it "studenttbl".
| 
| To create Database table...
|
| DROP TABLE IF EXISTS `studenttbl`;
| CREATE TABLE `studenttbl` (
|   `id` int(11) NOT NULL AUTO_INCREMENT,
|   `name` varchar(12) DEFAULT NULL,
|   `major` varchar(20) DEFAULT NULL,
|   `grade` varchar(3) DEFAULT NULL,
|   PRIMARY KEY (`id`)
| ) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
| 
| To Insert data into table...
| 
| INSERT INTO `studenttbl` VALUES ('1', 'Moin', 'Science', 'A+');
| INSERT INTO `studenttbl` VALUES ('2', 'Tanim', 'Commerce', 'B+');
| INSERT INTO `studenttbl` VALUES ('3', 'Shajib', 'Arts', 'C+');
| 
| 05. To make a connection with Database you need to write php code through which you can insert, update and delete data from your DB
|	  like below.
| 
*/

class Dataaccess{
	
	protected $db = null;

	public function __construct(){

		try {
			$this->db = new PDO("mysql:host=localhost;dbname=studentdb", "root", "");
			$this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		} 
			catch (PDOException $e) {
				echo "Error: " . $e->getMessage();		
		}		

	}

	public function SelectStudenttbl($id){

			$name=array();

			$result = $this->db->prepare("select name from studenttbl where studenttbl.id=?");
			$result->execute(array($id));
			$rows = $result->fetchAll(PDO::FETCH_ASSOC);

			if(!empty($rows)){
				foreach ($rows as $row){
					array_push($name, $row['name']);
				}				
			}

			return $name;
	}

	public function InsertStudenttbl($name,$major,$grade){

			$result = $this->db->prepare("insert into studenttbl(name,major,grade) values(?, ?, ?)");			
			return $result->execute(array($name,$major,$grade));
	}

	public function UpdateStudenttbl($name,$major,$id){

			$result = $this->db->prepare("update studenttbl set name=?, major=? where id=?");
			return $result->execute(array($name,$major,$id));
	}

	public function DeleteStudenttbl($id){

			$result = $this->db->prepare("delete from studenttbl where studenttbl.id=?");
			return $result->execute(array($id));
	}
}

?>
