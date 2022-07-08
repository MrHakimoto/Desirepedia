<!doctype html>
<html lang="pt-br">

<head>
	<title>Desirepedia | Login </title>
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
					<h2 class="heading-section"> Login </h2>
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
									<h3 class="mb-4">Logue-se</h3>
								</div>
								<div class="w-100">
									<p class="social-media d-flex justify-content-end">
										<a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-instagram"></span></a>
										<a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a>
									</p>
								</div>
							</div>
							<form action="#" class="signin-form">
								<div class="form-group mb-3">
									<label class="label" for="name">Seu Nome</label>
									<input type="text" class="form-control" placeholder="Nome" required>
								</div>
								<div class="form-group mb-3">

									<label class="label" for="password">Senha</label>
									<div class="input-group">
										<input type="password" id="Pass_Login" class="form-control" placeholder="Senha" required>
										<span class="input-group-text"><i class="bi bi-eye-slash-fill" id="olhoS1"></i></span>
									</div>
								</div>
								<div class="form-group">
									<button type="submit" class="form-control btn btn-primary rounded submit px-3">Entrar</button>
								</div>
								<div class="form-group d-md-flex">
									<div class="w-50 text-left">
										<label class="checkbox-wrap checkbox-primary mb-0">Lembre de mim
											<input type="checkbox" checked>
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="w-50 text-md-right">
										<a href="#">Esqueceu a senha?</a>
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


							<p class="text-center">Não possui uma conta? <a data-toggle="tab" href="index.php?ia=2">Registre-se</a></p>
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
	<script>
		let btn1 = document.querySelector('#olhoS1');
		var s1 = true;

		btn1.addEventListener('click', () => {
			if (s1) {
				$("#olhoS1").removeClass('bi-eye-slash-fill')
				$("#olhoS1").addClass('bi-eye-fill')
				$("#Pass_Login").get(0).type = 'text';
				$("#Pass_Login").focus()
				s1 = false
			} else {
				$("#olhoS1").addClass('bi-eye-slash-fill')
				$("#olhoS1").removeClass('bi-eye-fill')
				$("#Pass_Login").get(0).type = 'password';
				$("#Pass_Login").focus()
				s1 = true
			}
			//console.log("FALA COM NOIS1")
			//console.log(btn1.id)
		})
	</script>
</body>

</html>