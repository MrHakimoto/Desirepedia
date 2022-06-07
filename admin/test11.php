<?php
header('Content-Type: application/json');

$nome = $_POST['name'];
$comentario = $_POST['comentario'];


$pdo = new PDO('mysql:host=localhost; dbname=bf_test;', 'root', '');

$stmt = $pdo->prepare('INSERT INTO comentario (nome, comentario) VALUES (:na, :co)');
$stmt->bindValue(':na', $nome);
$stmt->bindValue(':co', $comentario);
$stmt->execute();

if ($stmt->rowCount() >= 1) {
    echo json_encode('Comentário Salvo com Sucesso');
} else {
    echo json_encode('Falha ao salvar comentário');
}




?>