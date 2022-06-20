<?php
	// try {
	// 	$dns = "mysql:dbname=chatsimples;host=localhost";
	// 	$user = "root";
	// 	$pass = "";
	// 	$options = array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC);
	// 	$pdo = new PDO($dns, $user, $pass, $options);
	// }catch (PDOException $e){
	// 	echo "Falha: ". $e->getMessage();
	// }
		$pdo = new mysqli("localhost", "root", "", "chatsimples");
		$pdo->set_charset("utf8");


?>