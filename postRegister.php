<?php
//session_start();
//$user = [
//     "FullName: "=>$_POST["fullName"],
//     "Email: "=>$_POST["email"],
//     "Password: "=>$_POST["password"],
//];
//$_SESSION["user"] = $user;
//echo "DONE";
if($_POST["email"]){
    header("location: register.php");
}
$serverName = "localhost";
$userName = "root";
$password = "";
$dbName = "QuanLySV";

$conn = new mysqli($serverName, $userName, $password, $dbName);
if ($conn->connect_error) {
    die($conn->connect_error);
}
$sql_txt = "insert into Students(studentName,dateOfBirth,address,email,phoneNumber) values (?,?,?,?,?)";
$stt = $conn->prepare($sql_txt);
$stt->bind_param("sssss",$name,$birth,$address,$email,$phone);

//set params

$name = $_POST["studentName"];
$birth = $_POST["dateOfBirth"];
$address = $_POST["address"];
$email = $_POST["email"];
$phone = $_POST["phoneNumber"];
$stt->execute();
header("location: databaseDemo.php");