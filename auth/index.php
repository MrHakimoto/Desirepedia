<!--
    Página de autênticação do usuário
-->
<?php 
    if(empty($_GET['ia'])){
        header("Location: index.php?ia=1");
    }
    if(isset($_GET['error'])){
        switch($_GET['error']) {
            case 1:
                $error = "Eerro ao logar-se no google!";
            break;
        }
    }

?>




<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo titulo($_GET['ia']); ?></title>
</head>
<body>


<?php
/*
    Sistema para incluir Login e registro na mesma página, facilita a organização
    e evita redirecionamentos à outras páginas.

    Basicamente, o primeiro verificador, busca saber se a variavél de seletor entre
    login ou registro existe (evitar casos que apaguem, por exemplo) se não existir
    cria-se uma com padrão '1', a qual refere-se ao sistema de login.
*/



    if(isset($_GET['ia'])){
        $indice_de_auth = $_GET['ia']; 
        if ($indice_de_auth == 1 ){
            include("../include_auth/login.php");
            $title = "Login";
        } elseif ($indice_de_auth == 2) {
            include("../include_auth/register.php");
            $title = "Registro";
        } else {
            header("Location: index.php?ia=1");
        }
    }
    
    function titulo($x) {
        switch($x) {
            case 1:
                return "Login";
            break;
            case 2:
                return "Registro";
            break;
        }
    }


?>


</body>
</html>

<?php 



?>