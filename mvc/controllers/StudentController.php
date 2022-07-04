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
        $studentObj = new Student();
        $student = $studentObj->findOne($_GET['id']);
        if (!$student) {
            // truong hop khong tim thay, sua duong dan thi tra ve list
            header("Location: ?page=student_list");
        }

        include_once "views/editStudent.php";
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
        $conn = Connector::createInstance();

        //truy vấn thêm một sv
        $sql_txt = "UPDATE Students SET studentName=?,dateOfBirth=?,address=?,email=?,phoneNumber=? WHERE id = ?";
        $stt = $conn->createStatement($sql_txt);

        //set params and excute
        $name = $_POST['studentName'];
        $birth = $_POST['dateOfBirth'];
        $address = $_POST['address'];
        $email = $_POST['email'];
        $phone = $_POST['phoneNumber'];

        //ID sẽ gán bằng ID được GET
        $id = $_GET['id'];

        $sID = $id; //bac cau qua ID

        $stt->bind_param("sssssi", $name,$birth,$address, $email, $phone, $sID);   //khai báo 4 biến giả định kiểu string (s), int(i)
        $stt->execute();

        //update xong thi dieu huong qua list
        header("Location: ?page=student_list");
    }
}