<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vita est</title>
</head>

<body>
    <form action="" method="post">
        <p>Nome:</p>
        <input type="text" name="nomin"> <br>
        <p>E-mail</p>
        <input type="email" name="mail"> <br> <br>
        <button type="submit">Butonn</button>
    </form>
</body>

</html>

<?php
session_start();
include_once('bd_conect.php');

if (isset($_POST['nomin'])) {
    $nome = $_POST['nomin'];
    $email = $_POST['mail'];



    $query = "SELECT * FROM user WHERE email='$email'";
    $query_res =  $pdo->query($query);
    $count= count($query_res->fetchAll());
    if ($count > 0) {
        echo "Ja existe, tente outro!";
        //echo "<script> document.location.reload(true); </script>";
    } else {
        $sql = $pdo->query("INSERT INTO user SET nome= '$nome', email= '$email'");
        
        $ks = $pdo->query("SELECT * FROM user WHERE email='$email'")->fetchAll(PDO::FETCH_ASSOC);
        // $dados = $vls->fetch();

        //echo $ks;
        print_r($ks);
        $id = $ks[0]['id'];
        $_SESSION['nome'] = $nome;
        $_SESSION['email'] = $email;
        $_SESSION['id'] = $id;
        header('location: index.php');
         echo
            $_SESSION['nome'] . " <br> " .
            $_SESSION['email'] . " <br> " .
            $_SESSION['id'];
    }
}

?>