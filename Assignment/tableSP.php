<?php
$serverName = "localhost";
$userName = "root";
$password = "";
$dbName = "QuanLySP";

$conn = new mysqli($serverName,$userName,$password,$dbName);
if($conn->connect_error) {
    die($conn->connect_error);
}
$sql_txt = "select * from products";
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
            <th scope="col">Price</th>
            <th scope="col">Unit</th>
            <th scope="col">Quantity</th>
            <th scope="col">Description</th>
            <th scope="col">Status</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($list as $item) :?>
            <tr>
                <td><?php echo  $item["productName"] ; ?></td>
                <td><?php echo  $item["price"]; ?></td>
                <td><?php echo  $item["unit"]; ?></td>
                <td><?php echo  $item["quantity"]; ?></td>
                <td><?php echo $item["description"]; ?></td>
                <td><?php echo $item["status"]; ?></td>
                <td>
                    <a class="btn btn-info" href="editSP.php?id=<?php echo $item["id"]; ?>">Edit </a>
                </td>
                <td>
                    <a class="btn btn-danger" onclick="return confirm('Are you sure?');" href="deleteSP.php?id= <?php echo $item["id"]; ?>">Delete </a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>
</body>
</html>

