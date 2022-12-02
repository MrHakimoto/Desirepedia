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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <link rel="apple-touch-icon" sizes="180x180" href="http://localhost/Desirepedia/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="http://localhost/Desirepedia/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="http://localhost/Desirepedia/favicon/favicon-16x16.png">
    <link rel="manifest" href="http://localhost/Desirepedia/favicon/site.webmanifest">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/dash.css">
    <link rel="stylesheet" href="css/dash.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/rainwbow.css">


    rainwbow
    <title> Dashboard </title>
    <style>
        h1 {
            text-indent: 32px;
            font-size: 50px;
        }

        .bolinhas {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            overflow: hidden;
            margin: 15px;
            position: relative;
            transition: 0.3s ease;
            border: solid 4px #5A2BB0;
            color: #5A2BB0;
        }

        /* .bolinhas:hover {
            transform: rotateY(180deg);
        }*/

        .bolinhas span {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: #5A2BB0;
            text-align: center;
        }

        .facitequec {
            position: absolute;
            bottom: -18;
            left: 35%;
            transform: translate(-40%);
        }

        .relative {
            position: relative;
        }

        .butazao {
            background: #ab79d6;
            color: #351d4a;
            align-items: center;
            border: 2px solid transparent;
            border-radius: 0.5em;
            cursor: pointer;
            display: inline-flex;
            font-family: "Baloo 2", system-ui, sans-serif;
            font-weight: 500;
            font-size: 17px;
            gap: 0.5em;
            justify-content: center;
            line-height: calc(4px + 2ex);
            min-width: 40ch;
            padding: 0.55em 0.75em 0.5em;
            text-align: center;
            text-decoration: none;
            transition: none .18s ease-in-out;
            transition-property: background-color, color, border-color;
        }

        .butazao:hover {
            background: #351d4a;
            border: 2px solid #ab79d6;
            color: #ab79d6;
        }

        .card {
            background-color: #0e0f12;
            border-bottom: solid 4px #a24ddb;
            border-left: solid 4px #0e0f12;
            border-right: solid 4px #16161c;
            z-index: 1;
            margin-top: 40px;

        }

        .red,
        .red span {
            border-color: red !important;
            color: red !important;
        }

        .animate-charcter {
            text-transform: uppercase;
            background-image: linear-gradient(-225deg,
                    #231557 0%,
                    #44107a 29%,
                    #ff1361 67%,
                    #fff800 100%);
            background-size: auto auto;
            background-clip: border-box;
            background-size: 200% auto;
            color: #fff;
            background-clip: text;
            text-fill-color: transparent;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            animation: textclip 2s linear infinite;
            display: inline-block;
            font-size: 80px;
        }

        .cont-prova {
            background-color: #080c14;
            padding-bottom: 10px;
        }

        /* .myText-tt {
            color: white;
            font-style: bold;
            font-weight: 900;
            font-size: 76px;
            line-height: 75px;
        } */



        /* 
        .inicin p {
            text-transform: uppercase;
            text-align: center;

            letter-spacing: .5em;
            display: inline-block;
            border: 4px double rgba(255, 255, 255, .25);
            border-width: 4px 0;
            padding: 1.5em 0em;
            top: 18%;
            left: 50%;
            width: 40em;
            margin: 0 0 0 -20em;

        } */

        .inicin span {
            font: 800 4em/1 "Oswald", sans-serif;
            font-size: 90px;
            letter-spacing: 0;
            /* padding: 1.25em 0 1.325em; */
            display: block;
            text-shadow: 0 0 80px rgba(255, 255, 255, .5);
            /* Clip Background Image */

            background: url(http://localhost/Desirepedia/database/IMAGEM-PLANO.png) repeat-y;
            -webkit-background-clip: text;
            background-clip: text;

            /* Animate Background Image */

            -webkit-text-fill-color: transparent;
            -webkit-animation: aitf 80s linear infinite;

            /* Activate hardware acceleration for smoother animations */

            -webkit-transform: translate3d(0, 0, 0);
            -webkit-backface-visibility: hidden;





        }

        :root {
            --color: #3c3163;
            --transition-time: 0.5s;
        }

        .cardes {
            font-family: 'Heebo';
            --bg-filter-opacity: 0.5;
            background-image: linear-gradient(rgba(0, 0, 0, var(--bg-filter-opacity)), rgba(0, 0, 0, var(--bg-filter-opacity))), var(--bg-img);
            height: 20em;
            width: 25em;
            font-size: 1.5em;
            color: white;
            border-radius: 1em;
            padding: 1em;
            /*margin: 2em;*/
            display: flex;
            align-items: flex-end;
            background-size: cover;
            background-position: center;
            box-shadow: 0 0 5em -1em black;
            transition: all, var(--transition-time);
            position: relative;
            overflow: hidden;
            border: 10px solid purple;
            text-decoration: none;
        }

        .cardes:hover {
            transform: rotate(0);

        }

        .cardes h1 {
            margin: 0;
            font-size: 1.5em;
            line-height: 1.2em;
        }

        .cardes p {
            font-size: 0.75em;
            font-family: 'Open Sans';
            margin-top: 0.5em;
            line-height: 2em;
        }

        .cardes .tags {
            display: flex;
        }

        .cardes .tags .tag {
            font-size: 0.75em;
            background: rgba(255, 255, 255, 0.5);
            border-radius: 0.3rem;
            padding: 0 0.5em;
            margin-right: 0.5em;
            line-height: 1.5em;
            transition: all, var(--transition-time);
        }

        .cardes:hover .tags .tag {
            background: var(--color);
            color: white;
        }

        .cardes .date {
            position: absolute;
            top: 0;
            right: 0;
            font-size: 0.75em;
            padding: 1em;
            line-height: 1em;
            opacity: .8;
        }

        .cardes:before,
        .cardes:after {
            content: '';
            transform: scale(0);
            transform-origin: top left;
            border-radius: 50%;
            position: absolute;
            left: -50%;
            top: -50%;
            z-index: -5;
            transition: all, var(--transition-time);
            transition-timing-function: ease-in-out;
        }

        .cardes:before {
            background: #ddd;
            width: 250%;
            height: 250%;
        }

        .cardes:after {
            background: white;
            width: 200%;
            height: 200%;
        }

        .cardes:hover {
            color: var(--color);
        }

        .cardes:hover:before,
        .cardes:hover:after {
            transform: scale(1);
        }

        .cardes-grid-space .num {
            font-size: 3em;
            margin-bottom: 1.2rem;
            margin-left: 1rem;
        }

        .info {
            font-size: 1.2em;
            display: flex;
            padding: 1em 3em;
            height: 3em;
        }

        .info img {
            height: 3em;
            margin-right: 0.5em;
        }

        .info h1 {
            font-size: 1em;
            font-weight: normal;
        }

        .aproveitamento-txt {
            font-size: 90px;
            background-color: #16161c;
            color: orangered;
            border-radius: 10px;
            margin-bottom: 20px;

        }

        .inicin img {}

        /* 
        @-webkit-keyframes aitf {
            0% {
                background-position: 0% 50%;
            }

            100% {
                background-position: 100% 50%;
            }
        } */

        @keyframes textclip {
            to {
                background-position: 200% center;
            }
        }

        .notas {
            height: 150px !important;
            border: 5px solid purple;
        }
    </style>
</head>

<body>
    <?php

    include_once('navbar.php');

    ?>



    <div class="inicin mb-5">
        <div class="d-flex justify-content-center text-center">
            <p>
            <div class="my-5" style="visibility: hidden;">espacing</div>
            <div class="my-5">
                <span class="my-5"><img src="http://localhost/Desirepedia/database/LOGO-DESIREPEDIA.png" width="200px" alt="" srcset=""> Desirepedia</span>
            </div>
            </p>

        </div>
    </div>

    <div class="container my-5 text-white cont-prova p-3">

        <h1>Olá, <?php echo $_SESSION['nome']; ?></h1>
        <ul class="mb-3" style="list-style: none; text-indent: 32px; font-size: 20px; color:#edeced;">
            <li>
                <p class="mb-3">Atualmente suas estatisticas estão em:</p>
            </li>
        </ul>
        <div class="row mt-3">
            <div class="col-12 col-md-6">
                <div class="pse ">
                    <div class="bolinhas "><span>20 <br> Acertos</span></div>
                    <div class="bolinhas red"><span>34 <br> erros</span></div>
                    <p style="font-size: 20px;">Aproveitamento:</p> <br>

                    <span class="aproveitamento-txt p-3 m-2 mb-5 ml-5">37% 😕 </span>
                </div>
            </div>
            <div class="col-12 col-md-6">

              
                <a class="cardes" target="_blank" href="https://www.gov.br/inep/pt-br/assuntos/noticias/enem/prazo-para-pedir-reaplicacao-do-enem-vai-ate-sexta-25" style="--bg-img: url(https://img.freepik.com/fotos-gratis/retrato-de-uma-estudante-universitaria-afro-americana-feliz-segurando-cadernos-e-uma-mochila-sorrindo-e-em-pe-sobre-um-fundo-amarelo_1258-54844.jpg?w=1380&t=st=1669945450~exp=1669946050~hmac=3737ead5d9db3a58e8a74c461468d486b6d62de731305d476401aec3e1cdf631)">
                    <div>
                        <h1>Reaplicação do ENEM </h1>
                        <p>Prazo para pedir reaplicação do Enem vai até sexta (25). Casos previstos, como problema logístico ou doença infectocontagiosa, dão direito à reaplicação.</p>
                        <div class="date">24 Nov 2022</div>
                        <div class="tags">
                            <div class="tag">ENEM</div>
                        </div>
                    </div>
                </a>
                

                <a href="" class="notas cardes my-3" target="_blank"  href="https://enem.inep.gov.br/participante/#!/" style="--bg-img: url(http://localhost/Desirepedia/database/ohomoa.png)">
                    <h1>Onde está as notas do ENEM?</h1>
                    <div class="date">24 Nov 2022</div>
                </a>



                <a href="" class="notas cardes my-3" target="_blank"  href="https://vestibulares.estrategia.com/portal/enem-e-vestibulares/enem/calendario-enem/#:~:text=O%20ex%2Dministro%20da%20Educa%C3%A7%C3%A3o,13%20de%20fevereiro%20de%202023." style="--bg-img: url(http://localhost/Desirepedia/database/calendary.png)">
                    <h1>Calendário oficial do vestibular</h1>
                    <div class="date">21 Nov 2022</div>
                </a>
            </div>



        </div>
    </div>

    </div>


    <script>
        console.log(Math.floor($(window).width() * (20 / 100)))
        let nmp
        if ($(window).width() > 1000) {
            nmp = Math.floor($(window).width() * (20 / 100))
        } else {
            nmp = Math.floor($(window).width() * (50 / 100))
        }


        let nmp2 = Math.floor(nmp * (20 / 100))
        $(".bolinhas").css("width", nmp)
        $(".bolinhas").css("height", nmp)
        $(".bolinhas").css("font-size", nmp2)
    </script>
    <div class="container cont-prova">
        <div class="d-flex justify-content-center p-2">
            <h3 class="p-3 m-2" style="font: 400 4em/1 'Oswald', sans-serif; font-size: 80px; font-weight: bold; color:rgba(255, 255, 255, .5)"> Vamos fazer uma prova?</h3>
            <br>

        </div>
        <h5 class="text-white text-center">Selecione uma prova e comece, todas são do <span style="color: rgb(0, 153, 255);">Caderno Azul</span> de seus respectivos anos. Bons estudos!</h5>
        <div class="row">
            <?php
            foreach ($iremos as $row) {
                //print_r($row);



                $nome_da_prova_usuario = $row['nome_bo_prova'];

                $nome_da_prova_bd = $row['nome_bd_prova'];

                $dia_da_prova = $row['dia_prova'];

                $id_prova = $row['codigo'];




                echo "<div class='col-12 col-md-6'>
                        <div class='card  mb-3 relative'>
                                    <div class='card-body p-0'>
                                    <h5 class='card-title d-inline'></h5>
                                    <div class='d-flex justify-content-between'>
                        
                                        <span class='display-3 animate-charcter p-5'>$nome_da_prova_usuario <br> $dia_da_prova</span>
                                        <div class='d-flex justify-content-end'>
                                        <div  class='py-5 px-2' style='z-index: 3; height: 100%; background: #16161c; display: block; user-select: none;'>
                                        <div class='vr text-primary'></div>
                                        <div class=' vertical-ll text-center' style='margin-right: 0px;' > <span class='enem-font'> <hspan style='color: #044c84; font-size: 60px;'>enem</span> </span> <br> <small class='text-white'> Exame Nacinonal do Ensino Médio </small> </div>
                                        </div></div></div>
                                        </div>
                                <div class='d-grid gap-2 facitequec'>
                                <a href='view/index.php?resolver=$nome_da_prova_bd' class='btn btn-outline-secondary butazao'>Fazer</a>
                            
                            </div>
                        </div>

                    </div>";
            } ?>




        </div>
    </div>
    <div class='post-card'>
    </div>
    </div>
    </div>
    <?php

    for ($i = 0; $i < 40; $i++) {
        echo "<br>";
    }


    include_once('footer.php');

    ?>

    <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script> -->
</body>

</html>