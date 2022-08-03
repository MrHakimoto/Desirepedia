<?php

echo "DASHBOARD";



$sql_prova = "SELECT * FROM id_tests";
$ir = $cona->prepare($sql_prova);

// Execute statement.
$ir->execute(); // ID between 1 and 3.

// Get the results.
$iremos = $ir->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <title> Dashboard </title>
</head>

<body>
    <?php

    include_once('navbar.php');

    ?>


    <div class="container my-5 text-white">
        <h1>Olá, <?php echo $_SESSION['nome']; ?></h1>
    </div>

    <div class="container">

        <div class="card">
            <div class="card-body">
                This is some text within a card body.
                <div class="row">
                <?php
                foreach ($iremos as $row) {
                    //print_r($row);
                    
                    $nome_da_prova_usuario = $row['nome_bo_prova'];

                    $nome_da_prova_bd = $row['nome_bd_prova'];

                    $id_prova = $row['codigo'];
                    



echo "<div class='col-12 col-md-6'>
                        <div class='card mb-3' style='max-width: 540px;'>
                            <div class='row g-0'>
                                <div class='col-md-4'>
                                    <img src='database/enem.png' class='img-fluid rounded-start' alt='...'>
                                </div>
                                <div class='col-md-8'>
                                    <div class='card-body'>
                                        <h5 class='card-title'>Prova</h5>
                                        <p class='display-3'>$nome_da_prova_usuario</p>
                                        <div class='d-grid gap-2'>
                                            <a href='view/index.php?resolver=$nome_da_prova_bd' class='btn btn-outline-secondary'>Fazer</a>
                                        </div>
                                        <p class='card-text'><small class='text-muted'>Last updated 3 mins ago</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>";
                }?>
                
                    <div class="col-12 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="col-md-4">
                                    <img class="img-fluid rounded-start" alt="..." src="=" alt="">
                                </div>
                                <div class="col-md-8">
                                    This is some text within a card body.
                                </div>
                            </div>
                        </div>
                    </div>
                    

                </div>
            </div>
            <div class='post-card'>
            </div>
        </div>

        <?php

        for ($i = 0; $i < 40; $i++) {
            echo "<br>";
        }


        include_once('footer.php');

        ?>

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</body>

</html>