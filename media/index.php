<?php
session_start();
echo "Média";
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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@300&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/nav.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../css/dash.css">
    <style>
        .enem-form input {
            width: 100%;
            background: none;
            color: white;
            padding: 10px 10px 5px 10px;
            font-size: 16px;
            font-weight: 600;
            outline: none;
            border: 2px solid white;
            border-radius: 5px;
            transition: .3s ease;
        }


        .enem-form fieldset {
            width: 10%;
            position: relative;
        }

        fieldset {
            min-width: 0;
            padding: 0;
            margin: 0;
            border: 0;
        }

        .enem-form legend {
            display: block;
            position: absolute;
            top: -7px;
            font-family: "GraphikMedium", Arial, Helvetica, sans-serif;
            font-size: 12px;
            line-height: 14px;
            font-weight: 500;
            letter-spacing: .3px;
            color: white;
            background-color: purple;
            width: auto;
            padding: 0 5px;
            margin: 0px;
            border: none;
        }

        .le-button {
            border-radius: 15px;
            background-color: #5da8ae;
            font-size: 17px;
            padding: 15px;
        }

        .meio {
            background-color: purple;
        }


        .produtivate {
            font-family: 'Roboto Slab', serif;
        }


        #enem_fez_a_boa {
            font-size: 120px;
            font-weight: bolder;
            color: greenyellow;
            text-shadow: 2px 2px 2px rgba(150, 150, 150, 0.2);
            position: relative;
        }

        .produtivate svg {
            transform: rotate(340deg);
            position: absolute;
            left: -30;
            top: 15;
        }

        #enem_totalizando {
            font-size: 60px;
        }

        #aproveitamento {
            font-size: 70px;
            font-weight: bold;
        }

        .resultados {
            background-color: #5da8ae;
            border-radius: 20px;
            line-height: 20px;

        }

        .resultado-item {
            color: #fff;
            font-family: 'Righteous', cursive;
            font-size: 55px;
            font-weight: normal;
            line-height: 60px;
            margin: 10px 0 20px;
            text-transform: uppercase;
            text-shadow: 2px 2px 0 #000;
            /* text-shadow: 0 0 15px rgba(255,255,255,.5), 0 0 10px rgba(255,255,255,.5), 4px 2px 1px rgba(59,0,206,0.76); */
        }

        .resultado-value span {
            font-size: 38px;
            font-family: 'Ubuntu', sans-serif;
            background-color: white;
            color: orange;
            padding: 4px;
        }

        .bloco {
            background-color: #5da8ae;
            border-radius: 20px;


        }


        .entrance {

            min-width: 96px;
            display: block;
        }

        .segundo-dia {
            display: flex;
            align-items: center;
            align-items: center;
        }



        .div1 {
            display: block;
            -webkit-box-shadow: -31px 20px 0px -4px rgba(214, 48, 255, 1);
            -moz-box-shadow: -31px 20px 0px -4px rgba(214, 48, 255, 1);
            box-shadow: -31px 20px 0px -4px rgba(214, 48, 255, 1);
            background-color: orange;
        }

        .div2 {
            height: 72px;
            width: 575px;
            max-width: 300vw;
            padding-right: 8px;
            margin-top: 8px;
            display: flex;
            -webkit-box-align: center;
            align-items: center;
            -webkit-box-pack: justify;
            justify-content: space-between;
            user-select: none;
            transition: all 0.3s ease 0s;
            /* color: inherit;

            box-shadow: 0 2px 8px rgb(0 0 0 / 20%); */
            border-radius: 2px;
            width: 100%;
        }


        .sessao {
            display: flex;
            align-items: center;
            padding: 48px calc(50% - 20%);
        }

        .anteriores {
            background-color: #18181c;
            border-left: 8px solid #18181c;
            border-right: 8px solid #18181c;
            border-bottom: 10px solid #6730ba;
            border-radius: 4px;
            padding: 20px;
            cursor: pointer;
            font-size: 20px;
            margin-bottom: 0;
        }

        .anteriores span {
            color: #edecdf;
            font-size: 30px;
        }

        #mamal {
            transition: all 0.3s ease 0s;
        }

        #anosAnteriores-principal {
            background-color: #6730ba;
            margin-top: 0;
        }

        #anosAnteriores-principal .titles {
            position: relative;
            background: white;
            padding: 10px;
            width: 40%;
            transform-style: preserve-3d;
            border: 4px solid black;
            border-radius: 8px;
            /* box-shadow: 18px 18px 0 0 gold, 18px 18px 0 4px black; */
            font-family: 'Anton', sans-serif;
            font-size: 50px;
            color: purple;
            cursor: pointer;
            user-select: none;
        }

        #anosAnteriores-principal .titles::before {
            content: '';
            position: absolute;
            height: 100%;
            width: 100%;
            border: 4px solid black;
            background-color: gold;
            bottom: -18px;
            right: -18px;
            border-radius: 8px;
            transform: translateZ(-1px);
            box-sizing: content-box;
            border-bottom: none !important;
        }

        #ante-title {
            position: relative;
        }

        .setinha {
            position: absolute;
            left: 5;
            top: -25;
        }

        .relative {
            position: relative;
        }

        ul {
            list-style: none;
        }

        .medias-antigas {
            background-color: gold;
            margin-left: 20px;
            border-bottom: solid 3px #000;
            border-radius: 0px 0px 22px 22px;
            -moz-border-radius: 0px 0px 22px 22px;
            -webkit-border-radius: 0px 0px 22px 22px;
            transition: all 1.5s ease 0s;
        }

        .Materia b {
            font-family: 'Roboto Mono', monospace;
            font-weight: bold;
            font-size: 40px;
            color: gold;
            background-color: #b5d1ff;
            padding: 5px;
            border-radius: 20px;
        }

        .Notas {
            font-family: 'Noto Sans JP', sans-serif;
            font-size: 30px;
            margin-bottom: 23px;
        }

        .notaBaixa {
            color: #ad1723;
            text-shadow: -2px 1px 0px #000000;
        }

        .notaAlta {
            color: #6df059;
            text-shadow: -2px 1px 0px #000000;
        }

        .media-aproximada {
            border-radius: 20px;

            background: rgb(255, 165, 0);
            background: linear-gradient(90deg, rgba(255, 165, 0, 1) 0%, rgba(134, 33, 203, 1) 36%, rgba(9, 9, 121, 1) 68%, rgba(214, 48, 255, 1) 89%);
            color: none;
            padding: 20px;
            font-size: 40px;
            color: white;
        
        }
            .media-aproximada span {
                font-size: 60px;
                color: whitesmoke;
            }
    </style>



</head>


<body>
    <?php

    include_once('../include/navbar.php');

    ?>

    <br><br><br><br>


    <div class="container mt-5 redation">

        <h1 class="text-center text-white" style="font-size: 80px;">Caúlculo de Média das Provas do ENEM</h1>
        <p class="my-5 text-white">Para contornar estas dificuldades e também para permitir uma medida mais apropriada da proficiência do aluno, foi desenvolvida a TRI, cujo foco principal é o item e não o teste como um todo. Dentro do contexto da TRI, as características dos itens e dos testes são estimadas independentemente das proficiências dos alunos. </p>
    </div>

    <div class="container-fluid meio p-5">
        <form class="enem-form " action="">

            <div class="d-flex justify-content-center">
                <fieldset class="mx-2">
                    <legend>Linguagens</legend>
                    <input type="text" id="matematica" name="matematica" class="input-nota" maxlength="5">
                </fieldset class="mx-2">
                <fieldset>
                    <legend>Humanas</legend>
                    <input type="text" id="matematica" name="matematica" class="input-nota" maxlength="5">
                </fieldset>
                <fieldset class="mx-2">
                    <legend>Naturezas</legend>
                    <input type="text" id="matematica" name="matematica" class="input-nota" maxlength="5">
                </fieldset>
                <fieldset class="mx-2">
                    <legend>Matemática</legend>
                    <input type="text" id="matematica" name="matematica" class="input-nota" maxlength="5">
                </fieldset>
                <fieldset class="mx-2">
                    <legend>Redação</legend>
                    <input type="text" id="matematica" name="matematica" class="input-nota" maxlength="5">
                </fieldset>
            </div>
            <br>
            <div class="d-flex justify-content-center mt-2">

                <button class="btn le-button"> Quero descobrir minha nota </button>
            </div>
        </form>

    </div>
    <div class="container">
        <div class="d-flex justify-content-around text-white produtivate">
            <div><span id="enem_fez_a_boa"><svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="currentColor" class="bi bi-check2-circle" viewBox="0 0 16 16">
                        <path d="M2.5 8a5.5 5.5 0 0 1 8.25-4.764.5.5 0 0 0 .5-.866A6.5 6.5 0 1 0 14.5 8a.5.5 0 0 0-1 0 5.5 5.5 0 1 1-11 0z" />
                        <path d="M15.354 3.354a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l7-7z" />
                    </svg> 77</span><span></span><span id="enem_totalizando">/90</span></div> <span id="aproveitamento" class="pt-4"> <span style="font-size: 16px; color:aquamarine;">Aproveitamento de</span> <br> <span id="aproveitamento2">0</span>.<span id="aproveitamento3">0</span>% </span>
        </div>


        <article class="text-white">
            <section class="sessao">
                <div class="div1 p-4" style="">
                    <div class="div2 my-4">
                        <span class="resultado-item pl-3">LINGUAGENS</span>
                        <span class="resultado-value p-5"> <span> 659.92 </span></span>
                    </div>
                    <div class="div2">
                        <span class="resultado-item">Ciências Humanas</span>
                        <span class="resultado-value p-5"> <span> 742.53 </span></span>
                    </div>
                </div>
            </section>

            <section class="sessao">
                <div class="div1 p-4" style="">
                    <div class="div2 my-5">
                        <span class="resultado-item pl-3">Ciências da Natureza</span>
                        <span class="resultado-value p-5"> <span> 782.37 </span> </span>
                    </div>
                    <div class="div2">
                        <span class="resultado-item">Matemática</span>
                        <span class="resultado-value p-5"> <span> 885.25 </span> </span>
                    </div>
                </div>
            </section>
            <section class="sessao">
                <div class="div1 p-4" style="">
                    <div class="div2">
                        <span class="resultado-item pl-3">Redação </span>
                        <span class="resultado-value p-5"> <span> 980.00 </span> </span>
                    </div>
                </div>
            </section>
        </article>

        <div class="text-center">
            <h3 class="media-aproximada">Média Aproximada: <span>810.01</span> </h3>
        </div>


        <p class="my-5 text-white">Aviso importante! Não se trata da nota real que você obterá após receber a correção do exame. Trata-se apenas de uma aproximação mais real possivel das notas que você irá encontrar. Entretanto, ratificamos: Não é 100% de certeza que você tirará essa nota. O sistama TRI do ENEM como já fora explicado antes é realizado com base em todas as alternativas e quesões obtidas no exame para obter a nota final, não apenas no número de acertos, somente.</p>

        <section>
            <article class="d-flex justify-content-between mt-2 anteriores" onclick="evidenciar(this)">
                <span> Minimas e máximas anos anteriores</span>

                <div class="" style="color: #6730ba;">
                    <svg style="" xmlns="http://www.w3.org/2000/svg" id="mamal" width="64" height="64" fill="currentColor" class="bi bi-caret-down" viewBox="0 0 16 16">
                        <path d="M3.204 5h9.592L8 10.481 3.204 5zm-.753.659 4.796 5.48a1 1 0 0 0 1.506 0l4.796-5.48c.566-.647.106-1.659-.753-1.659H3.204a1 1 0 0 0-.753 1.659z" />
                    </svg>
                </div>

            </article>
            <div id="anosAnteriores-principal" class="mb-5">
                <div class="row">
                    <div class="col-12 col-md-6 p-4 text-center">

                        <div class="ante-title" style="position: relative;">
                            <h3 class="titles" id="2021" onclick="evidenciar2(this)" style="">2021</h3>
                        </div>


                        <div id="2021ante" class="relative" style=" margin-left: 20px; border-radius: 0px 20px 0px 20px;-moz-border-radius: 0px 20px 0px 20px;-webkit-border-radius: 0px 20px 0px 20px;  margin-top: 10px; border-top: 10px solid gold; background: gold;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-arrow-down-short setinha" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M8 4a.5.5 0 0 1 .5.5v5.793l2.146-2.147a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-3-3a.5.5 0 1 1 .708-.708L7.5 10.293V4.5A.5.5 0 0 1 8 4z" />
                            </svg>
                        </div>
                        <div id="2021pp" class="medias-antigas text-left" style="margin-top: 0; display: none; text-align: left;">
                            <ul>
                                <li class="Materia"><b>Linguagens</b>
                                    <ul class="Notas">
                                        <li> <span class="notaBaixa">288,7</span>
                                            <div class="vr"></div> <span class="notaAlta">801,1</span>
                                        </li>
                                    </ul>
                                <li>
                                <li class="Materia"><b>Ciências Humanas</b>
                                    <ul class="Notas">
                                        <li><span class="notaBaixa">313,7</span>
                                            <div class="vr"></div> <span class="notaAlta">862,6</span>
                                        </li>
                                    </ul>
                                <li>
                                <li class="Materia"><b>Ciências da Natureza</b>
                                    <ul class="Notas">
                                        <li><span class="notaBaixa">323,8</span>
                                            <div class="vr"></div> <span class="notaAlta">854,8</span>
                                        </li>
                                    </ul>
                                <li>
                                <li class="Materia"><b>Matemática</b>
                                    <ul class="Notas">
                                        <li><span class="notaBaixa">327,1</span>
                                            <div class="vr"></div> <span class="notaAlta">975,0</span>
                                        </li>
                                    </ul>
                                <li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 p-4 text-center">

                        <div class="ante-title" style="position: relative;">
                            <h3 class="titles" id="2020" onclick="evidenciar2(this)" style="">2020</h3>
                        </div>


                        <div id="2020ante" class="relative" style=" margin-left: 20px; border-radius: 0px 20px 0px 20px;-moz-border-radius: 0px 20px 0px 20px;-webkit-border-radius: 0px 20px 0px 20px;  margin-top: 10px; border-top: 10px solid gold; background: gold;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-arrow-down-short setinha" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M8 4a.5.5 0 0 1 .5.5v5.793l2.146-2.147a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-3-3a.5.5 0 1 1 .708-.708L7.5 10.293V4.5A.5.5 0 0 1 8 4z" />
                            </svg>
                        </div>
                        <div id="2020pp" class="medias-antigas text-left" style="margin-top: 0; display: none; text-align: left;">
                            <ul>
                                <li class="Materia"><b>Linguagens</b>
                                    <ul class="Notas">
                                        <li> <span class="notaBaixa">295,2</span>
                                            <div class="vr"></div> <span class="notaAlta">826,1</span>
                                        </li>
                                    </ul>
                                <li>
                                <li class="Materia"><b>Ciências Humanas</b>
                                    <ul class="Notas">
                                        <li><span class="notaBaixa">311,6</span>
                                            <div class="vr"></div> <span class="notaAlta">846,9</span>
                                        </li>
                                    </ul>
                                <li>
                                <li class="Materia"><b>Ciências da Natureza</b>
                                    <ul class="Notas">
                                        <li><span class="notaBaixa">307,6</span>
                                            <div class="vr"></div> <span class="notaAlta">867,1</span>
                                        </li>
                                    </ul>
                                <li>
                                <li class="Materia"><b>Matemática</b>
                                    <ul class="Notas">
                                        <li><span class="notaBaixa">310,4</span>
                                            <div class="vr"></div> <span class="notaAlta">953,1</span>
                                        </li>
                                    </ul>
                                <li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-6 p-4 text-center">

                        <div class="ante-title" style="position: relative;">
                            <h3 class="titles" id="2019" onclick="evidenciar2(this)" style="">2019</h3>
                        </div>


                        <div id="2019ante" class="relative" style=" margin-left: 20px; border-radius: 0px 20px 0px 20px;-moz-border-radius: 0px 20px 0px 20px;-webkit-border-radius: 0px 20px 0px 20px;  margin-top: 10px; border-top: 10px solid gold; background: gold;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-arrow-down-short setinha" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M8 4a.5.5 0 0 1 .5.5v5.793l2.146-2.147a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-3-3a.5.5 0 1 1 .708-.708L7.5 10.293V4.5A.5.5 0 0 1 8 4z" />
                            </svg>
                        </div>
                        <div id="2019pp" class="medias-antigas text-left" style="margin-top: 0; display: none; text-align: left;">
                            <ul>
                                <li class="Materia"><b>Linguagens</b>
                                    <ul class="Notas">
                                        <li> <span class="notaBaixa">295,2</span>
                                            <div class="vr"></div> <span class="notaAlta">826,1</span>
                                        </li>
                                    </ul>
                                <li>
                                <li class="Materia"><b>Ciências Humanas</b>
                                    <ul class="Notas">
                                        <li><span class="notaBaixa">311,6</span>
                                            <div class="vr"></div> <span class="notaAlta">846,9</span>
                                        </li>
                                    </ul>
                                <li>
                                <li class="Materia"><b>Ciências da Natureza</b>
                                    <ul class="Notas">
                                        <li><span class="notaBaixa">307,6</span>
                                            <div class="vr"></div> <span class="notaAlta">867,1</span>
                                        </li>
                                    </ul>
                                <li>
                                <li class="Materia"><b>Matemática</b>
                                    <ul class="Notas">
                                        <li><span class="notaBaixa">310,4</span>
                                            <div class="vr"></div> <span class="notaAlta">953,1</span>
                                        </li>
                                    </ul>
                                <li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 p-4 text-center">

                        <div class="ante-title" style="position: relative;">
                            <h3 class="titles" id="2018" onclick="evidenciar2(this)" style="">2018</h3>
                        </div>


                        <div id="2018ante" class="relative" style=" margin-left: 20px; border-radius: 0px 20px 0px 20px;-moz-border-radius: 0px 20px 0px 20px;-webkit-border-radius: 0px 20px 0px 20px;  margin-top: 10px; border-top: 10px solid gold; background: gold;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-arrow-down-short setinha" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M8 4a.5.5 0 0 1 .5.5v5.793l2.146-2.147a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-3-3a.5.5 0 1 1 .708-.708L7.5 10.293V4.5A.5.5 0 0 1 8 4z" />
                            </svg>
                        </div>
                        <div id="2018pp" class="medias-antigas text-left" style="margin-top: 0; display: none; text-align: left;">
                            <ul>
                                <li class="Materia"><b>Linguagens</b>
                                    <ul class="Notas">
                                        <li> <span class="notaBaixa">295,2</span>
                                            <div class="vr"></div> <span class="notaAlta">826,1</span>
                                        </li>
                                    </ul>
                                <li>
                                <li class="Materia"><b>Ciências Humanas</b>
                                    <ul class="Notas">
                                        <li><span class="notaBaixa">311,6</span>
                                            <div class="vr"></div> <span class="notaAlta">846,9</span>
                                        </li>
                                    </ul>
                                <li>
                                <li class="Materia"><b>Ciências da Natureza</b>
                                    <ul class="Notas">
                                        <li><span class="notaBaixa">307,6</span>
                                            <div class="vr"></div> <span class="notaAlta">867,1</span>
                                        </li>
                                    </ul>
                                <li>
                                <li class="Materia"><b>Matemática</b>
                                    <ul class="Notas">
                                        <li><span class="notaBaixa">310,4</span>
                                            <div class="vr"></div> <span class="notaAlta">953,1</span>
                                        </li>
                                    </ul>
                                <li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-6 p-4 text-center">

                        <div class="ante-title" style="position: relative;">
                            <h3 class="titles" id="2017" onclick="evidenciar2(this)" style="">2017</h3>
                        </div>


                        <div id="2017ante" class="relative" style=" margin-left: 20px; border-radius: 0px 20px 0px 20px;-moz-border-radius: 0px 20px 0px 20px;-webkit-border-radius: 0px 20px 0px 20px;  margin-top: 10px; border-top: 10px solid gold; background: gold;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-arrow-down-short setinha" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M8 4a.5.5 0 0 1 .5.5v5.793l2.146-2.147a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-3-3a.5.5 0 1 1 .708-.708L7.5 10.293V4.5A.5.5 0 0 1 8 4z" />
                            </svg>
                        </div>
                        <div id="2017pp" class="medias-antigas text-left" style="margin-top: 0; display: none; text-align: left;">
                            <ul>
                                <li class="Materia"><b>Linguagens</b>
                                    <ul class="Notas">
                                        <li> <span class="notaBaixa">295,2</span>
                                            <div class="vr"></div> <span class="notaAlta">826,1</span>
                                        </li>
                                    </ul>
                                <li>
                                <li class="Materia"><b>Ciências Humanas</b>
                                    <ul class="Notas">
                                        <li><span class="notaBaixa">311,6</span>
                                            <div class="vr"></div> <span class="notaAlta">846,9</span>
                                        </li>
                                    </ul>
                                <li>
                                <li class="Materia"><b>Ciências da Natureza</b>
                                    <ul class="Notas">
                                        <li><span class="notaBaixa">307,6</span>
                                            <div class="vr"></div> <span class="notaAlta">867,1</span>
                                        </li>
                                    </ul>
                                <li>
                                <li class="Materia"><b>Matemática</b>
                                    <ul class="Notas">
                                        <li><span class="notaBaixa">310,4</span>
                                            <div class="vr"></div> <span class="notaAlta">953,1</span>
                                        </li>
                                    </ul>
                                <li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 p-4 text-center">

                        <div class="ante-title" style="position: relative;">
                            <h3 class="titles" id="2016" onclick="evidenciar2(this)" style="">2016</h3>
                        </div>


                        <div id="2016ante" class="relative" style=" margin-left: 20px; border-radius: 0px 20px 0px 20px;-moz-border-radius: 0px 20px 0px 20px;-webkit-border-radius: 0px 20px 0px 20px;  margin-top: 10px; border-top: 10px solid gold; background: gold;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-arrow-down-short setinha" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M8 4a.5.5 0 0 1 .5.5v5.793l2.146-2.147a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-3-3a.5.5 0 1 1 .708-.708L7.5 10.293V4.5A.5.5 0 0 1 8 4z" />
                            </svg>
                        </div>
                        <div id="2016pp" class="medias-antigas text-left" style="margin-top: 0; display: none; text-align: left;">
                            <ul>
                                <li class="Materia"><b>Linguagens</b>
                                    <ul class="Notas">
                                        <li> <span class="notaBaixa">295,2</span>
                                            <div class="vr"></div> <span class="notaAlta">826,1</span>
                                        </li>
                                    </ul>
                                <li>
                                <li class="Materia"><b>Ciências Humanas</b>
                                    <ul class="Notas">
                                        <li><span class="notaBaixa">311,6</span>
                                            <div class="vr"></div> <span class="notaAlta">846,9</span>
                                        </li>
                                    </ul>
                                <li>
                                <li class="Materia"><b>Ciências da Natureza</b>
                                    <ul class="Notas">
                                        <li><span class="notaBaixa">307,6</span>
                                            <div class="vr"></div> <span class="notaAlta">867,1</span>
                                        </li>
                                    </ul>
                                <li>
                                <li class="Materia"><b>Matemática</b>
                                    <ul class="Notas">
                                        <li><span class="notaBaixa">310,4</span>
                                            <div class="vr"></div> <span class="notaAlta">953,1</span>
                                        </li>
                                    </ul>
                                <li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>


        </section>
    </div>


    <div style="visibility: hidden;" class="my-5"> eu existo para dar espaço</div>
    </div>




    <script>
        var vlss

        vlss = false

        function evidenciar2(y) {
            var newas = y.id
            console.log(newas + "pp")
            let meubem = newas + "pp";
            var umai = document.getElementById(meubem)
            if (umai.style.display == "none") {
                console.log("oi")
                //$(`#${newas}pp`).hide();
                umai.style.display = "block";
                $(`#${newas}ante svg`).animate({
                    deg: 180
                }, {
                    duration: 100,
                    step: function(now) {
                        $(this).css({
                            transform: 'rotate(' + now + 'deg)'
                        });
                    }
                });
            } else {
                console.log("opa");
                $(`#${newas}ante svg`).animate({
                    deg: 0
                }, {
                    duration: 100,
                    step: function(now) {
                        $(this).css({
                            transform: 'rotate(' + now + 'deg)'
                        });
                    }
                });
                //$(`#${newas}pp`).slideDown();
                umai.style.display = "none";
            }



            //console.log($(`#${newas}ante svg`).style.transform)


            //$('#anosAnteriores-principal').slideUp();



        }

        $(document).ready(function() {
            $("#mamal").animate({
                deg: 180
            }, {
                duration: 100,
                step: function(now) {
                    $(this).css({
                        transform: 'rotate(' + now + 'deg)'
                    });
                }
            });

            $('#anosAnteriores-principal').slideUp();
            vlss = true
        });

        function evidenciar(x) {



            if (!vlss) {
                //let a = document.getElementById("mamal")
                $("#mamal").animate({
                    deg: 180
                }, {
                    duration: 100,
                    step: function(now) {
                        $(this).css({
                            transform: 'rotate(' + now + 'deg)'
                        });
                    }
                });

                $('#anosAnteriores-principal').slideUp();
                vlss = true
            } else {
                $("#mamal").animate({
                    deg: 0
                }, {
                    duration: 100,
                    step: function(now) {
                        $(this).css({
                            transform: 'rotate(' + now + 'deg)'
                        });
                    }
                });
                $('#anosAnteriores-principal').slideDown();



                vlss = false
            }

        }
        //$("#alterarValor").click(function() {
        var numero = document.getElementById('aproveitamento2');
        var numero2 = document.getElementById('aproveitamento3');
        var min = 1;
        var max = 87.77;
        var ops = (max + "").split(".")[1];
        var duração = 1000; // 5 segundos

        for (var i = min; i <= max; i++) {
            setTimeout(function(nr) {
                numero.innerHTML = nr;
            }, i * 1000 / max, i);
        }
        for (var i = min; i <= ops; i++) {
            setTimeout(function(nrr) {
                numero2.innerHTML = nrr;
            }, i * 1000 / ops, i);
        }
        //});

        // $("#voltarValor").click(function() {
        //   $("#numero").text("1");
        // });
        var numero_de_acertos, numero_de_questoes

        var aproveitamento = numero_de_acertos / numero_de_questoes * 100
    </script>


    <?php include_once('../include/footer.php');

    ?>
</body>

</html>