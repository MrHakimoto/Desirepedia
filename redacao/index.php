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
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../css/dash.css">
    <style>
        .redation p {
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

        .redation ul {
            font-size: 21px;

        }

        .upper-title {
            color: #35bcf1;
        }

        #scroll {
            position: fixed;
            left: 40px;
            bottom: 40px;
            cursor: pointer;
            width: 50px;
            height: 50px;
            background-color: purple;
            text-indent: -9999px;
            display: none;
            border-radius: 60px;
            box-shadow: -1px 3px 7px rgba(0, 0, 0, .9)
        }

        #scroll span {
            position: absolute;
            top: 50%;
            left: 50%;
            margin-left: -10px;
            margin-top: -17px;
            height: 0;
            width: 0;
            border: 10px solid transparent;
            border-bottom-color: #fff
        }

        #scroll:hover {
            background-color: #A80000;
            opacity: 1
        }
    </style>
</head>


<body>
    <?php

    include_once('../include/navbar.php');

    ?>

    <br><br><br><br>


    <div class="container mt-5 redation">

        <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark" style="background-image: url(../database/BACKGROUND-REDACION.png);">
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

        <article class="mt-4">
            <div class="row">


                <aside class="col-md-4 blog-sidebar">
                    <div class="p-3 mb-3 bg-light rounded">
                        <h4 class="font-italic">Importância</h4>
                        <p class="mb-0">A nota da redação é de longe a mais importante de todos no exame, ela equivale a <em>vinte porcento ( <strong>20%</strong> )</em> da média final que você obter. Então, não a trate com desprezo, e leia, cuidadosamente, as informações aqui apresentadas, viu?!</p>
                    </div>

                    <div class="p-3">
                        <h4 class="font-italic text-white">Competências</h4>
                        <ol class="list-unstyled mb-0">
                            <li><a href="#comp1">Competência 1</a></li>
                            <li><a href="#comp2">Competência 2</a></li>
                            <li><a href="#comp3">Competência 3</a></li>
                            <li><a href="#comp4">Competência 4</a></li>
                            <li><a href="#comp5">Competência 5</a></li>
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

                <div class="col-md-8 blog-main">

                    <article class="just">
                        <h1 id="comp1" class="upper-title my-5">Competência 1</h1>
                        <div class="text-white">
                            <h3 class="mb-2">Domínio da escrita formal da língua portuguesa</h3>

                            <ul style="list-style: none; color: #edeced;" class="mb-4">
                                <li>
                                    <p style="">É avaliado se a redação do participante está adequada às regras de ortografia, como acentuação, ortografia, uso de hífen, emprego de letras maiúsculas e minúsculas e separação silábica. Ainda são analisadas a regência verbal e nominal, concordância verbal e nominal, pontuação, paralelismo, emprego de pronomes e crase.</p>
                                </li>
                                <li>
                                    <p>São seis níveis de desempenho:</p>
                                </li>
                            </ul>
                        </div>

                        <table class="table border rounded p-2 d-flex justify-content-center mb-5" style="color: lightgreen;">
                            <tr>
                                <td>200 pontos</td>
                                <td>Demonstra excelente domínio da modalidade escrita formal da língua
                                    Portuguesa e de escolha de registro. Desvios gramaticais ou de convenções
                                    da escrita serão aceitos somente como excepcionalidade e quando não
                                    caracterizarem reincidência.</td>
                            </tr>
                            <tr>
                                <td>160 pontos</td>
                                <td>Demonstra bom domínio da modalidade escrita formal da língua portuguesa e de
                                    escolha de registro, com poucos desvios gramaticais é de convenções da escrita.</td>
                            </tr>
                            <tr>
                                <td>120 pontos</td>
                                <td> Demonstra domínio mediano da modalidade escrita formal da língua portuguesa
                                    e de escolha de registro, com alguns desvios gramaticais e de convenções da
                                    escrita.</td>
                            </tr>
                            <tr>
                                <td> 80 pontos</td>
                                <td>Demonstra domínio insuficiente da modafidade escrita formal da língua
                                    portuguesa, com muitos desvios gramaticais, de escolha de registro e de
                                    convenções da escrita.</td>
                            </tr>
                            <tr>
                                <td>40 pontos</td>
                                <td>Demonstra domínio precário da modalidade escrita formal da língua portuguesa,
                                    de forma sistemática, com diversificados e frequentes desvios gramaticais, de
                                    eescolha de registro e de convenções da escrita.</td>
                            </tr>
                            <tr>
                                <td>O ponto</td>
                                <td>Demonstra desconhecimento da modalidade escrita formal da língua
                                    Portuguesa</td>
                            </tr>



                        </table>
                    </article>

                    <article class="just">
                        <h1 id="comp2" class="upper-title my-5">Competência 2</h1>
                        <div class="text-white">
                            <h3 class="mb-2">Compreender o tema e não fugir do que é proposto</h3>

                            <ul style="list-style: none; color: #edeced;" class="mb-4">
                                <li>
                                    <p style="">Avalia as habilidades integradas de leitura e de escrita do candidato. O tema constitui o núcleo das ideias sobre as quais a redação deve ser organizada e é caracterizado por ser uma delimitação de um assunto mais abrangente.</p>
                                </li>
                                <li>
                                    <p>Eis os seis níveis de desempenho:</p>
                                </li>
                            </ul>
                        </div>

                        <table class="table border rounded p-2 d-flex justify-content-center mb-5" style="color: lightgrey;">
                            <tr>
                                <td>200 pontos</td>
                                <td>Desenvolve o tema por meio de argumentação consistente, a partir de um
                                    repertório sociocultural produtivo e apresenta excelente domiínio do texto dissertativo-argumentativo.</td>
                            </tr>
                            <tr>
                                <td>160 pontos</td>
                                <td>Desenvolve o tema por meio de argumentação consistente e apresenta
                                    bom domínio do texto dissertativo-argumentativo, com proposição,
                                    argumentação e conclusão.</td>
                            </tr>
                            <tr>
                                <td>120 pontos</td>
                                <td> Desenvolve 0 tema por meio de argumentação previsível e apresenta
                                    domínio mediano do texto dissertativo-argumentativo, com proposição,
                                    argumentação e conclusão.</td>
                            </tr>
                            <tr>
                                <td> 80 pontos</td>
                                <td>Desenvolve o tema recorrendo à cópia de trechos dos textos motivadores
                                    0 pontos 'ou apresenta domínio insuficiente do texto dissertativo-argumentativo, não
                                    atendendo à estrutura com proposição, argumentação e conclusão.</td>
                            </tr>
                            <tr>
                                <td>40 pontos</td>
                                <td>Apresenta o assunto, tangenciando o tema, ou demonstra domínio precário do
                                    texto dissertativo-argumentativo, com traços constantes de outros tipos textuais.</td>
                            </tr>
                            <tr>
                                <td>O ponto</td>
                                <td> Fuga ao tema/não atendimento à estrutura dissertativo-argumentativa.
                                    Nestes casos a redação recebe nota zero e é anulada.</td>
                            </tr>
                        </table>

                    </article>

                    <article class="just">
                        <h1 id="comp3" class="upper-title my-5">Competência 3</h1>
                        <div class="text-white">
                            <h3 class="mb-2">Selecionar, relacionar, organizar e interpretar informações, fatos, opiniões e argumentos em defesa de um ponto de vista</h3>

                            <ul style="list-style: none; color: #edeced;" class="mb-4">
                                <li>
                                    <p style="">O candidato precisa elaborar um texto que apresente, claramente, uma ideia a ser defendida e os argumentos que justifiquem a posição assumida em relação à temática da proposta da redação. Trata da coerência e da plausibilidade entre as ideias apresentadas no texto, o que é garantido pelo planejamento prévio à escrita, ou seja, pela elaboração de um projeto de texto.</p>
                                </li>
                                <li>
                                    <p>Eis os seis níveis de desempenho: </p>
                                </li>
                            </ul>
                        </div>

                        <table class="table border rounded p-2 d-flex justify-content-center mb-5" style="color: lightcyan;">
                            <tr>
                                <td>200 pontos</td>
                                <td>Apresenta informações, fatos e opiniões relacionados ao tema, de forma consistente e organizada,
                                    configurando autoria, em defesa de um ponto de vista.
                                </td>
                            </tr>
                            <tr>
                                <td>160 pontos</td>
                                <td>Apresenta informações, fatos e opiniões relacionados ao tema, de forma organizada,
                                    com indícios de autoria, em defesa de um ponto de vista.</td>
                            </tr>
                            <tr>
                                <td>120 pontos</td>
                                <td> Apresenta informações, fatos e opiniões relacionados ao tema, limitados aos argumentos
                                    dos textos motivadores e pouco organizados, em defesa de um ponto de vista.</td>
                            </tr>
                            <tr>
                                <td> 80 pontos</td>
                                <td>Apresenta informações, fatos e opiniões relacionados ao tema, mas desorganizados
                                    ou contraditórios e limitados aos argumentos dos textos motivadores, em defesa de
                                    um ponto de vista.</td>
                            </tr>
                            <tr>
                                <td>40 pontos</td>
                                <td>Apresenta informações, fatos e opiniões pouco relacionados ao tema ou
                                    incoerentes e sem defesa de um ponto de vista.</td>
                            </tr>
                            <tr>
                                <td>O ponto</td>
                                <td>Apresenta informações, fatos e opiniões não relacionados ao tema e sem defesa de

                                    um ponto de vista.</td>
                            </tr>
                        </table>
                    </article>

                    <article class="just">
                        <h1 id="comp4" class="upper-title my-5">Competência 4</h1>
                        <div class="text-white">
                            <h3 class="mb-2">Conhecimento dos mecanismos linguísticos necessários para a construção da argumentação</h3>

                            <ul style="list-style: none; color: #edeced;" class="mb-4">
                                <li>
                                    <p style="">O candidato precisa elaborar um texto que apresente, claramente, uma ideia a ser defendida e os argumentos que justifiquem a posição assumida em relação à temática da proposta da redação. Trata da coerência e da plausibilidade entre as ideias apresentadas no texto, o que é garantido pelo planejamento prévio à escrita, ou seja, pela elaboração de um projeto de texto.</p>
                                </li>
                                <li>
                                    <p>Abaixo, seguem os seis níveis de desempenho: </p>
                                </li>
                            </ul>
                        </div>

                        <table class="table border rounded p-2 d-flex justify-content-center mb-5" style="color: lightblue;">
                            <tr>
                                <td>200 pontos</td>
                                <td>Articula bem as partes do texto e apresenta repertório
                                    diversificado de recursos coesivos.
                                </td>
                            </tr>
                            <tr>
                                <td>160 pontos</td>
                                <td>Articula bem as partes do texto, com poucas inadequações, e apresenta repertório
                                    diversificado de recursos coesivos.</td>
                            </tr>
                            <tr>
                                <td>120 pontos</td>
                                <td> Articula as partes do texto, de forma mediana, com inadequações, e apresenta
                                    repertório pouco diversificado de recursos coesivos.</td>
                            </tr>
                            <tr>
                                <td> 80 pontos</td>
                                <td>Articula as partes do texto, de forma insuficiente, com muitas
                                    inadequações e apresenta repertório limitado de recursos coesivos.</td>
                            </tr>
                            <tr>
                                <td>40 pontos</td>
                                <td>Articula as partes do texto de forma precária.</td>
                            </tr>
                            <tr>
                                <td>O ponto</td>
                                <td>Não articula as informações.</td>
                            </tr>
                        </table>

                    </article>

                    <article class="just">
                        <h1 id="comp5" class="upper-title my-5">Competência 5</h1>
                        <div class="text-white">
                            <h3 class="mb-2">Respeito aos direitos humanos</h3>

                            <ul style="list-style: none; color: #edeced;" class="mb-4">
                                <li>
                                    <p style="">Apresentar uma proposta de intervenção para o problema abordado que respeite os direitos humanos. Propor uma intervenção para o problema apresentado pelo tema significa sugerir uma iniciativa que busque, mesmo que minimamente, enfrentá-lo. A elaboração de uma proposta de intervenção na prova de redação do Enem representa uma ocasião para que o candidato demonstre o preparo para o exercício da cidadania, para atuar na realidade em consonância com os direitos humanos.</p>
                                </li>
                                <li>
                                    <p>Eis os seis níveis de desempenho: </p>
                                </li>
                            </ul>
                        </div>

                        <table class="table border rounded p-2 d-flex justify-content-center mb-5" style="color: FFE1E1;">
                            <tr>
                                <td>200 pontos</td>
                                <td>Elabora muito bem proposta de intervenção, detalhada, relacionada ao
                                    tema e articulada à discussão desenvolvida no texto.
                                </td>
                            </tr>
                            <tr>
                                <td>160 pontos</td>
                                <td>Elabora bem proposta de intervenção relacionada ao
                                    tema e articulada à discussão desenvolvida no texto.</td>
                            </tr>
                            <tr>
                                <td>120 pontos</td>
                                <td> Elabora, de forma mediana, proposta de intervenção relacionada ao
                                    tema e articulada à discussão desenvolvida no texto.</td>
                            </tr>
                            <tr>
                                <td> 80 pontos</td>
                                <td>Elabora, de forma insuficiente, proposta de intervenção relacionada ao tema, ou
                                    não articulada com a discussão desenvolvida no texto..</td>
                            </tr>
                            <tr>
                                <td>40 pontos</td>
                                <td>Apresenta proposta de intervenção vaga, precária ou relacionada apenas ao assunto.</td>
                            </tr>
                            <tr>
                                <td>O ponto</td>
                                <td>Não apresenta proposta de intervenção ou apresenta proposta não relacionada
                                    ao tema ou ao assunto.</td>
                            </tr>
                        </table>
                    </article>

                    <span class="my-5 underline" style="color:#a24ddb">Disponível em: <a href="http://portal.mec.gov.br/ultimas-noticias/418-enem-946573306/81381-conheca-as-cinco-competencias-cobradas-na-redacao-do-enem" target="_blank"> http://portal.mec.gov.br/ultimas-noticias/418-enem-946573306/81381-conheca-as-cinco-competencias-cobradas-na-redacao-do-enem</a></span>
                </div>


        </article>

    </div>



    </div>

    <a href='#' id='scroll' title='Voltar ao Topo'>Topo<span /></a>

    <script>
        $(document).ready(function() {
            $(window).scroll(function() {
                if ($(this).scrollTop() > 10) {
                    $('#scroll').fadeIn();
                } else {
                    $('#scroll').fadeOut();
                }
            });

            $('#scroll').click(function() {
                $('html, body').animate({
                    scrollTop: 50
                }, 600);
                return false;
            });
        });
    </script>
    <?php include_once('../include/footer.php');

    ?>
</body>

</html>