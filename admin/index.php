<!DOCTYPE HTML>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <script src="https://cdn.tiny.cloud/1/9m7br97tvi49do4krkoz9z47u4t5vto64qqgrfcty65xqocr/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title>Admin | Diserepédia</title>

    <!-- <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script> -->

    <?php if(isset($script)){
        echo $script;
    } ?>

</head>

<body>
    

    <p> Área para execusão das provas </p>

    <p>CUIDADO! TUDO FEITO AQUI IMPACTARÁ DIRETAMENTE NO SERVIDOR!</p>


    


        <?php if (!empty($_GET['labore'])) {
            switch($_GET['labore']) {
                case 1:
                    include_once('includes/create.php');
                    break;

                case 2:
                    include_once('includes/edit.php');
                    break;
            }


        } else {
            echo "
            <h1> O que você deseja fazer? </h1>
    <a href='index.php?labore=1' class='button btn btn-lg ml-2'> Criar Provas </a> <a href='index.php?labore=2' class='button btn btn-lg ml-2'> Editar provas </a>
";        
}

?>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</body>

</html>


<?php



try {
    $con = new PDO("sqlite:../db/test.db3");
} catch (PDOException $e) {
    echo $e->getMessage();
}


?>

<?php

$baseDB = "CREATE TABLE IF NOT EXISTS enem_2019 (
    q_global INT(12) NOT NULL,
    q_num INTEGER PRIMARY KEY AUTOINCREMENT,
    q_enum MEDIUMTEXT NOT NULL,
    q_alt_a TEXT NOT NULL,
    q_alt_b TEXT NOT NULL,
    q_alt_c TEXT NOT NULL,
    q_alt_d TEXT NOT NULL,
    q_alt_e TEXT NOT NULL,
    q_correct TEXT NOT NULL
);";
$pau = "CREATE TABLE IF NOT EXISTS finasterida (
    q_global INT(12) NOT NULL,
    q_num INTEGER PRIMARY KEY AUTOINCREMENT,
    q_enum MEDIUMTEXT NOT NULL,
    q_alt_a TEXT NOT NULL);";

if ($con->exec($pau)) {
    echo "Inserido!";
} else {
    echo "Erro!";
}

if ($con->exec($baseDB)) {
    echo "Inserido!";
} else {
    echo "Erro!";
}



if(isset($_POST['enun'])) {
    $enunciado = $_POST['enun'];
    $alternativa_a = $_POST['alA'];
    $alternativa_b = $_POST['alB'];
    $alternativa_c = $_POST['alC'];
    $alternativa_d = $_POST['alD'];
    $alternativa_e = $_POST['alE'];
    $alternativa_correta = $_POST['alt'];
    $numero = 802019;
echo $enunciado = $_POST['enun'] ." ". $alternativa_a ." ". $alternativa_b  ." ". $alternativa_c  ." ". $alternativa_d  ." ". $alternativa_e ." ". $alternativa_correta;


 

$compultar = "INSERT INTO enem_2019 (q_global, q_num, q_enum,  q_alt_a,  q_alt_b,  q_alt_c,  q_alt_d,  q_alt_e, q_correct) VALUES ($numero, null , '$enunciado', '$alternativa_a', '$alternativa_b', '$alternativa_c', '$alternativa_d', '$alternativa_e', '$alternativa_correta');";

$mandar = $con->exec($compultar);

$mandar = $con->prepare($compultar, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));


$mandar->execute();




$select = "SELECT * FROM enem_2019";
$stmt = $con->prepare($select);
 
// Execute statement.
$stmt->execute(); // ID between 1 and 3.
 
// Get the results.
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
foreach($results as $row) {
    print_r($row);
}
}

$vb = "CREATE TABLE `maccabeus`.`enem_2019` ( `q_global` INT(12) NOT NULL COMMENT 'Id Geral da questão' ,  `q_num` INT(12) NOT NULL AUTO_INCREMENT COMMENT 'ID da prova' ,  `q_enum` MEDIUMTEXT NOT NULL COMMENT 'Enunciado da questão texto e imagens etc' ,  `q_alt_a` TEXT NOT NULL ,  `q_alt_b` TEXT NOT NULL ,  `q_alt_c` TEXT NOT NULL ,  `q_alt_d` TEXT NOT NULL ,  `q_alt_e` TEXT NOT NULL ,  `q_correct` TEXT NOT NULL ,    PRIMARY KEY  (`q_num`)) ENGINE = InnoDB;"
// $con = new PDO("sqlite:../db/test.db3");
// $ano_Da_prova = 2017;
// $sql = "SELECT * FROM enem WHERE provaAno=$ano_Da_prova";
// $resultado = $con->query($sql);
// while ($row = $resultado->fetchArray()) {
//     var_dump($row);
//}

?>