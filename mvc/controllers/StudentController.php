<?php

include "models/Student.php";

class StudentController
{
    public function getStudents(){
        $studentObj = new Student();
        $list = $studentObj->all();
        include_once "views/student-list.php";
    }

    public function addStudent(){
        include_once "views/addStudent.php";
    }

    public function postStudent(){
        $conn = Connector::createInstance();
        $sql_txt = "insert into Students(studentName,dateOfBirth,address,email,phoneNumber) values(?,?,?,?,?);";
        $stt = $conn->createStatement($sql_txt);
        // set params and execute
        $name = $_POST["studentName"];
        $birth = $_POST["dateOfBirth"];
        $address = $_POST["address"];
        $email = $_POST["email"];
        $phone = $_POST["phoneNumber"];
        $stt->bind_param("sssss",$name,$birth,$address,$email,$phone);

        $stt->execute();

        header("Location: ?page=student_list");
    }

    public function editStudent(){
//        $conn = Connector::createInstance();
//        $sql_txt = "select * from students where id = ".$_GET["id"];
//        $result = $conn->query($sql_txt);
//        //var_dump($result);die();
//        $student = null;
//        if($result->num_rows>0) {
//            while ($row = $result->fetch_assoc()) {
//                $student = $row;
//            }
//        }
//        if($student == null) {
//            die("Student not found");
//        }
//        include_once "views/editStudent.php";
    }

    public function deleteStudent() {
        $conn = Connector::createInstance();
        if($conn->connect_error) {
            die($conn->connect_error);
        }
        $sql_txt = "delete from Students where id = ".$_GET["id"];
        $result = $conn->query($sql_txt);
        header("Location: ?page=student_list");
    }

    public function updateStudent() {
        $id = $_GET["id"];
        if(!$_POST["email"]) {
            header("location: ?page=edit-student &id=". $id);
        }
        $conn = Connector::createInstance();
        $sql_txt = "update Students set studentName=?,dateOfBirth=?,address=?,email=?,phoneNumber=? where id=?";
        $stt = $conn->prepare($sql_txt);
        $name = $_POST["studentName"];
        $birth = $_POST["dateOfBirth"];
        $address = $_POST["address"];
        $email = $_POST["email"];
        $phone = $_POST["phoneNumber"];
        $sid = $id;
        $stt->bind_param("sssssi",$name,$birth,$address,$email,$phone,$sid);
        $stt->execute();
        header("location: ?page=student_list.php");
    }
}