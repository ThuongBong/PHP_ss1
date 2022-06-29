<?php
//session_start();
//$user = [
//     "FullName: "=>$_POST["fullName"],
//     "Email: "=>$_POST["email"],
//     "Password: "=>$_POST["password"],
//];
//$_SESSION["user"] = $user;
//echo "DONE";
$id = $_GET["id"];
if(!$_POST["email"]){
    header("location: editStudent.php?id=".$id);
}
$serverName = "localhost";
$userName = "root";
$password = "";
$dbName = "QuanLySV";

$conn = new mysqli($serverName, $userName, $password, $dbName);
if ($conn->connect_error) {
    die($conn->connect_error);
}
$sql_txt = "update Students set studentName=?,dateOfBirth=?,address=?,email=?,phoneNumber=? where id=?";
$stt = $conn->prepare($sql_txt);
$stt->bind_param("sssssi",$name,$birth,$address,$email,$phone,$sid);

//set params

$name = $_POST["studentName"];
$birth = $_POST["dateOfBirth"];
$address = $_POST["address"];
$email = $_POST["email"];
$phone = $_POST["phoneNumber"];
$sid = $id;
$stt->execute();
header("location: databaseDemo.php");