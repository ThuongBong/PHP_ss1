<?php
include "controllers/StudentController.php";

$routing = $_GET["page"];
switch ($routing){
    case "student_list":{
        $ctr = new StudentController();
        $ctr->getStudents();
        break;
    }
    case "add-student":{
        $ctr = new StudentController();
        $ctr->addStudent();
        break;
    }
    case "post-student":{
        $ctr = new StudentController();
        $ctr->postStudent();
        break;
    }
    case "edit-student":{
        $ctr = new StudentController();
        $ctr->editStudent();
        break;
    }
    case "delete-student":{
        $ctr = new StudentController();
        $ctr->deleteStudent();
        break;
    }
    case "update-student":{
        $ctr = new StudentController();
        $ctr->updateStudent();
        break;
    }
    default: {
        die("404 not found");
    }
}