<?php
require_once '../db.php';
include '../const.php';
$id = $_GET['id'];
$sql = "delete from category where id = $id";
// nạp câu truy vấn vào kết nối
executeQuery($sql);
header('location: '.DOMAIN.'Admin/category.php');
