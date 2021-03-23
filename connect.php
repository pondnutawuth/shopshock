
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

}

?>