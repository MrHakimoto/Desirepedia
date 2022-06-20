<!DOCTYPE html>
<html>
<?php
session_start();
if (empty($_SESSION['nome'])) {
	header('location: login.php');
}
?>

<head>

	<title>Chat-Simples</title>
	<link rel="stylesheet" href="css.css">
	<script type="text/javascript">
		function ajax() {
			var req = new XMLHttpRequest();
			req.onreadystatechange = function() {
				if (req.readyState == 4 && req.status == 200) {
					document.getElementById('chat').innerHTML = req.responseText;
				}
			}
			req.open('GET', 'chat.php', true);
			req.send();
		}

		setInterval(function() {
			ajax();
		}, 1000);
	</script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<link rel="stylesheet" href="style.css">
	<style>
		body {
			background: url(https://images.unsplash.com/photo-1495808985667-ba4ce2ef31b3?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80);
			background-size: cover;
		}
	</style>
</head>

<body onload="ajax();">
	<!-- início do preloader 
  <div id="preloader">
    <div class="inner">
        HTML DA ANIMAÇÃO MUITO LOUCA DO SEU PRELOADER! 
       <div class="bolas">
          <div></div>
          <div></div>
          <div></div>                    
       </div>
    </div>
</div> -->
	<!-- fim do preloader -->
	<div id="chat">


	</div>
	<form method="post" action="index.php">
		<input type="text" name="nome" placeholder="Insere o seu nome: ">
		<input type="text" name="mensagem" placeholder="mensagem">
		<input type="submit" value="Enviar">

	</form>
	<?php
	date_default_timezone_set('America/Sao_Paulo');
	echo 'Agora em São Paulo é: <strong>' . date('d/m/Y H:i:s') . '</strong>';

	include("bd_conect.php");
	if (isset($_POST['mensagem'])) {
		$nome = $_SESSION['nome'];
		$mensagem = $_POST['mensagem'];
		$sql = $pdo->query("INSERT INTO chat1 SET nome= '$nome', mensagem= '$mensagem'");
	}

	?>


	<!--

Follow me on
Dribbble: https://dribbble.com/supahfunk
Twitter: https://twitter.com/supahfunk
Codepen: https://codepen.io/supah/

It's just a concept, a fake chat to design a new daily UI for direct messaging.
Hope you like it :)

-->

	<main class="page__main">
		<div class="block--background">
			<div class="chatbot__overview">
				<ul class="chatlist">
					<li class="bot__output bot__output--standard">Hey, I'm Navvy!</li>
					<li class="bot__output bot__output--standard">I will guide you through Mees' portfolio!</li>
					<li class="bot__output bot__output--standard">
						<span class="bot__output--second-sentence">You can ask me a bunch of things!</span>
						<ul>
							<li class="input__nested-list">Something <span class="bot__command">about</span> Mees</li>
							<li class="input__nested-list">Mees' <span class="bot__command">best work</span></li>
							<li class="input__nested-list">Maybe I could <span class="bot__command">help</span> (for more instructions)</li>
							<li class="input__nested-list">Type <span class="bot__command">commands</span> for a list of every command</li>
							
						</ul>
						You could also scroll down to see Mees' full portfolio
					</li>
					<li class="userInput">Fala</li>
					<!-- <li class="bot__output bot__output--standard">Hey, I'm Navvy!</li> -->
					<li class="bot__output"> <p class="author">Jão</p> Tdfsdfsdfsdfsdfsfsdfnds Navvy knows: <time>20:18</time></li>
					<li class="bot__output"> <p class="author">Jão</p> Tdfsdfsdfsdfsdfsfsdfnds Navvy knows: <time>20:18</time></li>
					<li class="userInput"> <p class="author">Jão</p> Fala <time>20:18</time></li>
				</ul>
			</div>
			<div class="chatbox-area">
				<form action="" id="chatform">
					<textarea placeholder="Talk to me!" class="chatbox" name="chatbox" resize: "none" minlength="2"></textarea>
					<input class="submit-button" type="submit" value="send">
				</form>
			</div>
			<div class="block--background"></div>

	</main>





	<script>
/*
	LOGIN
	REDIRECT
	
	
	MSG 
	ID da pessoa, ID da menssagem, Conteúdo

	Se o ID da pessoa for igual ao ID do session, então ela irá receber a classe userInput

	se não for, então vai receber a classe bot__output





*/

		


		var sendForm = document.querySelector('#chatform'),
			textInput = document.querySelector('.chatbox'),
			chatList = document.querySelector('.chatlist'),
			userBubble = document.querySelectorAll('.userInput'),
			botBubble = document.querySelectorAll('.bot__output'),
			animateBotBubble = document.querySelectorAll('.bot__input--animation'),
			overview = document.querySelector('.chatbot__overview'),
			hasCorrectInput,
			imgLoader = false,
			animationCounter = 1,
			animationBubbleDelay = 600,
			input,
			previousInput,
			isReaction = false,
			unkwnCommReaction = "I didn't quite get that.",
			chatbotButton = document.querySelector(".submit-button")

		sendForm.onkeydown = function(e) {
			if (e.keyCode == 13) {
				e.preventDefault();

				//No mix ups with upper and lowercases
				var input = textInput.value;
				
				//Empty textarea fix
				if (input.length > 0) {
					enviar(input);
					createBubble(input)
				}
			}
		};

		sendForm.addEventListener('submit', function(e) {
			//so form doesnt submit page (no page refresh)
			e.preventDefault();


			//No mix ups with upper and lowercases
			var input = textInput.value;
			if (input.length > 0) {
				enviar(input);
				createBubble(input)
			}
			var comment = input
			console.log(campo);
			
			//Empty textarea fix

		}) //end of eventlistener
		var enviar = function(comment) {
			$.ajax({
				url: "http://localhost/Desirepedia/chat/guard.php",
				method: "POST",
				data: {
					comentario: comment,
				},
				dataType: "json"
			}).done(function(r) {
				textInput.value = " ";
				chama();
				console.log(r)
			})
		}
		var createBubble = function(input) {
			//create input bubble
			var chatBubble = document.createElement('li');
			chatBubble.classList.add('userInput');

			//adds input of textarea to chatbubble list item
			

			//adds chatBubble to chatlist
			chatList.appendChild(chatBubble)
			chatBubble.appendChild(author)
			var author = document.createElement('p');
			author.classList.add('author');
			chatBubble.innerHTML = input;
			author.innerHTML = "Jão";
			
			
			chatList.scrollTop = chatList.scrollHeight;
			//textInput.val(" ");
			
			checkInput(input);
			setTimeout(function(){
    		console.log(response.clientHeight);r
  			}, 0)
		}


		// debugger;



	</script>
</body>

</html>