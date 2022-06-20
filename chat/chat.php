<?php
session_start();
$id = $_SESSION['id'];
include("bd_conect.php");
$sql = $pdo->query("SELECT * FROM chat1");
foreach ($sql->fetchAll() as $key) {
	 

	
	if ($key['id'] == $id) {
		$classe = "userInput";
	} else {
		$classe = "bot__output";
	}
		echo "<script> $('.chatlist').prepend('<li class='". $classe . "'> <p class='author'>". $key['nome'] . "</p>" . $key['mensagem'] . " <time>" . $key['hora'] .":". $key['minuto'] . "</time></li>'); </script>";
		
	echo "<h3>".$key['nome']."</h3>";
	echo "<h5>".$key['mensagem']."</h5>";
}



?>

					<li class="userInput"> <p class="author">Jão</p> Fala <time>20:18</time></li>