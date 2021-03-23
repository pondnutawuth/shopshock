
<?php
class database{
        public $dbConn = null;
 public function connect() //เชื่อมต่อฐานข้อมูล
 {
 define("host", "localhost");
 define("username", "root");
 define("pass", "");
 define("database", "shopshock");
 $this->dbConn = new mysqli(host, username, pass, database);
 if ($this->dbConn->connect_error) 
 die("Database Connection Error,Error No.:" .
 $this->dbConn->connect_errno . " | " . $this->dbConn->connect->connect_error);
 $this->dbConn->query("SET NAMES UTF8");
 }

 public function insertData($info) //เพิ่มข้อมูล
 {
     $insertQuery = "INSERT INTO `member`(`name`, `user`, `password`, `type`)  VALUES ('{$info['us_name']}','{$info['username']}',MD5('{$info['us_password']}'),'{$info['us_type']}' )";
     echo $insertQuery;
     $rsInsert = $this->dbConn->Query($insertQuery);
 }

}

?>