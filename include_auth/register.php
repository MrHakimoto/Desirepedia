<?php

echo "Registro";

?>


<!-- Registro -->








<!doctype html>
<html lang="en">

<head>
	<title>Desirepedia | Registro </title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="css/style.css">

</head>

<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section"> Registro </h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-12 col-lg-10">
					<div class="wrap d-md-flex">
						<div class="img" style="background-image: url(images/backgroundes.jpg);">
						</div>
						<div class="login-wrap p-4 p-md-5">
							<div class="d-flex">
								<div class="w-100">
									<h3 class="mb-4">Registre-se</h3>
								</div>
								<div class="w-100">
									<p class="social-media d-flex justify-content-end">
										<a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a>
										<a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a>
									</p>
								</div>
							</div>
							<form action="insert.php" method="POST" class="signin-form" id="register_form">
								<div class="form-group mb-3">
									<label class="label" for="name">Seu Nome</label>
									<input type="text" class="form-control" id="register_nome" onkeydown="verificar(this.id)" onkeyup="verificar(this.id)" placeholder="Nome" required name="nome">
									<div id="errorName" class="invalid-feedback">
										Seu nome ter-se-á pelo menos 5 caracteres.
									</div>
								</div>
								<div class="form-group mb-3">
									<label class="label" for="name">Seu Email</label>
									<input type="email" class="form-control" id="register_email" onkeydown="verificar(this.id, 1)" onkeyup="verificar(this.id, 1)" onblur="verificar(this.id, 2)" placeholder="Email" required name="email">
									<div id="errorMail" class="invalid-feedback">

									</div>
								</div>
								<div class="form-group mb-3">
									<label class="label" for="password">Senha</label>
									<div class="input-group">
										<input type="password" class="form-control" id="register_senha1" onkeydown="verificar(this.id)" onkeyup="verificar(this.id)" placeholder="Senha" required name="senha1">

										<span class="input-group-text"><i class="bi bi-eye-slash-fill" id="olhoS1"></i></span>

										<div id="errorSenha1" class="invalid-feedback">
											.
										</div>
									</div>
								</div>
								<div class="form-group mb-3">
									<label class="label" for="password">Repita a Senha</label>
									<div class="input-group">
										<input type="password" class="form-control" id="register_senha2" onkeydown="verificar(this.id)" onkeyup="verificar(this.id)" placeholder="Sua senha novamente" required name="senha2">

										<span class="input-group-text"><i class="bi bi-eye-slash-fill" id="olhoS2"></i></span>

										<div id="errorSenha2" class="invalid-feedback">
											As senhas não se coensidem.
										</div>
									</div>
								</div>
								<div class="form-group">
									<button type="submit" id="enviar" class="form-control btn btn-primary rounded submit px-3">Registrar</button>
									<div id="errorCentral" class="invalid-feedback text-center">

									</div>
								</div>
							</form>
							<div class="divider d-flex align-items-center my-4">
								<p class="text-center fw-bold mx-3 mb-0 login-vls">Ou</p>
							</div>
							<div class="d-flex justify-content-center m-3">
								<script src="https://accounts.google.com/gsi/client" async defer></script>
								<div id="g_id_onload" data-client_id="931857203907-8isaavdi8cnt31ahmq8hcvgei1l700j1.apps.googleusercontent.com" data-login_uri="http://localhost/Desirepedia/auth/auth.php" data-auto_prompt="false">
								</div>
								<div class="g_id_signin" data-type="standard" data-size="large" data-theme="outline" data-text="sign_in_with" data-shape="rectangular" data-logo_alignment="left">
								</div>
							</div>
							<p class="text-center">Já possui uma conta? <a data-toggle="tab" onclick="redirect(1)" href="index.php?ia=1">Logue-se</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/main.js"></script>

</body>

</html>

<script>
	$(document).ready(() => {
		$("#register_nome").focus();
	})
	function getUrlVars() {
			var vars = [],
				hash;
			var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
			for (var i = 0; i < hashes.length; i++) {
				hash = hashes[i].split('=');
				vars.push(hash[0]);
				vars[hash[0]] = hash[1];
			}
			return vars;
		}

		$('document').ready(() => {
			if (getUrlVars()['validate']) {
				$("#alerte-o").prepend("<div class='alert alert-danger text-center fixed fixed-top' id='alertando' role='alert'> <strong> Houve um erro no seu registro!</strong> Já existe um email como este no site! </div>")
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
				//$("#alertando").toggle("slow");
			}
		})



	var prevent = []

	function verificar(x, v = null) {
		switch (x) {
			case "register_nome":
				var valor_inpt = $(`#${x}`);
				console.log(valor_inpt.length)
				if (valor_inpt.val().length < 5) {
					valor_inpt.addClass('is-invalid')
					prevent[0] = false;
				} else {
					valor_inpt.removeClass('is-invalid')
					prevent[0] = true;
				}
				break;
			case "register_email":
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
				break;
			case "register_senha1":
				var valor_inpt = $(`#${x}`);

				let numeros = /[0-9]/;
				let maiscula = /[A-Z]/;

				if (valor_inpt.val().length < 8) {
					valor_inpt.addClass('is-invalid')
					$("#errorSenha1").text('Por favor, coloque pelo menos 8 caracteres!');
					prevent[2] = false;
				} else {
					if (!numeros.test(valor_inpt.val())) {
						valor_inpt.addClass('is-invalid')
						$("#errorSenha1").text('Por favor, coloque ao menos 1 número, em sua senha!');
						prevent[2] = false;
					} else {
						if (!maiscula.test(valor_inpt.val())) {
							valor_inpt.addClass('is-invalid')
							$("#errorSenha1").text('Por favor, coloque ao menos um caracter maisculo!');
							prevent[2] = false;
						} else {
							valor_inpt.removeClass('is-invalid');
							prevent[2] = true;
						}
					}
				}



				break;
			case "register_senha2":
				var valor_inpt = $(`#${x}`);

				if (valor_inpt.val().length >= 8) {
					if (valor_inpt.val() != $("#register_senha1").val()) {
						valor_inpt.addClass('is-invalid')
						prevent[3] = false;
					} else {
						valor_inpt.removeClass('is-invalid')
						prevent[3] = true;
					}
				}
				break;
		}
		console.log($(`#${x}`).val());
	}

	let btn1 = document.querySelector('#olhoS1');
	let btn2 = document.querySelector('#olhoS2');
	var s1 = true;
	var s2 = true;
	btn1.addEventListener('click', () => {
		if (s1) {
			$("#olhoS1").removeClass('bi-eye-slash-fill')
			$("#olhoS1").addClass('bi-eye-fill')
			$("#register_senha1").get(0).type = 'text';
			$("#register_senha1").focus()
			s1 = false
		} else {
			$("#olhoS1").addClass('bi-eye-slash-fill')
			$("#olhoS1").removeClass('bi-eye-fill')
			$("#register_senha1").get(0).type = 'password';
			$("#register_senha1").focus()
			s1 = true
		}
		//console.log("FALA COM NOIS1")
		//console.log(btn1.id)
	})
	btn2.addEventListener('click', () => {
		if (s2) {
			$("#olhoS2").removeClass('bi-eye-slash-fill')
			$("#olhoS2").addClass('bi-eye-fill')
			$("#register_senha2").get(0).type = 'text';
			$("#register_senha2").focus()
			s2 = false
		} else {
			$("#olhoS2").addClass('bi-eye-slash-fill')
			$("#olhoS2").removeClass('bi-eye-fill')
			$("#register_senha2").get(0).type = 'password';
			$("#register_senha2").focus()
			s2 = true
		}
		//console.log("FALA COM NOIS2")
		//console.log(btn2.id)
	})

	$("#register_form").submit((e) => {
		for (var i = 0; i < prevent.length; i++) {
			if (!prevent[i]) {
				e.preventDefault();
				$("#enviar").addClass("is-invalid")
				let error = "Ainda há erros em sua inscrição!"
				$("#errorCentral").text(error)
			}
		}

	})

</script>

<!-- Banco de daos -->