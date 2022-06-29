<?php
$serverName = "localhost";
$userName = "root";
$password = "";
$dbName = "QuanLySV";

$conn = new mysqli($serverName,$userName,$password,$dbName);
if($conn->connect_error) {
    die($conn->connect_error);
}
$sql_txt = "select * from Students";
$result = $conn->query($sql_txt);
//var_dump($result);die();
$list = [];
if($result->num_rows>0) {
    while ($row = $result->fetch_assoc()) {
       $list[] = $row;
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>ADD</title>
    <style>
        .list tr:nth-child(2n-1) {
            background-color: darkorange;
        }
    </style>
</head>
<body>
<div class="table-responsive-sm" style="width: 70%;  margin: auto">
    <table class="table table-hover table-striped list">
        <thead>
        <tr style="background-color: silver">
            <!--                <th scope="col">STT</th>-->
            <th scope="col">Name</th>
            <th scope="col">Birth</th>
            <th scope="col">Address</th>
            <th scope="col">Email</th>
            <th scope="col">Phone</th>
            <th scope="col"></th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($list as $user) :?>
            <tr>
                <td><?php echo  $user["studentName"] ; ?></td>
                <td><?php echo  $user["dateOfBirth"]; ?></td>
                <td><?php echo  $user["address"]; ?></td>
                <td><?php echo  $user["email"]; ?></td>
                <td><?php echo $user["phoneNumber"]; ?></td>

                <td>
                    <a class="btn btn-info" href="editStudent.php?id=<?php echo $user["id"]; ?>">Edit </a>
                    <a class="btn btn-danger" onclick="return confirm('Are you sure?');" href="deleteStudent.php?id= <?php echo $user["id"]; ?>">Delete </a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>
</body>
</html>
