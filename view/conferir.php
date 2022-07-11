<?php
header('Content-Type: application/json');

$prova = $_POST['prova'];
$alternativa = $_POST['aternativa'];
$questao = $_POST['questao'];

try {
    $con = new PDO("sqlite:../db/test.db3");
} catch (PDOException $e) {
    echo $e->getMessage();
}

$stmt = $con->prepare("SELECT * FROM $prova WHERE q_global=$questao");
$stmt->execute();
$data = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($data as $datinha) {
    $certo = $datinha['q_correct'];
}


if ($certo != $alternativa) {
    $voltar = false;
} else {
    $voltar = true;
}


$msg[0] = $voltar;
$msg[1] = $certo;

echo json_encode($msg);




?>