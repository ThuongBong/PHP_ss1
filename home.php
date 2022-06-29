<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <style type="text/css">
        .list tr:nth-child(n+1)
        {
            background: #333;
        }
    </style>
</head>
<body>
    <?php
        $className = "T2108M";
        $listSv = [
                "Lê Đức Duy",
                "Khổng Thị Thương",
                "Nguyễn Nhật Anh",
                "Nguyễn Xuân Thảo"
        ];
        $t2108m = [
                [
                        "name"=> "Khổng Thị Thương",
                        "age" => 21,
                        "address" => "Mỹ Đình, HN"
                ],
                [
                    "name"=> "Nguyễn Nhật Anh",
                    "age" => 20,
                    "address" => "Cầu Giấy, HN"
                ],
            [
                "name"=> "Khổng Thị Thương",
                "age" => 21,
                "address" => "Mỹ Đình, HN"
            ],
            [
                "name"=> "Khổng Thị Thương",
                "age" => 21,
                "address" => "Mỹ Đình, HN"
            ]
        ];
    session_start();
    ?>
    <h1 style="text-align: center">Danh sách sinh viên <?php echo $className; ?></h1>
<!--    <ul>-->
<!--        --><?php //foreach ($t2108m as $sv): ?>
<!--            <li>--><?php //echo $sv["name"]."<br/>".$sv["age"]."<br/>".$sv["address"]; ?><!--</li>-->
<!--        --><?php //endforeach; ?>
<!--    </ul>-->
    <div class="table-responsive-sm" style="width: 70%;  margin: auto">
    <table class="table table-hover table-striped list">
        <thead>
            <tr style="background-color: silver">
<!--                <th scope="col">STT</th>-->
                <th scope="col">Name</th>
                <th scope="col">Age</th>
                <th scope="col">Address</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($_SESSION["user"] as $user) :?>
                <tr>
<!--                    <td>--><?php //for ($i=0; $i<count($sv);$i++); ?><!--</td>-->
                    <td><?php echo $user.$_POST["fullName"]; ?></td>
                    <td><?php echo $user.$_POST["email"]; ?></td>
                    <td><?php echo $user.$_POST["password"]; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    </div>
</body>
</html>