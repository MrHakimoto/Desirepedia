<?php
session_start();

?>
<!-- 
    Inicio da aplicação, 
    Página inicial onde o usuário terá acesso as provas dos vestibulares.
-->

<?php

if (isset($_SESSION['id'])) {
    include_once('include/dashboard.php');
} else {
    include_once('include/landing-page.php');
}

?>