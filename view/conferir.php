<?php
header('Content-Type: application/json');
session_start();
include_once("../functions/conexao.php");

$id = $_SESSION['id'];


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


/**------------------------------------------------------------------ */


// $con = con();


// $sql_verificador = mysqli_query($con, "SELECT * FROM contabilizacao WHERE id=$id and questao='$questao'");
// if (mysqli_affected_rows($con) > 0) {
//     if ($voltar) {
//         $capturar_valor_atual = mysqli_query($con, "SELECT acertou FROM contabilizacao WHERE id=$id and questao='$questao'");
//         $novo_valor = mysqli_fetch_assoc($capturar_valor_atual) + 1;
//         $sql_de_update_para_certo = mysqli_query($con, "UPDATE FROM contabilizacao SET acertou=$novo_valor WHERE id=$id and questao='$questao'");
//     } else {
//         $capturar_valor_atual = mysqli_query($con, "SELECT errou FROM contabilizacao WHERE questao='$questao'");
//         $novo_valor = intval(mysqli_fetch_assoc($capturar_valor_atual)) + 1;
//         $sql_de_update_para_certo = mysqli_query($con, "UPDATE FROM contabilizacao SET acertou=$novo_valor WHERE id=$id and questao='$questao'");
//     }
// } else {
 

// if ($voltar) {
//     $sql = mysqli_query($con, "INSERT INTO contabilizacao (questao, acertou, errou) VALUES ('$questao', 1, NULL) WHERE id=$id");
// } else {
//     $sql = mysqli_query($con, "INSERT INTO contabilizacao (questao, acertou, errou) VALUES ('$questao', NULL, 1) WHERE id=$id");
// }
// }



/**------------------------------------------------------------------ */



$msg[0] = $voltar;
$msg[1] = $certo;

echo json_encode($msg);




?>