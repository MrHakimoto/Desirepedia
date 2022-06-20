<?php
/*
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


*/
?>
<?php
session_start();
include_once('bd_conect.php');
header('Content-Type: application/json');


$stmt = $pdo->prepare('SELECT * FROM chat1');
$stmt->execute();

if ($stmt->rowCount() >= 1) {
    echo json_encode($stmt->fetchAll(PDO::FETCH_ASSOC));
} else {
    echo json_encode('Falha ao achar algo');
}




?>