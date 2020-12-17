<?php
	session_start();
	
	$servername = "localhost";
	$username = "root";
	$password = "";
	$database = "testdb";

	// Устанавливаем соединение
	$conn = mysqli_connect($servername, $username, $password, $database);
	// Проверяем соединение
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
	
	if (count($_POST) > 0) {
		//potential sql injection, 
		$res = mysqli_query ($conn, "select * from users where login=".$_POST['login']." and password=".$_POST['password'].";");
		$row = mysqli_fetch_array($res);
		if (is_array($row)) {
			$_SESSION['id'] = $row['id'];
			$_SESSION['login'] = $row['login'];
			$_SESSION['id_role'] = $row['id_role'];
		} else {
		echo 'Invalid password';
		}
}
