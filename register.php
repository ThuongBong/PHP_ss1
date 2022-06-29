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
<form method="post" action="postRegister.php" style="width: 50%; margin:20px auto">
    <div class="form-group">
        <label>Name</label>
        <input class="form-control" required type="text" name="studentName">
    </div>
    <div class="form-group">
        <label>Birth</label>
        <input class="form-control" required type="date" name="dateOfBirth">
    </div>
    <div class="form-group">
        <label for="exampleFormControlTextarea1">Address</label>
        <textarea class="form-control" required name="address" rows="3"></textarea>
    </div>
    <div class="form-group">
        <label>Email</label>
        <input class="form-control" required type="email" name="email">
    </div>
    <div class="form-group">
        <label>Phone</label>
        <input class="form-control" required type="tel" name="phoneNumber">
    </div>
    <div class="form-group">
        <button class="btn btn-info" type="submit">Register</button>
    </div>
</form>
</body>
</html>
