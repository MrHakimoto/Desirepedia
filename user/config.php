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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <title> Profile | Desirepedia </title>
    <style>
        h3 {
            color: #FFFFFF;
            text-shadow: 0 0 5px #FFF, 0 0 10px #FFF, 0 0 15px #FFF, 0 0 20px #49ff18, 0 0 30px #49FF18, 0 0 40px #49FF18, 0 0 55px #49FF18, 0 0 75px #49ff18;
        }

        .row img {
            box-shadow: inset 0px 0px 18px 1px #2E77FF;
            box-shadow: 0px 0px 11px 4px #FC4CFF;
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
    </style>
    <link rel="stylesheet" href="../css/nav.css">
</head>

<body>
    <?php

    include_once('../include/navbar.php');


    ?>
    <br><br><br><br>
    <b></b>
    </b>
    <div class="container mt-5 meio">
        <?php echo $_SERVER['DOCUMENT_ROOT']; ?>


        <div class="row">
            <section>
                <div>
                    <ul style="list-style: none; ">
                        <li id="perfil1" class="select" onclick="liberar(this)"> Alterar nome de Úsuario </li>
                        <li id="perfil2" onclick="liberar(this)"> Alterar Foto de perfil </li>
                        <li id="perfil3" onclick="liberar(this)"> Alterar E-mail </li>
                        <li id="perfil4" onclick="liberar(this)"> Alterar Senha </li>

                    </ul>
                </div>
            </section>
        </div>

        <div id="perfil1_perfil1" class="row content">
            <p>Nome</p>
            <form action="pastadestino.php" method="POST">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputName">Nome</label>
                        <input type="text" id="inputName" class="form-control" placeholder="John" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputSurname">Sobrenome</label>
                        <input type="text" class="form-control" id="inputSurname" placeholder="Doe" required>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="inputAddress">CEP</label>
                    <input type="text" class="form-control" name="cep" id="cep" placeholder="CEP" required>
                </div>
                <div class="form-group">
                    <label for="inputAddress">Logradouro</label>
                    <input type="text" class="form-control" name="logradouro" id="inputAddress" placeholder="Av Vinicius de Morais" required>
                </div>
                <div class="form-group">
                    <label for="inputAddress">Bairro</label>
                    <input type="text" class="form-control" name="bairro" id="inputAddress" placeholder="Jardim América" required>
                </div>
                <div class="form-group">
                    <label for="inputAddress2">Complemento</label>
                    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartamento, casa, sítio...">
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputCity">Cidade</label>
                        <input type="text" name="cidade" placeholder="Vila Nova dos Porções" class="form-control" id="inputCity" required>
                    </div>

                    <div class="form-group col-md-4">
                        <label for="inputState">Estado</label>
                        <select id="inputState" class="form-control" required>
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
                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
        </div>

        <div id="perfil2_perfil2" class="row content">
            
        </div>

        <script>
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
                            }

                        });


                });







            })();

        </script>





        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</body>

</html>