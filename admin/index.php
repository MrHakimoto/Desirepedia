<!DOCTYPE HTML>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <script src="https://cdn.tiny.cloud/1/9m7br97tvi49do4krkoz9z47u4t5vto64qqgrfcty65xqocr/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <title>Bootstrap</title>

    <!-- <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script> -->

    <script>
        tinymce.init({
            selector: 'textarea#enunciado',
            skin: 'bootstrap',
            plugins: 'lists, link, image, media',
            toolbar: 'h1 h2 bold italic fontsize strikethrough blockquote bullist numlist backcolor | link image media | removeformat help',
            menubar: false,
        });
        tinymce.init({
            selector: '#altA',
            skin: 'bootstrap',
            plugins: 'lists, link, image, media',
            toolbar: 'h1 h2 bold fontsize italic strikethrough blockquote bullist numlist backcolor | link image media | removeformat help',
            menubar: false,
            height: 150
        });
        tinymce.init({
            selector: '#altB',
            skin: 'bootstrap',
            plugins: 'lists, link, image, media',
            toolbar: 'h1 h2 bold fontsize italic strikethrough blockquote bullist numlist backcolor | link image media | removeformat help',
            menubar: false,
            height: 150
        });
        tinymce.init({
            selector: '#altC',
            skin: 'bootstrap',
            plugins: 'lists, link, image, media',
            toolbar: 'h1 h2 bold fontsize italic strikethrough blockquote bullist numlist backcolor | link image media | removeformat help',
            menubar: false,
            height: 150
        });
        tinymce.init({
            selector: '#altD',
            skin: 'bootstrap',
            plugins: 'lists, link, image, media',
            toolbar: 'h1 h2 bold fontsize italic strikethrough blockquote bullist numlist backcolor | link image media | removeformat help',
            menubar: false,
            height: 150
        });
        tinymce.init({
            selector: '#altE',
            skin: 'bootstrap',
            plugins: 'lists, link, image, media',
            toolbar: 'h1 h2 bold fontsize italic strikethrough blockquote bullist numlist backcolor | link image media | removeformat help',
            menubar: false,
            height: 150
        });
    </script>

</head>

<body>


    <p> Área para execusão das provas </p>

    <p>CUIDADO! TUDO FEITO AQUI IMPACTARÁ DIRETAMENTE NO SERVIDOR!</p>

    <div class="container mt-4 mb-4">
        <div class="border bg-dark">as</div>
        <!--Bootstrap classes arrange web page components into columns and rows in a grid -->
        <div class="row justify-content-md-center">
            <div class="col-md-12 col-lg-8">
                <h1 class="h2 mb-4">Submit issue</h1>
                <label>Describe the issue in detail</label>
                <div class="form-group" class="border border-primary">
                    <form action="" method="POST">
                        <div class="my-5">
                        <p>Enunciado</p>
                        <textarea name="enun" id="enunciado"></textarea>
                        </div>
                        <div class="my-5">
                        <p>Alternativa A:</p>
                        <input type="text" id="altA" name="alA">
                        </div>
                        
                        <div class="my-5">
                        <p>Alternativa B:</p>
                        <input type="text" id="altB" name="alB" style="height:170px;">
                        </div>

                        <div class="my-5">
                        <p>Alternativa C:</p>
                        <input type="text" id="altC" name="alC">
                        </div>

                        <div class="my-5">
                        <p>Alternativa D:</p>
                        <input type="text" id="altD" name="alD">
                        </div>

                        <div class="my-5">
                        <p>Alternativa E:</p>
                        <input type="text" id="altE" name="alE">
                        </div>

                        <br>
                        <div class="my-5">
                            <p>Alternativa Correta: </p>
                        <p> <label for="alternativa_A" class="d-block p-2"> 
                        <input class="mr-1" type="radio" name="alt" id="alternativa_A" value="A"> Alternativa A
                        </label> </p>
                        <p> <label for="alternativa_B" class="d-block p-2"> 
                        <input class="mr-1" type="radio" name="alt" id="alternativa_B" value="B"> Alternativa B
                        </label> </p>
                        <p> <label for="alternativa_C" class="d-block p-2"> 
                        <input class="mr-1" type="radio" name="alt" id="alternativa_C" value="C"> Alternativa C
                        </label> </p>
                        <p> <label for="alternativa_D" class="d-block p-2"> 
                        <input class="mr-1" type="radio" name="alt" id="alternativa_D" value="D"> Alternativa D
                        </label> </p>
                        <p> <label for="alternativa_E" class="d-block p-2"> 
                        <input class="mr-1" type="radio" name="alt" id="alternativa_E" value="E"> Alternativa E
                        </label> </p>
                        </div>
                    </div>




                <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
            </div>
        </div>
    </div>
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