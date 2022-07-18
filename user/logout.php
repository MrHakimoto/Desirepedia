<!-- Deslogar o usuário -->

<?php
session_start();

unset($_SESSION['id']);
unset($_SESSION['nome']);
unset($_SESSION['email']);
unset($_SESSION['picture']);
unset($_SESSION['data_inclusao']);

header("Location: ../");
?>