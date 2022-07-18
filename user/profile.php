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
                        <li id="perfil2" onclick="liberar(this)"> Alterar E-mail </li>
                        <li id="perfil3" onclick="liberar(this)"> Alterar Senha </li>
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
        <p>Email</p>
            <form action="">
                <input type="text" class="form-control" placeholder="Nome" value="<?php echo $_SESSION['email']; ?>" id="login_correto" name="user" required>
                <button class="btn btn-outline"> Salvar Alterações </button>
            </form>
        </div>
        <div id="perfil3_perfil3" class="row content" style="display: none;">
        <p>Senha</p>
        <form action="">
                <input type="text" class="form-control" placeholder="Nome" value="<?php echo $_SESSION['email']; ?>" id="login_correto" name="user" required>
                <input type="text" class="form-control" placeholder="Nome" value="<?php echo $_SESSION['email']; ?>" id="login_correto" name="user" required>
                <button class="btn btn-outline"> Salvar Alterações </button>
            </form>
        </div>
        <script>
            function liberar(b) {
                for (var i = 1; i < 4; i++) {
                    $(`#perfil${i}`).removeClass('select');
                }
                for (var i = 1; i < 4; i++) {
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
                    prevent[1] = false;
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
                            prevent[1] = true;
                        } else {
                            $("#errorMail").text('Email já existente, tente outro!');
                            valor_inpt.addClass('is-invalid')
                            prevent[1] = false;
                        }
                    })

                    prevent[1] = true;

                    valor_inpt.removeClass('is-invalid')
                }




                function validaEmail(email) {
                    var regex = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
                    return regex.test(email);
                }
            }
        </script>


        <div class="row ">
            <div class="col-4">
                <div class="list-group list-group-horizontal" id="list-tab" role="tablist">
                    <a class="list-group-item list-group-item-action active" id="list-home-list" data-bs-toggle="list" href="#list-home" role="tab" aria-controls="list-home">Home</a>
                    <a class="list-group-item list-group-item-action" id="list-profile-list" data-bs-toggle="list" href="#list-profile" role="tab" aria-controls="list-profile">Profile</a>
                    <a class="list-group-item list-group-item-action" id="list-messages-list" data-bs-toggle="list" href="#list-messages" role="tab" aria-controls="list-messages">Messages</a>
                    <a class="list-group-item list-group-item-action" id="list-settings-list" data-bs-toggle="list" href="#list-settings" role="tab" aria-controls="list-settings">Settings</a>
                </div>
            </div>
            <div class="col-8">
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">asasas1</div>
                    <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">...asasas2</div>
                    <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">...asasas3</div>
                    <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">...asasas5</div>
                </div>
            </div>
        </div>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</body>

</html>