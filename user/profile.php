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
    <title> Dev's | Desirepedia </title>
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
    <br><br><br><b>rad2degbr
        <b></b>
    </b>
    <div class="container mt-5 meio">

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
            <form action="">
                <input type="text" class="form-control" placeholder="Nome" value="<?php echo $_SESSION['nome']; ?>" id="login_correto" name="user" required>
                <button class="btn btn-outline"> Salvar Alterações </button>
            </form>
        </div>

        <div id="perfil2_perfil2" class="row content" style="display: none;">
            <p>Alterar foto</p>
            <form action="javascript:void(0)" method="POST" id="f_alterarfoto" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="exampleFormControlFile1">Example file input</label>
                    <input type="file" name="arquivo_alteracao" class="form-control-file" id="exampleFormControlFile1">

                    <br> <br>
                    <button type="submit"> Enviar </button>
                </div>
            </form>
        </div>

        <script>
            document.getElementById("f_alterarfoto").addEventListener('submit', alterar);


            // URL TROCARURL

            function alterar(env) {
                var form, prct
                form = new FormData(env.target)
                $.ajax({
                    method: 'POST',
                    url: "http://localhost/Desirepedia/functions/newfile.php",
                    dataType: 'json',
                    data: form,
                    cache: false,
                    processData: false,
                    success: function(e) {
                        console.log(e)
                    },
                    error: function(e) {
                        console.log(e)
                    },
                    progress: function(e) {
                        //make sure we can compute the length
                        if (e.lengthComputable) {
                            //calculate the percentage loaded
                            var pct = (e.loaded / e.total) * 100;

                            //log percentage loaded
                            console.log(pct);
                        }
                        //this usually happens when Content-Length isn't set
                        else {
                            console.warn('Content Length not reported!');
                        }
                    }
                }).done(function(e) {
                    console.log(e)
                    // Do something
                })
            }
        </script>



        <div id="perfil3_perfil3" class="row content" style="display: none;">
            <p>Email</p>

            <form action="">
                <input type="text" class="form-control" placeholder="Nome" value="<?php echo $_SESSION['email']; ?>" id="login_correto" name="user" required>
                <button class="btn btn-outline"> Salvar Alterações </button>
            </form>
        </div>


        <div id="perfil4_perfil4" class="row content" style="display: none;">
            <p>Senha</p>

            <form action="javascript:void(0)" id="btn-prosseguir">
                <p>Coloque a sua atual senha, primeiro: </p>
                <div class="input-group">
                    <input type="password" class="form-control" placeholder="Coloque sua senha" id="senhaAtual">


                    <div id="errorSenha1" class="invalid-feedback">
                        Senha não autenticada!
                    </div>
                </div>
                <br>
                <button class="btn btn-outline my-3"> Prosseguir </button> <br>
            </form>

            <form id="senha-correto" action="javascript:void(0)" style="display: none;">
                <p>Nova senha: </p>
                <p>
                <div class="input-group">
                    <input type="password" class="form-control" onkeyup="senha1(this.id)" onkeydown="senha1(this.id)" placeholder="Senha" id="senha_nova_correto1" name="user" required>
                    <div id="errorSenhaNova" class="invalid-feedback">
                        .
                    </div>
                </div>
                </p>
                <p>Repita a senha: </p>
                <p>
                <div class="input-group">
                    <input type="password" class="form-control" onkeyup="senha2(this.id)" onkeydown="senha2(this.id)" placeholder="Repita" id="senha_nova_correto2" name="user" required>
                    <div id="errorSenhaNova2" class="invalid-feedback">
                        As senhas não são consonântes!
                    </div>
                </div>
                </p>
                <div class="input-group">
                <button class="btn btn-outline my-3" id="button-salvar"> Salvar Alterações </button> <br>
                <div id="errorSenhaNova3" class="invalid-feedback">
                        Há erro no formulário!
                    </div>
                </div>
            </form>
        </div>

        <script>
            function liberar(b) {
                for (var i = 1; i < 5; i++) {
                    $(`#perfil${i}`).removeClass('select');
                }
                for (var i = 1; i < 5; i++) {
                    $(`#perfil${i}_perfil${i}`).css('display', 'none');
                }
                $(`#${b.id}`).addClass('select');
                $(`#${b.id}_${b.id}`).css('display', 'block');
            }

            function validadeEmail() {
                var valor_inpt = $(`#${x}`);

                if (!validaEmail(valor_inpt.val())) {
                    $("#errorMail").text('Por favor, coloque um e-mail válido!');
                    valor_inpt.addClass('is-invalid')
                    
                } else {

                    var campo = $(`#${x}`).val();
                    var vr = "register";
                    console.log(campo, "campo")
                    //console.log(campo, "slv");
                    $.ajax({
                        url: "http://localhost/Desirepedia/functions/consulta.php",
                        method: "POST",
                        data: {
                            emailR: campo,
                            type: vr
                        },
                        dataType: "json"
                    }).done(function(r) {
                        console.log(r, "value")
                        if (r) {
                            valor_inpt.removeClass('is-invalid')
                            
                        } else {
                            $("#errorMail").text('Email já existente, tente outro!');
                            valor_inpt.addClass('is-invalid')
                            
                        }
                    })

                    

                    valor_inpt.removeClass('is-invalid')
                }




                function validaEmail(email) {
                    var regex = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
                    return regex.test(email);
                }
            }

            $("#btn-prosseguir").on('submit', () => {
                console.log("OES")
                var SenhaAtual = $("#senhaAtual").val();
                var vr = "passAct";
                $.ajax({
                    url: "http://localhost/Desirepedia/functions/changeUser.php",
                    method: "POST",
                    data: {
                        data: SenhaAtual,
                        type: vr
                    },
                    dataType: "json"
                }).done(function(r) {

                    console.log(r)

                    if (r) {
                        console.log("TAMO AE    ")
                        $("#senhaAtual").val("")
                        $("#senha-correto").css('display', 'block');
                        $("#btn-prosseguir").css('display', 'none')

                    } else {
                        $("#senhaAtual").val("")

                        $("#senhaAtual").addClass('is-invalid');

                    }
                    // console.log(r, "value")
                    // if (r) {
                    //     valor_inpt.removeClass('is-invalid')
                    //     prevent[1] = true;
                    // } else {
                    //     $("#errorMail").text('Email já existente, tente outro!');
                    //     valor_inpt.addClass('is-invalid')
                    //     prevent[1] = false;
                    // }
                })
            })
            var prevent = [];
            prevent[1] = false;
            function senha1(x) {
                var valor_inpt = $(`#${x}`);

                let numeros = /[0-9]/;
                let maiscula = /[A-Z]/;

                if (valor_inpt.val().length < 8) {
                    valor_inpt.addClass('is-invalid')
                    $("#errorSenhaNova").text('Por favor, coloque pelo menos 8 caracteres!');
                    prevent[0] = false;
                } else {
                    if (!numeros.test(valor_inpt.val())) {
                        valor_inpt.addClass('is-invalid')
                        $("#errorSenhaNova").text('Por favor, coloque ao menos 1 número, em sua senha!');
                        prevent[0] = false;
                    } else {
                        if (!maiscula.test(valor_inpt.val())) {
                            valor_inpt.addClass('is-invalid')
                            $("#errorSenhaNova").text('Por favor, coloque ao menos um caracter maisculo!');
                            prevent[0] = false;
                        } else {
                            valor_inpt.removeClass('is-invalid');
                            prevent[0] = true;
                        }
                    }
                }

            }

            function senha2(x) {
                var valor_inpt = $(`#${x}`);

                if (valor_inpt.val().length >= 8) {
                    if (valor_inpt.val() != $("#senha_nova_correto1").val()) {
                        valor_inpt.addClass('is-invalid')
                        prevent[1] = false;
                    } else {
                        valor_inpt.removeClass('is-invalid')
                        prevent[1] = true;
                    }
                }

            }

            $("#senha-correto").on("submit", function(){
                prevent.forEach((values) => {
                    if (!values) {
                        $("#button-salvar").addClass('is-invalid');
                    } else {
                        $("#button-salvar").removeClass('is-invalid');
                    }
                })
                
                var SenhaNova = $("#senha_nova_correto1").val();
                var vr = "passNew";
                $.ajax({
                    url: "http://localhost/Desirepedia/functions/changeUser.php",
                    method: "POST",
                    data: {
                        data: SenhaNova,
                        type: vr
                    },
                    dataType: "json"
                }).done(function(r) {

                    console.log(r)

                    if (r) {
                        console.log("TAMO AE    ")
                        $("#senhaAtual").val("")
                        $("#senha-correto").css('display', 'block');
                        $("#btn-prosseguir").css('display', 'none')

                    } else {
                        $("#senhaAtual").val("")

                        $("#senhaAtual").addClass('is-invalid');

                    }
                    // console.log(r, "value")
                    // if (r) {
                    //     valor_inpt.removeClass('is-invalid')
                    //     prevent[1] = true;
                    // } else {
                    //     $("#errorMail").text('Email já existente, tente outro!');
                    //     valor_inpt.addClass('is-invalid')
                    //     prevent[1] = false;
                    // }
                })

                
                //console.log("FOI!")
                

            })
        </script>





        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</body>

</html>