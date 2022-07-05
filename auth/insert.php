<?php

include_once("../functions/conexao.php");



$con = con();

$values = array("name" => $_POST['nome'], "email" => $_POST['email'], "senha" => md5($_POST['senha1']));
echo $values;

if (isset($_POST['email'])) {
    $values = array("name" => $_POST['nome'], "email" => $_POST['email'], "senha" => md5($_POST['senha1']));
    $sql = "INSERT INTO user (nome, email, senha) VALUES (?, ?, ?)";
    $stmt = $con->prepare($sql);
    $stmt->bind_param("sss", $values['name'], $values['email'], $values['senha']);
    $stmt->execute();
}

//$values = array("name" => $_POST['nome'], "email" => $_POST['email'], "senha" => md5($_POST['senha1']));



//$stmt->bind_param("sssss", $var1, $var1, $var1, $var1, $var1);
//$var1 = "oi";
$stmt->execute();

$mysqli -> close();
?>