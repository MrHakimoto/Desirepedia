<?php

include_once("../functions/conexao.php");



$con = con();

$values = array("name" => $_POST['nome'], "email" => $_POST['email'], "senha" => md5($_POST['senha1']));
echo $values;

if (isset($_POST['email'])) {
    $values = array("name" => $_POST['nome'], "email" => $_POST['email'], "senha" => md5($_POST['senha1']));

    $sqlVerification = "SELECT * FROM user WHERE email=?";
    $verification = $con->prepare($sqlVerification);
    $verification->bind_param("s", $values['email']);

    if(mysqli_affected_rows($con) > 0) {
        $_SESSION['error'] = "Já existe um email";
        header("Location: index.php?ia=2&validate=false");
    }

    
    //$verificar = "SELECT * FROM user WHERE email=?";
    //$valem = $con->prepare($sql);
    //$valem->bind_param("s", $values['email']);
    //$valem->execute();
    //if (mysqli_affected_rows($con) > 0) {
    //    echo "Error, ja existe!";
    //} else {
        $sql = "INSERT INTO user (nome, email, senha) VALUES (?, ?, ?)";
        $stmt = $con->prepare($sql);
        $stmt->bind_param("sss", $values['name'], $values['email'], $values['senha']);
        $stmt->execute();
        $_SESSION['logado'] = true;
        header("Location: index.php?ia=1&validate=true");

    }
//}

//$values = array("name" => $_POST['nome'], "email" => $_POST['email'], "senha" => md5($_POST['senha1']));



//$stmt->bind_param("sssss", $var1, $var1, $var1, $var1, $var1);
//$var1 = "oi";

$mysqli->close();
