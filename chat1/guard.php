<?php
session_start();
include_once('bd_conect.php');
header('Content-Type: application/json');

$nome = $_SESSION['nome'];
$comentario = $_POST['comentario'];
$id = $_SESSION['id'];

//$pdo = new PDO('mysql:host=localhost; dbname=bf_test;', 'root', '');



$dia = date('d');
$mes = date('m');
$ano = date('Y');

$hora = date('H');
$minuto = date('i'); 


$stmt = $pdo->prepare('INSERT INTO chat1 (id_user, nome, mensagem, dia, mes, ano, hora, minuto) VALUES (:vs, :na, :co, :dd, :mm, :aa, :hr, :mi)');
$stmt->bindValue(':na', $nome);
$stmt->bindValue(':co', $comentario);
$stmt->bindValue(':vs', $id);

$stmt->bindValue(':dd', $dia);
$stmt->bindValue(':mm', $mes);
$stmt->bindValue(':aa', $ano);
$stmt->bindValue(':hr', $hora);
$stmt->bindValue(':mi', $minuto);

$stmt->execute();
//date('d/m/Y H:i');



if ($stmt->rowCount() >= 1) {
    echo json_encode('Comentário Salvo com Sucesso');
} else {
    echo json_encode('Falha ao salvar comentário');
}




?>