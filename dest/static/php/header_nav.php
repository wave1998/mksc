<?php
header("content-type:text/html;charset=utf8");
$title = $_POST["t"];
$con = mysqli_connect("localhost","root","root","mcshop");
mysqli_query($con,"set names utf8");
$res = mysqli_query($con,"select * from header_nav where title='{$title}'");
$arr = [];
while($row = mysqli_fetch_assoc($res)){
    $arr[] = $row;
};
echo json_encode($arr);