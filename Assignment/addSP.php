<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h2 style="text-align: center">Thêm sản phẩm</h2>
<form method="post" action="postSP.php" style="width: 50%; margin:20px auto">
    <div class="form-group">
        <label>Name</label>
        <input class="form-control" required type="text" name="name">
    </div>
    <div class="form-group">
        <label>Price</label>
        <input class="form-control" required type="number" name="price">
    </div>
    <div class="form-group">
        <label>Unit</label>
        <input class="form-control" required type="text" name="unit">
    </div>
    <div class="form-group">
        <label>Quantity</label>
        <input class="form-control" required type="number" name="quantity">
    </div>
    <div class="form-group">
        <label for="exampleFormControlTextarea1">Description</label>
        <textarea class="form-control" required name="description" rows="3"></textarea>
    </div>
    <div class="form-group">
        <label>Status</label>
        <input class="form-control" required type="text" name="status">
    </div>
    <div class="form-group">
        <button class="btn btn-info" type="submit">Register</button>
    </div>
</form>
</body>
</html>

