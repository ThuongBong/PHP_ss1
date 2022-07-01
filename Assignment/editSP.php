<?php
$serverName = "localhost";
$userName = "root";
$password = "";
$dbName = "QuanLySP";

$conn = new mysqli($serverName,$userName,$password,$dbName);
if($conn->connect_error) {
    die($conn->connect_error);
}
$sql_txt = "select * from products where id =".$_GET["id"];
$result = $conn->query($sql_txt);
//var_dump($result);die();
$sp = null;
if($result->num_rows>0) {
    while ($row = $result->fetch_assoc()) {
        $sp = $row;
    }
}
if($sp == null) {
    die("product not found");
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
<h2 style="text-align: center">Edit</h2>
<form method="post" action="updateSP.php?id=<?php echo $sp["id"];?>" class="form_edit">
    <!--    <div class="form-group">-->
    <!--        <button class="btn btn-info" type="submit">Add</button>-->
    <!--    </div>-->
    <div class="form-group">
        <label>Name</label>
        <input class="form-control" required type="text" value="<?php echo $sp["productName"];?>" name="productName">
    </div>
    <div class="form-group">
        <label>Price</label>
        <input class="form-control" required type="number" value="<?php echo $sp["price"];?>" name="price">
    </div>
    <div class="form-group">
        <label>Unit</label>
        <input class="form-control" required type="text" value="<?php echo $sp["unit"];?>" name="unit">
    </div>
    <div class="form-group">
        <label>Quantity</label>
        <input class="form-control" required type="number" value="<?php echo $sp["quantity"];?>" name="quantity">
    </div>
    <div class="form-group">
        <label for="exampleFormControlTextarea1">Description</label>
        <textarea
                class="form-control" required name="description" rows="3">
                <?php echo $sp["description"];?>
        </textarea>
    </div>
    <div class="form-group">
        <label>Status</label>
        <input class="form-control" required type="text" value="<?php echo $sp["status"];?>" name="status">
    </div>
    <div class="form-group">
        <button class="btn btn-info" type="submit">Update</button>
    </div>
</form>
</body>
</html>

