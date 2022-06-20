<?php
session_start();
include_once('bd_conect.php');
header('Acess-Control-Allow-Origin: *');
header('Content-Type: application/json');
date_default_timezone_set('America/Sao_Paulo');
$nome = $_SESSION['nome'];

$id = $_SESSION['id'];
if (isset($_POST['comentario'])){
    $comentario = $_POST['comentario'];
//$pdo = new PDO('mysql:host=localhost; dbname=bf_test;', 'root', '');



$dia = date('d');
$mes = date('m');
$ano = date('Y');

$hora = date('H');
$minuto = date('i'); 

$result = array();


$stmt = $pdo->query('INSERT INTO chat1 (id_user, nome, mensagem, dia, mes, ano, hora, minuto) VALUES ("'. $id .'", "'. $nome.'", "'. $comentario .'", "'. $dia .'",  "'. $mes .'", "'. $ano .'", "'. $hora .'", "'. $minuto .'")');

//date('d/m/Y H:i');
}


$start = isset($_GET['start']) ? intval($_GET['start']) : 0;
$item = $pdo->query("SELECT * FROM chat1 WHERE id >" . $start);

while ($row = $item->fetch_assoc()){
    $result['items'][] = $row;
}


$pdo->close();



//if ($stmt->rowCount() >= 1) {
    echo json_encode($result);
//} else {
    //echo json_encode('Falha ao salvar comentário');
//}




?>