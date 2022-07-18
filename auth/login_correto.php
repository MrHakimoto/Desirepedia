<?php
session_start();
include_once("../functions/conexao.php");


$con = con();

$values = array("user" => $_POST['user'], "senha" => md5($_POST['senha']));
//echo $values;

if (isset($_POST['user'])) {
    $values = array("user" => $_POST['user'], "senha" => md5($_POST['senha']));
    //$verificar = "SELECT * FROM user WHERE email=?";
    //$valem = $con->prepare($sql);
    //$valem->bind_param("s", $values['email']);
    //$valem->execute();
    //if (mysqli_affected_rows($con) > 0) {
    //    echo "Error, ja existe!";
    //} else {
    $sql = "SELECT * FROM user WHERE email=? AND senha=?";
    $stmt = $con->prepare($sql);
    $stmt->bind_param("ss", $values['user'], $values['senha']);
    $stmt->execute();

 

    //if (mysqli_affected_rows($con) > 0) {
    $result = $stmt->get_result();
    while ($row = $result->fetch_assoc()) {
        $foi = $row['id'];
        print_r($row);
        print "<pre> <br>";
        echo $row['id'] . "<br>";
        echo $row['nome'] . "<br>";
        echo $row['email'] . "<br>";
        echo $row['picture'] . "<br>";
        echo $row['data_inclusao'];
        echo "</pre>";
        $_SESSION['id'] = $row['id'];
        $_SESSION['nome'] = $row['nome'];
        $_SESSION['email'] = $row['email'];
        $_SESSION['picture'] = $row['picture'];
        $_SESSION['data_inclusao'] = $row['data_inclusao'];
    }
    echo isset($foi) ? header("Location: ../") : header("Location: ../auth/index.php?ia=1&error=1");


    ;
    //$_SESSION['id'] = 
    //$_SESSION['nome'] = 
    //$_SESSION['email'] = 
    //$_SESSION['picture'] = 
    //$_SESSION['data_inclusao'] = 

    /* retirar os resultados obtidos */
    $stmt->close();
    //}

    //header("Location: index.php?ia=1&validate=true");
}
//}

//$values = array("name" => $_POST['nome'], "email" => $_POST['email'], "senha" => md5($_POST['senha1']));



//$stmt->bind_param("sssss", $var1, $var1, $var1, $var1, $var1);
//$var1 = "oi";

$con->close();
