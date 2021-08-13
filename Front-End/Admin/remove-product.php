<?php
require_once '../db.php';
include '../const.php';
$id = $_GET['id'];
$sql = "delete from product where id = $id";
// nạp câu truy vấn vào kết nối
executeQuery($sql);
header('location: '.DOMAIN.'Admin/products.php');
