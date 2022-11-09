<?php
session_start();
echo "Enem";
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/nav.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../css/dash.css">
    <style>
        .principal p {
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
    </style>

</head>


<body>
    <?php

    include_once('../include/navbar.php');

    ?>

    <br><br><br><br>


    <div class="container principal mt-5">

        <div style="background-color: #6730ba;">
            <p style="color: white; font-size: 150px; background-color: #6730ba;" class='enem-font text-center'> enem </p>
        </div>
        <article style="color: #a5a4a4; font-size: 19px;" class="text-center mb-5"> O que mais cai e como funciona o maior vestibular do país: a principal porta de entrada dos brasileiros para ascender na vida. </article>

        <section class="text-white">

            <h1 class="mt-3 mb-4">Afinal, o que é?</h1>
            <div class="row">
                <div class="col-12 col-md-6">
                    <p>
                        O Exame Nacional do Ensino Médio <strong>(ENEM)</strong> é um exame criado pelo Ministério da Educação (MEC) em 1998. Se trata do maior processo seletivo do Brasil, onde sua aplicação ocorre anualmente, idealizada pelo Instituto Nacional de Estudos e Pesquisas Educacionais Anísio Teixeira (INEP). A nota do exame pode ser usada para preencher vagas em programas como Sisu, ProUni e Fies, além de substituir vestibulares em instituições do país.
                    </p>
                    <p>
                        A formulação desse grande teste, segue uma padronização nos conteúdos de acordo com a autarquia do INEP, isso faz com que ocorra uma predominância de certas matérias de cada disciplina na prova ao longo dos seus anos de aplicação.

                    </p>
                </div>
                <div class="col-12 col-md-6">
                    <p>
                        A prova do ENEM possui 180 questões objetivas com 5 opções de resposta, divididas nas quatro grandes áreas do conhecimento, além de uma redação do gênero dissertativo-argumentativo, sendo 45 questões de Linguagens, 45 questões de Ciências Humanas, 45 questões de Ciências da Natureza e 45 questões de Matemática. Normalmente, a prova é aplicada em dois domingos consecutivos, sendo as provas de Linguagens, Ciências Humanas e a redação no primeiro, e as provas de Ciências da Natureza e Matemática no segundo.
                    </p>
                </div>

            </div>

        </section>

        <hr class="border border-primary border-2 opacity-50">

        <section class="text-white" style="margin-top: 75px; margin-bottom: 45px;">

            <h1 class="mt-3 mb-4"> 1º Dia </h1>
            <div class="row">
                <div class="col-12 col-md-6">
                    <h3 class="p-4 sub-titles"> História </h3>
                    <p>
                    <ul style="list-style: none;">
                        <li> - <strong> Idade Contemporânea </strong> (53 questões – 15,4%);</li>
                        <li> - <strong> Brasil Império e Historiografia </strong> (26 questões – 7,5%); </li>
                        <li> - <strong> Brasil República </strong> (16 questões – 4,6%); </li>
                        <li> - <strong> Idade Moderna </strong> (15 questões – 4,3%). </li>
                    </ul>
                    </p>
                </div>
                <div class="col-12 col-md-6">
                    <h3 class="p-4 sub-titles"> Geografia </h3>
                    <p>
                    <ul style="list-style: none;">
                        <li> - <strong> Meio ambiente e paisagens </strong> (47 questões – 17%);</li>
                        <li> - <strong> Estrutura fundiária </strong> (40 questões – 14,1%); </li>
                        <li> - <strong> Urbanização e população </strong> (31 questões – 11%); </li>
                        <li> - <strong> Geologia e Geopolítica </strong> (23 questões – 8,1%).</li>
                    </ul>
                    </p>
                </div>

                <div class="row mt-3">
                    <div class="col-12 col-md-6">
                        <h3 class="p-4 sub-titles"> Filosofia </h3>
                        <p>
                        <ul style="list-style: none;">
                            <li> - <strong> Ética e filosofia política </strong> (18 questões – 21,1%);</li>
                            <li> - <strong> Teoria do conhecimento </strong> (13 questões – 15,3%); </li>
                            <li> - <strong> Construção social da ciência </strong> (11 questões – 12,9%); </li>
                            <li> - <strong> Democracia e cidadania </strong> (10 questões – 11,8%). </li>
                        </ul>
                        </p>
                    </div>
                    <div class="col-12 col-md-6">
                        <h3 class="p-4 sub-titles"> Sociologia </h3>
                        <p>
                        <ul style="list-style: none;">
                            <li> - <strong> Movimentos Socioculturais </strong> (24 questões – 25,2%);</li>
                            <li> - <strong> Cultura, Trabalho, Política </strong> (13 questões – 13,7%); </li>
                            <li> - <strong> Gênero e Diversidade Cultural </strong> (11 questões – 11,6%).</li>
                        </ul>
                        </p>
                    </div>

                    <h1 class="mt-5 mb-4 "> 2º Dia </h1>
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <h3 class="p-4 sub-titles"> Biologia </h3>
                            <p>
                            <ul style="list-style: none;">
                                <li> - <strong> Microbiologia e Genética </strong> (55 questões – 19%);</li>
                                <li> - <strong> Ecologia </strong> (32 questões – 11,3%); </li>
                                <li> - <strong> Citologia </strong> (32 questões – 11,3%); </li>
                                <li> - <strong> Fisiologia </strong> (22 questões – 7,8%);. </li>
                            </ul>
                            </p>
                        </div>
                        <div class="col-12 col-md-6">
                            <h3 class="p-4 sub-titles"> Química </h3>
                            <p>
                            <ul style="list-style: none;">
                                <li> - <strong> Equilíbrios Químicos </strong> (63 questões – 26,8%);</li>
                                <li> - <strong> Química Orgânica e Eletroquímica </strong> (48 questões – 18,1%); </li>
                                <li> - <strong> Meio Ambiente </strong> (32 questões – 12,1%); </li>
                                <li> - <strong> Estequiometria </strong> (30 questões – 11,3%).</li>
                            </ul>
                            </p>
                        </div>
                        <div class="row mt-3">
                            <div class="col-12 col-md-6">
                                <h3 class="p-4 sub-titles"> Fisíca </h3>
                                <p>
                                <ul style="list-style: none;">
                                    <li> - <strong> Mecânica </strong> (64 questões – 30,3%);</li>
                                    <li> - <strong> Eletricidade e Energia </strong> (52 questões – 24,6%); </li>
                                    <li> - <strong> Ondulatória, Termodinâmica, Óptica </strong> (40 questões – 19%).</li>
                                </ul>
                                </p>
                            </div>
                            <div class="col-12 col-md-6">
                                <h3 class="p-4 sub-titles"> Matemática </h3>
                                <p>
                                <ul style="list-style: none;">
                                    <li> - <strong> Geometria Espacial </strong> (189 questões – 26,3%);</li>
                                    <li> - <strong> Aritmética </strong> (92 questões – 12,8%); </li>
                                    <li> - <strong> Razão e Propoção </strong> (87 questões – 12,1%); </li>
                                    <li> - <strong> Funções e Estatística </strong> (65 questões – 9%). </li>
                                </ul>
                                </p>
                            </div>

                            <p class="my-5"> Disponível em: <a href="https://www.novaconcursos.com.br/portal/artigos/materias-que-mais-caem-no-enem/" target="_blank" rel="noopener noreferrer">https://www.novaconcursos.com.br/portal/artigos/materias-que-mais-caem-no-enem/</a></p>

        </section>
    </div>
    <?php include_once('../include/footer.php');

    ?>
</body>

</html>