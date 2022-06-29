<?php
$serverName = "localhost";
$userName = "root";
$password = "";
$dbName = "QuanLySV";

$conn = new mysqli($serverName,$userName,$password,$dbName);
if($conn->connect_error) {
    die($conn->connect_error);
}
$sql_txt = "delete from Students where id = ".$_GET["id"];
$result = $conn->query($sql_txt);
//var_dump($result);die();
//$student = null;
//if($result->num_rows>0) {
//    while ($row = $result->fetch_assoc()) {
//        $student = $row;
//    }
//}
//if($student == null) {
//    die("Student not found");
header("Location: databaseDemo.php");

