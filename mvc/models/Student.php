<?php
include "IModel.php";
include "helpers/Connector.php";

class Student implements IModel
{
    protected $_table = "Students";
    protected $_primaryKey = "id";

    public $id;
    public $studentName;
    public $dateOfBirth;
    public $address;
    public $email;
    public $phoneNumber;

    /**
     * @return array
     */
    function all()
    {
        $conn = Connector::createInstance();
        $sql_txt = "select * from ".$this->_table;
        $result = $conn->query($sql_txt);
        $list = [];
        while ($row = $result->fetch_assoc()){
            $s = new Student();
            $s->id = $row["id"];
            $s->studentName = $row["studentName"];
            $s->dateOfBirth = $row["dateOfBirth"];
            $s->address = $row["address"];
            $s->email = $row["email"];
            $s->phoneNumber = $row["phoneNumber"];
            $list[] = $s;
        }
        return $list;
    }
    function findOne($id)
    {
        //connect db
        $conn = Connector::createInstance();
        //truy vấn
        $sql_txt = "SELECT * FROM Students WHERE ID = ".$id;
        $result = $conn->query($sql_txt);

        $student = null;
        if($result->num_rows > 0){
            while ($row = $result->fetch_assoc()){
                $student = new self();
                $student->id = $row['id'];
                $student->studentName = $row['studentName'];
                $student->dateOfBirth = $row['dateOfBirth'];
                $student->address = $row['address'];
                $student->email = $row['email'];
                $student->phoneNumber = $row['phoneNumber'];
            }
        }

        return $student;
    }

    function save()
    {
        // TODO: Implement save() method.
    }

    function update()
    {
        // TODO: Implement update() method.
    }

    function delete()
    {
        // TODO: Implement delete() method.
    }

    function find($id)
    {
        // TODO: Implement find() method.
    }
}