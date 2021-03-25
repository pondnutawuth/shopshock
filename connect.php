
<?php
class database{
        public $dbConn = null;
 public function connect() //เชื่อมต่อฐานข้อมูล
 {
 define("host", "localhost");
 define("username", "root");
 define("pass", "12345678");
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
 public function show_information() //แสดงข้อมูลทั้งหมดใน table
 {
     $sql = "SELECT * FROM `product`";
     $result = $this->dbConn->query($sql);
     echo "<table border='1'>";
     $counter = 0;
     while ($row = $result->fetch_assoc()) {
         if ($counter == 0) {
             echo "<tr>";
             foreach ($row as $key => $value) {
                 echo "<th>{$key}</th>";
             }
            $counter++;
         }
         echo "<tr>";
         foreach ($row as $key => $value) {
             echo "<td>{$value}</td>";
         }
         echo "</tr>";
     }
     echo "</table>";
 }
}

?>