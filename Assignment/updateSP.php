<?php
$id = $_GET["id"];
//if(!$_POST["name"]){
//    header("location: editSP.php?id=".$id);
//}
$serverName = "localhost";
$userName = "root";
$password = "";
$dbName = "QuanLySP";

$conn = new mysqli($serverName, $userName, $password, $dbName);
if ($conn->connect_error) {
    die($conn->connect_error);
}
$sql_txt = "update products set productName=?,price=?,unit=?,quantity=?,description=?,status=? where id=?";
$stt = $conn->prepare($sql_txt);
$stt->bind_param("sisisi",$name,$price,$unit,$quantity,$description,$status);
//set params

$name = $_POST["productName"];
$price = $_POST["price"];
$unit = $_POST["unit"];
$quantity = $_POST["quantity"];
$description = $_POST["description"];
$status = $_POST["status"];
$sid = $id;
$stt->execute();
header("location: tableSP.php");
