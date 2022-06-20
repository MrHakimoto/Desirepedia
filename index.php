<?php
session_start();

?>
<!-- 
    Inicio da aplicação, 
    Página inicial onde o usuário terá acesso as provas dos vestibulares.
-->




<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Desirepédia | Home </title>
</head>
<body>
    <?php if(isset($_SESSION['id'])){
        include_once('include/dashboard.php');
    }else {
        include_once('include/landing-page.php');
    }
     ?>
</body>
</html>