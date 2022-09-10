<!DOCTYPE html>
<html lang="pt-br">
<?php
session_start();
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.0/jquery.mask.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <title> Profile | Desirepedia </title>
    <style>
        h3 {
            color: #FFFFFF;
            text-shadow: 0 0 5px #FFF, 0 0 10px #FFF, 0 0 15px #FFF, 0 0 20px #49ff18, 0 0 30px #49FF18, 0 0 40px #49FF18, 0 0 55px #49FF18, 0 0 75px #49ff18;
        }



        section li {
            display: inline-block;
            font-size: 20px;
            padding: 20px;
        }

        .meio {
            background-color: white;
        }

        .select {
            background-color: aqua;
        }

        .content {
            background-color: aqua;
        }

        .dauton {
            border-color: purple;
            color: purple;
        }

        .dauton:hover {
            color: white;
            background-color: purple;
        }
    </style>
    <link rel="stylesheet" href="../css/nav.css">
</head>

<body>
    <?php

    $pdo = new PDO('mysql:host=localhost; dbname=desirepedia;', 'root', '');

    $query = "SELECT * FROM usuario_info WHERE id=" . $_SESSION['id'];

    if ($result = $pdo->query($query)) {

        /* fetch associative array */
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }

        foreach ($data as $dados) {
            $nome = isset($dados['nome']) ? $dados['nome'] : "";
            $sobrenome = isset($dados['sobrenome']) ? $dados['sobrenome'] : "";
            $telefone = isset($dados['telefone']) ? $dados['telefone'] : "";
            $cpf = isset($dados['cpf']) ? $dados['cpf'] : "";
            $cep = isset($dados['cep']) ? $dados['cep'] : "";
            $logradouro = isset($dados['logradouro']) ? $dados['logradouro'] : "";
            $bairro = isset($dados['bairro']) ? $dados['bairro'] : "";
            $complemento = isset($dados['complemento']) ? $dados['complemento'] : "";
            $cidade = isset($dados['cidade']) ? $dados['cidade'] : "";
            $estado = isset($dados['estado']) ? $dados['estado'] : "";
        }
    }





    include_once('../include/navbar.php');


    ?>
    <br><br><br><br>
    <b></b>
    </b>
    <div class="container my-5 meio border border-rounded">
        <?php
        $path = $_SERVER['DOCUMENT_ROOT'];
        $path .= "/Desirepedia/functions/imguser.php";
        include_once($path);

        //echo $_SERVER['DOCUMENT_ROOT']; 
        ?>




        <div id="perfil1_perfil1" class="row content py-3">

            <form action="javascript:void(0)" method="POST">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="form-row">
                            <div class="form-group my-2">
                                <label for="inputName"> Nome</label>
                                <input type="text" id="inputName" class="form-control" placeholder="John" required>
                            </div>
                            <div class="form-group my-2">
                                <label for="inputSurname">Sobrenome</label>
                                <input type="text" class="form-control" id="inputSurname" placeholder="Doe" required>
                            </div>


                            <div class="form-group my-2">
                                <label for="inputAddress">Telefone</label>
                                <input type="text" class="form-control" name="telefone" id="telefone" placeholder="Seu Telefone (com DDD)">
                            </div>
                            <div class="form-group my-2">
                                <label for="inputAddress">CPF</label>
                                <input type="text" value="" class="form-control" name="cpf" id="cpf" placeholder="CPF" required>
                                <div id="errorSenha1" class="invalid-feedback">
                                    Meu amigo, teu CPF está errado, muda isso aí!
                                </div>
                            </div>
                            <div class="form-group my-2">
                                <label for="inputAddress">CEP</label>
                                <input type="text" value="" class="form-control" name="cep" id="cep" placeholder="CEP">
                            </div>
                            <div class="form-group my-2">
                                <label for="inputAddress">Logradouro</label>
                                <input type="text" value="" class="form-control" name="logradouro" id="inputAddress" placeholder="Av Vinicius de Morais">
                            </div>
                            <div class="form-group my-2">
                                <label for="inputAddress">Bairro</label>
                                <input type="text" value="" class="form-control" name="bairro" id="inputAddress" placeholder="Jardim América">
                            </div>
                            <div class="form-group my-2">
                                <label for="inputAddress2">Complemento</label>
                                <input type="text" value="" class="form-control" id="inputAddress2" placeholder="Apartamento, casa, sítio...">
                            </div>
                            <div class="form-row">
                                <div class="form-group my-2">
                                    <label for="inputCity">Cidade</label>
                                    <input type="text" value="" name="cidade" placeholder="Vila Nova dos Porções" class="form-control" id="inputCity">
                                </div>

                                <div class="form-group my-2">
                                    <label for="inputState">Estado</label>
                                    <select id="inputState" class="form-control">
                                        <option selected hidden>Escolha...</option>
                                        <option value="AC">Acre</option>
                                        <option value="AL">Alagoas</option>
                                        <option value="AP">Amapá</option>
                                        <option value="AM">Amazonas</option>
                                        <option value="BA">Bahia</option>
                                        <option value="CE">Ceará</option>
                                        <option value="DF">Distrito Federal</option>
                                        <option value="ES">Espírito Santo</option>
                                        <option value="GO">Goiás</option>
                                        <option value="MA">Maranhão</option>
                                        <option value="MT">Mato Grosso</option>
                                        <option value="MS">Mato Grosso do Sul</option>
                                        <option value="MG">Minas Gerais</option>
                                        <option value="PA">Pará</option>
                                        <option value="PB">Paraíba</option>
                                        <option value="PR">Paraná</option>
                                        <option value="PE">Pernambuco</option>
                                        <option value="PI">Piauí</option>
                                        <option value="RJ">Rio de Janeiro</option>
                                        <option value="RN">Rio Grande do Norte</option>
                                        <option value="RS">Rio Grande do Sul</option>
                                        <option value="RO">Rondônia</option>
                                        <option value="RR">Roraima</option>
                                        <option value="SC">Santa Catarina</option>
                                        <option value="SP">São Paulo</option>
                                        <option value="SE">Sergipe</option>
                                        <option value="TO">Tocantins</option>
                                    </select>
                                </div>
                            </div>
                            <button type="submit" class="my-4 btn btn-lg text-center btn-outline-primary dauton">Enviar</button>
            </form>


        </div>
    </div>


    <div class="col-12 col-md-6">
        <div class="row mx-5 text-center">

            <div style='background="url(<?php echo $pathh; ?>)";'></div>
            <img width="200px" src="<?php echo $pathh; ?>" alt="mdo" class="img-thumbnail rounded float-start p-2">
        </div>
    </div>
    </div>


    </div>

    <div id="perfil2_perfil2" class="row content">

    </div>

    <script>
        $('#cpf').blur(function() {
            var cpf = $('#cpf').val().replace(/[^0-9]/g, '').toString();

            if (cpf.length == 11) {
                var v = [];

                //Calcula o primeiro dígito de verificação.
                v[0] = 1 * cpf[0] + 2 * cpf[1] + 3 * cpf[2];
                v[0] += 4 * cpf[3] + 5 * cpf[4] + 6 * cpf[5];
                v[0] += 7 * cpf[6] + 8 * cpf[7] + 9 * cpf[8];
                v[0] = v[0] % 11;
                v[0] = v[0] % 10;

                //Calcula o segundo dígito de verificação.
                v[1] = 1 * cpf[1] + 2 * cpf[2] + 3 * cpf[3];
                v[1] += 4 * cpf[4] + 5 * cpf[5] + 6 * cpf[6];
                v[1] += 7 * cpf[7] + 8 * cpf[8] + 9 * v[0];
                v[1] = v[1] % 11;
                v[1] = v[1] % 10;

                //Retorna Verdadeiro se os dígitos de verificação são os esperados.
                if ((v[0] != cpf[9]) || (v[1] != cpf[10])) {
                    $('#cpf').addClass('is-invalid');

                    $('#cpf').val('');
                    $('#cpf').focus();
                } else {
                    $('#cpf').removeClass('is-invalid');
                }
            } else {
                $('#cpf').addClass('is-invalid');

                $('#cpf').val('');
                $('#cpf').focus();
            }
        });
        $(document).ready(function() {
            var CampoCEP = $("#cep");
            CampoCEP.mask('00000-000');
            var CampoCpf = $("#cpf");
            CampoCpf.mask('000.000.000-00', {
                reverse: true
            });
            var CampoTelefone = $("#telefone");
            CampoTelefone.mask('(00) 0 0000-0000', {

            });
        });



        (function() {

            const cep = document.querySelector("input[name=cep]");
            const listStates = [
                'AC', 'AL', 'AP', 'AM', 'BA', 'CE', 'DF', 'ES', 'GO', 'MA', 'MS', 'MT', 'MG', 'PA', 'PB', 'PR', 'PE', 'PI', 'RJ', 'RN', 'RS', 'RO', 'RR', 'SC', 'SP', 'SE', 'TO',
            ];
            cep.addEventListener('blur', e => {
                const value = cep.value.replace(/[^0-9]+/, '');
                const url = `https://viacep.com.br/ws/${value}/json/`;

                fetch(url)
                    .then(response => response.json())
                    .then(json => {

                        if (json.logradouro) {

                            listStates.forEach((v) => {
                                if (json.uf == v) {
                                    var select = document.getElementById('inputState');
                                    var option;

                                    for (var i = 0; i < select.options.length; i++) {
                                        option = select.options[i];

                                        if (option.value == v) {

                                            //coleto a opção e atribuo o select à ela
                                            option.setAttribute('selected', true);

                                            // retorno o valor da consoante
                                            return;
                                        }
                                    }
                                }
                            })

                            document.querySelector('input[name=logradouro]').value = json.logradouro;
                            document.querySelector('input[name=bairro]').value = json.bairro;
                            document.querySelector('input[name=cidade]').value = json.localidade;
                            document.querySelector('input[name=estado]').value = json.uf;
                            document.querySelector('input[name=ddd]').value = json.ddd;
                        }

                    });


            });







        })();
    </script>





    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</body>

</html>