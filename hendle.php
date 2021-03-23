<?php
include_once("connect.php");
$mycon = new Database();
$mycon->connect();
if (isset($_POST['insert_username'])) { //เพิ่มข้อมูล เอาข้อมูลเก็บใน array data
    $data['name'] = $_POST['us_name'];
    $data['username'] = $_POST['username'];
    $data['password'] = $_POST['us_password'];
    $data['type'] = $_POST['us_type'];
    $mycon->insertData($data); //ส่งตัวแปร data ไป
    header("location: login.php");
}