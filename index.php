<?php
session_start();
var_dump($_SESSION["user"]);
$x=10;
$x= "Hello!";
$y = true;

echo $x."<br/>";

$list = [];
$list[] = 10;
$list[] = "Thương đây!";
$list[] = "chào T2108M";

//$list["name"] = "Nguyễn Văn An";
//
//$list["age"] = 19;

$sv = [
  "name" => "Nguyen Văn An",
  "age" => 19,
  "address" => "Số 8 Tôn Thất Thuyết"
];

for ($i=0; $i < count($list); $i++) {
    echo $list[$i]."<br/>";
}

foreach ($list as $item) {
    echo $item."<br/>";
}

foreach ($sv as $key=>$value) {
    echo  $key.": ".$value."<br/>";
}

function tinhTong($a,$b) {
    return $a+$b;
}
echo "<br/>"."Kết quả: ".tinhTong(6,10);