<?php
include("bd_conect.php");
session_start();
$id = $_SESSION['id'];
$sql = $pdo->query("SELECT * FROM chat1");
foreach ($sql->fetchAll() as $key) {
	if ($key['id'] == $id) {
		$classe = "userInput";
	} else {
		$classe = "bot__output";
	}
	$nome = $key['nome'];
	$hora = $key['hora'];
	$menssagem = $key['mensagem'];
	$minuto = $key['minuto'];

	echo "<li class=' $classe '> <p class='author'> $nome </p> $menssagem <time> $hora : $minuto </time></li>";
}



?>