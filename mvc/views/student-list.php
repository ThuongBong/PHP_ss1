<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Student List</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-10">
            <div class="mb-3">
                <a href="?page=add-student" class="btn btn-primary">Add Student</a>
            </div>
            <table class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Birthday</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($list as $item):?>
                    <tr>
                        <td><?php echo $item->id ?></td>
                        <td><?php echo $item->studentName ?></td>
                        <td><?php echo $item->email ?></td>
                        <td><?php echo $item->phoneNumber ?></td>
                        <td><?php echo $item->address ?></td>
                        <td><?php echo $item->dateOfBirth ?></td>
                        <td>
                            <a class="btn btn-primary" href="?page=edit-student&id=<?php echo $item->id;?>">Edit</a>
                            <a class="btn btn-danger" onclick="return confirm('Are you sure?');" href="?page=delete-student&id=<?php echo $item->id;?>">Delete</a>
                        </td>
                    </tr>
                <?php endforeach;?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>