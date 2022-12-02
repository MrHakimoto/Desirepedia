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

    <?php if (isset($script)) {
        echo $script;
    } ?>

</head>

<body>


    <p> Área para execusão das provas </p>

    <p>CUIDADO! TUDO FEITO AQUI IMPACTARÁ DIRETAMENTE NO SERVIDOR!</p>





    <?php if (!empty($_GET['labore'])) {

        $return = "
<button type='button' onclick='remover_vos_ei()' class='btn btn-outline-danger'>
                <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-arrow-90deg-left' viewBox='0 0 16 16'>
  <path fill-rule='evenodd' d='M1.146 4.854a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 4H12.5A2.5 2.5 0 0 1 15 6.5v8a.5.5 0 0 1-1 0v-8A1.5 1.5 0 0 0 12.5 5H2.707l3.147 3.146a.5.5 0 1 1-.708.708l-4-4z'></path>
</svg>
                Button
              </button>

              <script>
              function remover_vos_ei() {
                console.log('cheguei') 
                url = new URL(window.location.href);
                let params = url.searchParams;   
                params.delete('labore');
                window.location = document.URL.replace('labore=" . $_GET['labore'] . "',''); 
            } </script>
              ";
        switch ($_GET['labore']) {
            case 1:

                include_once('includes/create.php');
                break;

            case 2:

                include_once('includes/edit.php');
                break;
            case 3:
                include_once('includes/newTest.php');
        }
    } else {
        echo "
            <h1> O que você deseja fazer? </h1>
    <a href='index.php?labore=1' class='button btn btn-lg ml-2'> Criar Questões </a> <a href='index.php?labore=2' class='button btn btn-lg ml-2'> Editar provas </a> <a href='index.php?labore=3' class='button btn btn-lg ml-2'> Criar provas </a>
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

$data_base = "CREATE TABLE IF NOT EXISTS id_tests (
    codigo INTEGER PRIMARY KEY AUTOINCREMENT,
    nome_bo_prova TEXT,
    nome_bd_prova TEXT,
    dia_prova TEXT
    );";


if ($con->exec($data_base)) {
    echo "Inserido!";
} else {
    echo "Erro!";
}




// if (isset($_POST['enun'])) {
//     $enunciado = $_POST['enun'];
//     $alternativa_a = $_POST['alA'];
//     $alternativa_b = $_POST['alB'];
//     $alternativa_c = $_POST['alC'];
//     $alternativa_d = $_POST['alD'];
//     $alternativa_e = $_POST['alE'];
//     $alternativa_correta = $_POST['alt'];
//     $numero = 802019;
//     echo $enunciado = $_POST['enun'] . " " . $alternativa_a . " " . $alternativa_b  . " " . $alternativa_c  . " " . $alternativa_d  . " " . $alternativa_e . " " . $alternativa_correta;




//     $compultar = "INSERT INTO enem_2019 (q_global, q_num, q_enum,  q_alt_a,  q_alt_b,  q_alt_c,  q_alt_d,  q_alt_e, q_correct) VALUES ($numero, null , '$enunciado', '$alternativa_a', '$alternativa_b', '$alternativa_c', '$alternativa_d', '$alternativa_e', '$alternativa_correta');";

//     $mandar = $con->exec($compultar);

//     $mandar = $con->prepare($compultar, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));


//     $mandar->execute();




//     $select = "SELECT * FROM enem_2019";
//     $stmt = $con->prepare($select);

//     // Execute statement.
//     $stmt->execute(); // ID between 1 and 3.

//     // Get the results.
//     $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
//     foreach ($results as $row) {
//         print_r($row);
//     }
// }

// $con = new PDO("sqlite:../db/test.db3");
// $ano_Da_prova = 2017;
// $sql = "SELECT * FROM enem WHERE provaAno=$ano_Da_prova";
// $resultado = $con->query($sql);
// while ($row = $resultado->fetchArray()) {
//     var_dump($row);
//}

?>