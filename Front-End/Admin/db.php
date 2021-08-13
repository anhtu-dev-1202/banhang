<?php

function executeQuery($sqlQuery, $fetchAll = true)
{
	$host = "127.0.0.1";
	$dbname = "project-1";
	$dbusername = "root";
	$dbpassword = "";
	try {
		$connect = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $dbusername, $dbpassword);
	} catch (Exception $ex) {
		$ex->getMessage();
	}
	// nạp câu truy vấn vào kết nối
	$stmt = $connect->prepare($sqlQuery);

	// thực thi câu truy vấn với csdl
	$stmt->execute();

	// thu thập kết quả trả về
	if ($fetchAll == true) {
		return $stmt->fetchAll();
	}
	return $stmt->fetch();
}
