<?php
header('Content-Type: application/json');
session_start();
$pdo = new PDO('mysql:host=localhost; dbname=desirepedia;', 'root', '');



$id = $_SESSION['id'];
$nome = isset($_POST['']) ? $_POST[''] : null;
$sobrenome = isset($_POST['']) ? $_POST[''] : null;
$telefone = isset($_POST['']) ? $_POST[''] : null;
$cpf = isset($_POST['']) ? $_POST[''] : null;
$cep = isset($_POST['']) ? $_POST[''] : null;
$logradouro = isset($_POST['']) ? $_POST[''] : null;
$bairro = isset($_POST['']) ? $_POST[''] : null;
$complemento = isset($_POST['']) ? $_POST[''] : null;
$cidade = isset($_POST['']) ? $_POST[''] : null;
$estado = isset($_POST['']) ? $_POST[''] : null;

$sql = "INSERT INTO usuario_info (
    id, nome, sobrenome, telefone, cpf, cep, logradouro, bairro, complemento, cidade, estado, ultima_alteracao) 
    VALUES (
    $id,
    $nome,
    $sobrenome,
    $telefone,
    $cpf,
    $cep,
    $logradouro,
    $bairro,
    $complemento,
    $cidade,
    $estado
    )";




        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':na', $mail);
        $stmt->execute();
        
        
        if ($stmt->rowCount() >= 1) {
            echo json_encode(false);
        } else {
            echo json_encode(true);
        }
        
    



















?>