<!DOCTYPE html>
<html lang="en">
<?php
function get_client_ip()
{
    $ipaddress = '';
    if (isset($_SERVER['HTTP_CLIENT_IP']))
        $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
    else if (isset($_SERVER['HTTP_X_FORWARDED_FOR']))
        $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
    else if (isset($_SERVER['HTTP_X_FORWARDED']))
        $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
    else if (isset($_SERVER['HTTP_FORWARDED_FOR']))
        $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
    else if (isset($_SERVER['HTTP_FORWARDED']))
        $ipaddress = $_SERVER['HTTP_FORWARDED'];
    else if (isset($_SERVER['REMOTE_ADDR']))
        $ipaddress = $_SERVER['REMOTE_ADDR'];
    else
        $ipaddress = 'UNKNOWN';
    return $ipaddress;
}

function gravar($texto)
{
    //Variável arquivo armazena o nome e extensão do arquivo.
    //$arquivo = "arquivinho.txt";

    //Variável $fp armazena a conexão com o arquivo e o tipo de ação.
    //$fp = fopen($arquivo, "a+");

    //Escreve no arquivo aberto.
    //fwrite($fp, $texto." \n  ");

    //Fecha o arquivo.
    //fclose($fp);
}

gravar(get_client_ip());

?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="css/main.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bungee&family=Geo&family=Oswald:wght@300&family=Roboto:wght@100&display=swap" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Orbitron' rel='stylesheet' type='text/css'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sono&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/nav.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../css/dash.css">

    <title> Caulcule </title>
    <style>
        * {
            /*margin: 0;
        padding: 0;*/
        }

        /* body {
            background-color: black;
            color: aliceblue;
        } */

        .calc {
            font-family: 'Geo', sans-serif;
            background-color: #6730ba;
            padding: 4px;

        }

        .expressao {
            font-size: 30px;
            text-decoration: underline;
        }

        .expressao1 {
            font-size: 45px;
            color: rgb(241, 255, 250);
            /*visibility: hidden;*/
        }

        /* .container {
            background-color: rgb(32, 32, 32);
        } */

        #insert {
            border-radius: 10px;
            padding: 5px;
        }

        #insert:focus {
            border: solid 2px greenyellow;
            background-color: rgba(red, green, blue, 0);
        }

        #fatore1,
        #fatore {
            visibility: "hidden";
        }

        #time-info {
            display: none;

        }

        .lebutton {
            background: #ab79d6;
            color: #351d4a;

            align-items: center;

            border: 2px solid transparent;
            border-radius: 0.5em;

            cursor: pointer;
            display: inline-flex;
            font-family: "Baloo 2", system-ui, sans-serif;
            font-weight: 500;
            gap: 0.5em;
            justify-content: center;
            line-height: calc(4px + 2ex);
            min-width: 10ch;
            padding: 0.55em 0.75em 0.5em;
            text-align: center;
            text-decoration: none;
            transition: none .18s ease-in-out;
            transition-property: background-color, color, border-color;
        }

        .lebutton:hover {
            background: #351d4a;
            border: 2px solid #ab79d6;
            color: #ab79d6;
        }

        #conometro {
            color: #20ff20;
            position: fixed;
            bottom: 0;
        }
    </style>
</head>

<body>

    <div class="text-center display-2 mb-2 my-5" style="color: lightgreen;">Calcule de cabeça</div>
    <div class="card mb-5" style="background: #0e0f12; border-radius: 30px;">
        <div class="card-body" style="background: #0e0f12;">

            <div class="container text-white">
                <!--<div class="p-2">
                <h3 style="font: 14px 'Nunito Sans', Montserrat, Helvetica;"><img src="image/image-comunidade.png" alt="" srcset="" width="32px"> <b> COMUNIDADE ASSAAD </b></h3>
            </div> -->




                <div class="row">
                    <div class="col-md-6 col-12">
                        <h1 class="py-3 mx-3 text-center">Operação:</h1>
                        <section style="font-family: 'Sono', sans-serif;" class="text-center mb-3">
                            <span class="py-2"> Opções com conômetro </span> <br>
                            <select onclick="conometro(this.value)" name="" id="ctl-conom">
                                <option value="0">Selecione</option>
                                <option value="1">10 questões - 3 min</option>
                                <option value="2">15 questões - 5 min</option>
                                <option value="3">20 questões - 5 min</option>
                                <option value="4">08 questões - 3 min</option>
                                <option value="5">10 questoes - 1 min</option>
                            </select>
                        </section>
                        <div class="row" style="font-family: 'Sono', sans-serif;">
                            <div class="col-md-6 col-6">
                                <table>
                                    <tr>
                                        <td>
                                            <input class="form-check-input opt" type="radio" name="operador" id="soma" onclick="dcp(1)">
                                        </td>
                                        <td>
                                            <label for="soma" class="px-2">Soma</label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input class="form-check-input opt" type="radio" name="operador" id="sub" onclick="dcp(2)">
                                        </td>
                                        <td>
                                            <label for="sub" class="px-2">Subtração</label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input class="form-check-input opt" type="radio" name="operador" id="mult" onclick="dcp(3)">
                                        </td>
                                        <td>
                                            <label for="mult" class="px-2">Multiplicação</label>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <input class="form-check-input opt" type="radio" name="operador" id="div" onclick="dcp(4)">
                                        </td>
                                        <td>
                                            <label for="div" class="px-2">Divisão</label>

                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-6">
                                <table>
                                    <tr>
                                        <td>
                                            <input type="radio" name="tipo" id="r1" onclick="hours(1)">
                                        </td>
                                        <td>
                                            <label class="px-2" for="r1">Entre 1 e 100</label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="radio" name="tipo" id="r2" onclick="hours(2)">
                                        </td>
                                        <td>
                                            <label class="px-2" for="r2">Entre 100 e 999</label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="radio" class="farmax" id="fatore1" name="tipo" onclick="hours(3)" style="visibility: hidden;">
                                        </td>
                                        <td>
                                            <label class="px-2 farmax" id="fatore" for="r3"> </label>
                                        </td>
                                    </tr>

                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-12" style="background-color: #18181c; border-radius: 25px; padding: 5px;">

                        <div class="text-center">
                            <p class="calc s-10 display-5 my-5 mx-3">Calcule a expressão:</p>

                            <p class="expressao1"> </p>
                            <p class="expressao"> 0 + 0 </p>
                            <h1> Resultado </h1>
                            <input style="padding: 5px; font-size: 20px; background: none; color: #d39eff; text-align: center; border: 4px solid #7b18cc; " type="number" style="text-align: center;" name="" id="insert" onclick="exlux()" onkeypress="enter(event)">
                            <p></p>
                            <button class="btn btn-danger text-center" style="visibility: hidden;" id="verificar" onclick="verificar()">
                                Verificar </button>



                            <p class="result mt-5"> 0 </p>


                            <button class="lebutton mb-4" onclick="gerar()"> Gerar </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">

        <article class="card my-4 p-3 text-white" style="background: #0e0f12; border-radius: 30px;text-indent: 32px; font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', 'Roboto', 'Oxygen-Sans', 'Ubuntu', 'Cantarell', 'Helvetica Neue', sans-serif; font-size: 20px;">
            A prova do ENEM, como você já viu em módulos anteriores, possui poucas quantidades de caúculos complexos. Todavia, há uma extensa carga de
            caúculos simples, e, estes sim, podem trazer grandes dores de cabeça caso o aluno não saiba resolve-los, pois poderá corroborar na perda de tempo
            útil para realização da prova. <br>
            Nesse âmbito, fizemos essa parte do site dedicado especialmente para aqueles que possuem essa necessidade em realizar contas de uma forma rápida (não precisar caúcular no papel), e assim
            aumentar sua velocidade na resolução de todas as questões. <br>
            Bons Estudos!

        </article>
    </div>






    </div>
    <div id="conometro">
        <span style="font-family: 'Orbitron', sans-serif;" id="hora"></span>
        <span style="font-family: 'Orbitron', sans-serif;" id="minuto"></span>
        <span style="font-family: 'Orbitron', sans-serif;" id="segundo"></span>
        <br>
    </div>

    <div id="time-info" class="alert alert-danger mt-2" role="alert"></div>



    <?php include_once('../include/footer.php');

    ?>

</body>
<script>
    document.getElementById('insert').focus();

    /*
    var intervalo;
    
    function tempo(op) {
        if (op == 1) {
            document.getElementById('parar').style.display = "block";
            document.getElementById('comeca').style.display = "none";
        }
        var s = 1;
        var m = 0;
        var h = 0;
        intervalo = window.setInterval(function() {
            if (s == 60) { m++; s = 0; }
            if (m == 60) { h++; s = 0; m = 0; }
            if (h < 10) document.getElementById("hora").innerHTML = "0" + h + "h"; else document.getElementById("hora").innerHTML = h + "h";
            if (s < 10) document.getElementById("segundo").innerHTML = "0" + s + "s"; else document.getElementById("segundo").innerHTML = s + "s";
            if (m < 10) document.getElementById("minuto").innerHTML = "0" + m + "m"; else document.getElementById("minuto").innerHTML = m + "m";		
            s++;
        },1000);
    }
    
    function parar() {
        window.clearInterval(intervalo);
        document.getElementById('parar').style.display = "none";
        document.getElementById('comeca').style.display = "block";
    }
    
    function volta() {
        document.getElementById('voltas').innerHTML += document.getElementById('hora').firstChild.data + "" + document.getElementById('minuto').firstChild.data + "" + document.getElementById('segundo').firstChild.data + "<br>";
    }
    
    function limpa() {
        document.getElementById('voltas').innerHTML = "";
    }
    window.onload=tempo;
    */
</script>
<script src="<?php echo url(); ?>/Desirepedia/extra/include/calculator-main/js/mind.js">
</script>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</html>