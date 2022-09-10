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



        .meio {
            background-color: white;
        }

        .select {
            background-color: aqua;
        }

        .content {
            background-color: aqua;
        }


        :root {
            --bs-primary: #9FA8DA !important;
            --bs-primary-rgb: 159, 168, 218 !important;
        }

        .dauton {
            border-color: purple; color: purple; 
        }
        .dauton:hover 
        {
            color:white;
            background-color: purple;
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
        <?php // echo $_SERVER['DOCUMENT_ROOT']; ?>


        <div class="row py-5">
            <section>
                <div class="card text-center">
                    <div class="card-header">
                        <ul class="nav nav-tabs card-header-tabs">
                            <li class="nav-item">
                                <a id="perfil1" class="nav-link active" onclick="liberar(this)" href="javascript:void(0)">Alterar nome de Úsuario</a>
                            </li>
                            <li class="nav-item">
                                <a id="perfil2" class="nav-link" onclick="liberar(this)" href="javascript:void(0)">Alterar Foto de perfil</a>
                            </li>
                            <li class="nav-item">
                                <a id="perfil3" class="nav-link" onclick="liberar(this)" href="javascript:void(0)">Alterar E-mail</a>
                            </li>
                            <li class="nav-item">
                                <a id="perfil4" class="nav-link" onclick="liberar(this)" href="javascript:void(0)">Alterar Senha</a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <!-- <h5 class="card-title">Special title treatment</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a> -->

                        <!-- O 1! -->
                        <div id="perfil1_perfil1">
                            <p>Nome</p>
                            <form action="javascript:void(0)" id="formName">
                                <div class="input-group">
                                    <input type="text" class="form-control" onkeyup="changeName(this.id)" onkeydown="changeName(this.id)" placeholder="Nome" value="<?php echo $_SESSION['nome']; ?>" id="novo_Nome" name="user" required>
                                    <div id="errorSenha1" class="invalid-feedback">
                                        Meu amigo, teu nome de usuário deve haver ao menos 5 caracteres!
                                    </div>
                                </div>
                                <button class="btn btn-outline-primary dauton my-3" > Salvar Alterações </button>
                            </form>
                        </div>

                        <!-- O 2! -->
                        <div id="perfil2_perfil2" style="display: none;">
                            <p>Alterar foto <br> (somente arquivos: .png, .jpg ou .jpeg)</p>
                            <form action="javascript:void(0)" method="POST" id="f_alterarfoto" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="exampleFormControlFile1">Escolha o arquivo adequado, cavalheiro</label>
                                    <input type="file" name="arquivo_alteracao" class="form-control-file pb-2" id="exampleFormControlFile1">

                                    <div id="progresssbar" class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>
                                    </div>
                                    <p id="feedback" style="display: none;"> Foto enviada com sucesso! </p>
                                    <br> <br>
                                    <button type="submit" class="btn btn-outline-primary dauton my-3"> Enviar </button>
                                </div>
                            </form>
                        </div>

                        <!-- O 3! -->
                        <div id="perfil3_perfil3" class="row" style="display: none;">
                            <p>Email</p>

                            <form action="javascript:void(0)" id="alterar_email">
                                <div class="input-group my-3">
                                    <input type="email" class="form-control" onkeyup="validadeEmail(this.id)" onkeydown="validadeEmail(this.id)" placeholder="Nome" value="<?php echo $_SESSION['email']; ?>" id="email_actual" name="email" required>
                                    <div id="errorMail1" class="invalid-feedback">
                                        .
                                    </div>
                                </div>

                                <button class="btn btn-outline dauton"> Salvar Alterações </button>
                            </form>
                        </div>

                        <!-- O 4! -->
                        <div id="perfil4_perfil4" class="row" style="display: none;">
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
                                <button class="btn btn-outline dauton my-3"> Prosseguir </button> <br>
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
                                    <button class="btn btn-outline dauton my-3" id="button-salvar"> Salvar Alterações </button> <br>
                                    <div id="errorSenhaNova3" class="invalid-feedback">
                                        Há erro no formulário!
                                    </div>
                                </div>
                            </form>
                        </div>









                    </div>
                </div>





                <!-- <div>
                    <ul style="list-style: none; ">
                        <li id="perfil1" class="select" onclick="liberar(this)"> Alterar nome de Úsuario </li>
                        <li id="perfil2" onclick="liberar(this)"> Alterar Foto de perfil </li>
                        <li id="perfil3" onclick="liberar(this)"> Alterar E-mail </li>
                        <li id="perfil4" onclick="liberar(this)"> Alterar Senha </li>

                    </ul>
                </div> -->
            </section>
        </div>

        <!-- <div id="perfil1_perfil1" class="row content">
            <p>Nome</p>
            <form action="javascript:void(0)" id="formName">
                <div class="input-group">
                    <input type="text" class="form-control" onkeyup="changeName(this.id)" onkeydown="changeName(this.id)" placeholder="Nome" value="<?php echo $_SESSION['nome']; ?>" id="novo_Nome" name="user" required>
                    <div id="errorSenha1" class="invalid-feedback">
                        Meu amigo, teu nome de usuário deve haver ao menos 5 caracteres!
                    </div>
                </div>
                <button class="btn btn-outline"> Salvar Alterações </button>
            </form>
        </div> -->

        <!-- <div id="perfil2_perfil2" class="row content" style="display: none;">
            <p>Alterar foto <br> (somente arquivos: .png, .jpg ou .jpeg)</p>
            <form action="javascript:void(0)" method="POST" id="f_alterarfoto" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="exampleFormControlFile1">Escolha o arquivo adequado, cavalheiro</label>
                    <input type="file" name="arquivo_alteracao" class="form-control-file" id="exampleFormControlFile1">

                    <div id="progresssbar" class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>
                    </div>
                    <p id="feedback" style="display: none;"> Foto enviada com sucesso! </p>
                    <br> <br>
                    <button type="submit"> Enviar </button>
                </div>
            </form>
        </div> -->

        <script>
            document.getElementById("f_alterarfoto").addEventListener('submit', alterar);


            // URL TROCARURL

            function alterar(env) {

                var formData = new FormData(); //creating a form data object
                var files = $('#exampleFormControlFile1')[0].files[0]; // appending the image file to the form data object
                formData.append('file', files); //appending the file 

                // JQuery ajax request
                $.ajax({ //making an ajax request to the uploadfile and sending
                    url: "http://localhost/Desirepedia/functions/newfile.php",
                    dataType: 'json',
                    type: 'post',
                    data: formData,
                    contentType: false,
                    processData: false,
                    async: true,
                    xhr: function() {
                        var xhr = new window.XMLHttpRequest();
                        //Upload Progress
                        xhr.upload.addEventListener("progress", function(evt) {
                            if (evt.lengthComputable) {
                                var percentComplete = (evt.loaded / evt.total) * 100;
                                $('div.progress > div.progress-bar').css({
                                    "width": percentComplete + "%"
                                });
                            }
                        }, false);

                        //Download progress
                        xhr.addEventListener("progress", function(evt) {
                                if (evt.lengthComputable) {
                                    var percentComplete = (evt.loaded / evt.total) * 100;

                                    $("div.progress > div.progress-bar").css({
                                        "width": percentComplete + "%"
                                    });
                                }
                                if (percentComplete == 100) {
                                    funfou();
                                }
                            },
                            false);
                        return xhr;
                    },
                    success: function() {
                        alert("pacata")
                        $("#progresssbar").css('display', 'none');
                        $("#feedback").css('display', 'block');
                    }
                    // success: function(data) { //handle response data
                    //     if (data !== 0) {
                    //         // Show image preview
                    //         $('.response-data').append("<img src=" + data + " width='100%'>"); //inserting the image path into image tag
                    //         $(".close").trigger('click'); //trigger a close action
                    //         //alert(data);
                    //     } else {
                    //         alert('<b>Sorry</b> the file could not upload!');
                    //     }

                    // }
                }).done(function(e) {


                })

                function funfou() {

                    $("#alerte-o").prepend("<div class='alert alert-success text-center fixed fixed-top' id='alertando' role='alert'> <strong>Feito!</strong> Foto de perfil do usuário alterado com sucesso! </div>")
                    //$("#alertando").toggle("slow");
                    var i = 0;
                    var o = setInterval(() => {
                        i++
                        if (i == 3) {
                            clearInterval(o)
                            cancela()
                        }
                        console.log(i);
                    }, 1000);

                    function cancela() {
                        console.log("OPa")
                        $("#alertando").fadeOut()
                        window.location.reload()
                    }
                }
                // var form, prct
                // form = new FormData(env.target)
                // var files = $('#exampleFormControlFile1')[0].files[0]; // appending the image file to the form data object
                // form.append('file', files);

                // $.ajax({
                //     method: 'POST',
                //     url: "http://localhost/Desirepedia/functions/newfile.php",
                //     dataType: 'json',
                //     data: form,
                //     cache: false,
                //     processData: false,
                //     success: function(e) {
                //         console.log(e)
                //     },
                //     error: function(e) {
                //         console.log(e)
                //     },
                //     progress: function(e) {
                //         //make sure we can compute the length
                //         if (e.lengthComputable) {
                //             //calculate the percentage loaded
                //             var pct = (e.loaded / e.total) * 100;

                //             //log percentage loaded
                //             console.log(pct);
                //         }
                //         //this usually happens when Content-Length isn't set
                //         else {
                //             console.warn('Content Length not reported!');
                //         }
                //     }
                // }).done(function(e) {
                //     console.log(e)
                //     // Do something
                // })
            }
        </script>



        <!-- <div id="perfil3_perfil3" class="row content" style="display: none;">
            <p>Email</p>

            <form action="javascript:void(0)" id="alterar_email">
                <div class="input-group my-3">
                    <input type="email" class="form-control" onkeyup="validadeEmail(this.id)" onkeydown="validadeEmail(this.id)" placeholder="Nome" value="<?php echo $_SESSION['email']; ?>" id="email_actual" name="email" required>
                    <div id="errorMail1" class="invalid-feedback">
                        .
                    </div>
                </div>

                <button class="btn btn-outline"> Salvar Alterações </button>
            </form>
        </div> -->


        <!-- <div id="perfil4_perfil4" class="row content" style="display: none;">
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
        </div> -->

        <div id="alerte-o">

        </div>

        <script>
            function liberar(b) {
                for (var i = 1; i < 5; i++) {
                    $(`#perfil${i}`).removeClass('active');
                }
                for (var i = 1; i < 5; i++) {
                    $(`#perfil${i}_perfil${i}`).css('display', 'none');
                }
                $(`#${b.id}`).addClass('active');
                $(`#${b.id}_${b.id}`).css('display', 'block');
            }

            function changeName(x) {
                var valor_inpt = $(`#${x}`);
                if (valor_inpt.val().length < 5) {
                    valor_inpt.addClass('is-invalid');

                } else {
                    valor_inpt.removeClass('is-invalid')

                }
            }
            document.getElementById("formName").addEventListener('submit', function() {
                var NomeNovo = $("#novo_Nome").val();
                var vr = "nameNew";
                $.ajax({
                    url: "http://localhost/Desirepedia/functions/changeUser.php",
                    method: "POST",
                    data: {
                        data: NomeNovo,
                        type: vr
                    },
                    dataType: "json"
                }).done(function(r) {

                    console.log(r)

                    if (r) {

                        $("#alerte-o").prepend("<div class='alert alert-success text-center fixed fixed-top' id='alertando' role='alert'> <strong>Feito!</strong> Nome de usuário alterado com sucesso! </div>")
                        //$("#alertando").toggle("slow");
                        var i = 0;
                        var o = setInterval(() => {
                            i++
                            if (i == 3) {
                                clearInterval(o)
                                cancela()
                            }
                            console.log(i);
                        }, 1000);

                        function cancela() {
                            console.log("OPa")
                            $("#alertando").fadeOut()
                        }


                    } else {
                        console.log("DEU ERRADO!");

                    }
                })
            })

            function validadeEmail(x) {
                var valor_inpt = $(`#${x}`);

                if (!validaEmail(valor_inpt.val())) {
                    $("#errorMail1").text('Por favor, coloque um e-mail válido!');
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
                            type: vr,
                            novo: "true"
                        },
                        dataType: "json"
                    }).done(function(r) {
                        console.log(r, "value")
                        if (r) {
                            valor_inpt.removeClass('is-invalid')

                        } else {
                            $("#errorMail1").text('Email já existente, tente outro!');
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

            $('#alterar_email').on('submit', () => {
                var EmailNovo = $("#email_actual").val();
                if (EmailNovo == "<?php echo $_SESSION['email']; ?>") {
                    console.log("A2")
                    return
                    console.log("A1")
                }


                var vr = "mailNew";
                $.ajax({
                    url: "http://localhost/Desirepedia/functions/changeUser.php",
                    method: "POST",
                    data: {
                        data: EmailNovo,
                        type: vr
                    },
                    dataType: "json"
                }).done(function(r) {

                    console.log(r)

                    if (r) {

                        $("#alerte-o").prepend("<div class='alert alert-success text-center fixed fixed-top' id='alertando' role='alert'> <strong>Feito!</strong> Email de usuário alterado com sucesso! </div>")
                        //$("#alertando").toggle("slow");
                        var i = 0;
                        var o = setInterval(() => {
                            i++
                            if (i == 3) {
                                clearInterval(o)
                                cancela()
                            }
                            console.log(i);
                        }, 1000);

                        function cancela() {
                            console.log("OPa")
                            $("#alertando").fadeOut()
                        }

                        $("#senha-correto").css('display', 'none');
                        $("#btn-prosseguir").css('display', 'block')

                    } else {
                        console.log("DEU ERRADO!");

                    }
                })
            })

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
                        $("#senhaAtual").removeClass('is-invalid');

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

            $("#senha-correto").on("submit", function() {
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
                        console.log("TAMO AE    ");
                        console.log("DEU CERTO!");
                        $("#senha_nova_correto2").val("");
                        $("#senha_nova_correto1").val("");



                        $("#alerte-o").prepend("<div class='alert alert-success text-center fixed fixed-top' id='alertando' role='alert'> <strong>Feito!</strong> Senha de usuário alterada com sucesso! </div>")
                        //$("#alertando").toggle("slow");
                        var i = 0;
                        var o = setInterval(() => {
                            i++
                            if (i == 3) {
                                clearInterval(o)
                                cancela()
                            }
                            console.log(i);
                        }, 1000);

                        function cancela() {
                            console.log("OPa")
                            $("#alertando").fadeOut()
                        }

                        $("#senha-correto").css('display', 'none');
                        $("#btn-prosseguir").css('display', 'block')

                    } else {
                        console.log("DEU ERRADO!");


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