<?php
session_start();

try {
    $cona = new PDO("sqlite:./db/test.db3");
} catch (PDOException $e) {
    echo $e->getMessage();
}

?>
<!-- 
    Inicio da aplicação, 
    Página inicial onde o usuário terá acesso as provas dos vestibulares.
-->

<?php

if (isset($_SESSION['id'])) {
    echo $_SESSION['id'] . "<br>";
    include_once('include/dashboard.php');
} else {
    include_once('include/landing-page.php');
}

?>