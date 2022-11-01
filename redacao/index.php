<?php
session_start();
echo "redação";
?>

<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/nav.css">
    <style>
        p {
            text-indent: 32px;
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, "Segoe UI", "Roboto", "Oxygen-Sans", "Ubuntu", "Cantarell", "Helvetica Neue", sans-serif;
            font-size: 20px;
        }

        .sub-titles {
            color: #E0E0E0;
            background-color: #a24ddb;
            -webkit-border-top-left-radius: 60px;
            -webkit-border-bottom-right-radius: 151px;
            -moz-border-radius-topleft: 60px;
            -moz-border-radius-bottomright: 151px;
            border-top-left-radius: 60px;
            border-bottom-right-radius: 151px;
        }

        ul {
            font-size: 21px;
        }

        .upper-title {
            color: #35bcf1;
        }
    </style>
</head>


<body>
    <?php

    include_once('../include/navbar.php');

    ?>

    <br><br><br><br>


    <div class="container mt-5">

        <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark" style="background-image: url(../database/LOGO-DESIREPEDIA.png);">
            <div class="col-md-6 px-0">
                <h1 class="display-4 font-italic"> Redação do Enem </h1>
                <p class="lead my-3"> 30 linhas e nada mais, saiba como é avaliada a mais problemática fase do grande vestibular brasileiro que trás inúmeras dores de cabeça aos estudantes. Aqui verá o que de fato é cobrado!</p>
                <!-- <p class="lead mb-0"><a href="#" class="text-white font-weight-bold">Continue reading...</a></p> -->
            </div>
        </div>


        <section>
            <div class="row text-white mt-5">
                <p>
                    Um bom desempenho na redação pode fazer diferença no resultado final do Exame Nacional do Ensino Médio (Enem). Para obter uma nota alta, o candidato deve seguir alguns critérios avaliados pelos organizadores da prova. O Instituto Nacional de Estudos e Pesquisas Educacionais Anísio Teixeira (Inep), que realiza o exame, preparou uma cartilha com as principais dias aos candidatos.
                </p>
                <p>
                    A redação é cobrada no primeiro dia do Enem, em 3 de novembro. Na oportunidade, também são realizadas as provas de Linguagens e Códigos e Ciências Humanas.
                    <br><br>
                    Conheça as cinco competências cobradas pelo Inep na redação:
                </p>



            </div>
        </section>

        <article>
            <div class="row">

                <div class="col-md-8 blog-main">

                    <article>
                        <h1 id="#comp1" class="upper-title">Competência 1</h1>
                    </article>

                    <article>
                        <h1 id="#comp2" class="upper-title">Competência 2</h1>
                    </article>

                    <article>
                        <h1 id="#comp3" class="upper-title">Competência 3</h1>
                    </article>

                    <article>
                        <h1 id="#comp4" class="upper-title">Competência 4</h1>
                    </article>

                    <article>
                        <h1 id="#comp5" class="upper-title">Competência 5</h1>
                    </article>

                </div>



                <aside class="col-md-4 blog-sidebar">
                    <div class="p-3 mb-3 bg-light rounded">
                        <h4 class="font-italic">About</h4>
                        <p class="mb-0">Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
                    </div>

                    <div class="p-3">
                        <h4 class="font-italic text-white">Competências</h4>
                        <ol class="list-unstyled mb-0">
                            <li><a href="#">March 2014</a></li>
                            <li><a href="#">February 2014</a></li>
                            <li><a href="#">January 2014</a></li>
                            <li><a href="#">December 2013</a></li>
                            <li><a href="#">November 2013</a></li>
                            <li><a href="#">October 2013</a></li>
                            <li><a href="#">September 2013</a></li>
                            <li><a href="#">August 2013</a></li>
                            <li><a href="#">July 2013</a></li>
                            <li><a href="#">June 2013</a></li>
                            <li><a href="#">May 2013</a></li>
                            <li><a href="#">April 2013</a></li>
                        </ol>
                    </div>

                    <div class="p-3">
                        <h4 class="font-italic text-white">Referênciais</h4>
                        <ol class="list-unstyled">
                            <li><a href="#">Portal do MEC</a></li>
                            <li><a href="#">INEP</a></li>
                            <li><a href="#">Caderno dos Corretores do ENEM</a></li>
                        </ol>
                    </div>
                </aside>
        </article>

    </div>


    </div>

</body>

</html>