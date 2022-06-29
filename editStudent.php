<?php
$serverName = "localhost";
$userName = "root";
$password = "";
$dbName = "QuanLySV";

$conn = new mysqli($serverName,$userName,$password,$dbName);
if($conn->connect_error) {
    die($conn->connect_error);
}
$sql_txt = "select * from students where id = ".$_GET["id"];
$result = $conn->query($sql_txt);
//var_dump($result);die();
$student = null;
if($result->num_rows>0) {
    while ($row = $result->fetch_assoc()) {
        $student = $row;
    }
}
if($student == null) {
    die("Student not found");
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Student</title>
    <style>
        .form_edit{
            width: 70%;
            margin: auto;
        }
    </style>
</head>
<body>
<form method="post" action="updateStudent.php?id=<?php echo $student["id"];?>" class="form_edit">
<!--    <div class="form-group">-->
<!--        <button class="btn btn-info" type="submit">Add</button>-->
<!--    </div>-->
    <div class="form-group">
        <label>Name</label>
        <input class="form-control" required type="text" value="<?php echo $student["studentName"];?>" name="studentName">
    </div>
    <div class="form-group">
        <label>Birth</label>
        <input class="form-control" required type="date" value="<?php echo $student["dateOfBirth"];?>" name="dateOfBirth">
    </div>
    <div class="form-group">
        <label for="exampleFormControlTextarea1">Address</label>
        <textarea class="form-control" required name="address"  rows="3">
            <?php echo $student["address"];?>
        </textarea>
    </div>
    <div class="form-group">
        <label>Email</label>
        <input class="form-control" required type="email" value="<?php echo $student["email"];?>" name="email">
    </div>
    <div class="form-group">
        <label>Phone</label>
        <input class="form-control" required type="tel" value="<?php echo $student["phoneNumber"];?>" name="phoneNumber">
    </div>
    <div class="form-group">
        <button class="btn btn-info" type="submit">Update</button>
    </div>
</form>
</body>
</html>