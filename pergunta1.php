<?php 
session_start();

	//Faz a verificação e executa o quis
	if (isset($_COOKIE['jogador']) && isset($_SESSION['nome'])) {
		
		if ($_POST) {

			$resposta1 = $_POST["pergunta_1"];


			if($resposta1 != null){
				$_SESSION['resposta1'] = $resposta1;
			}
			else{
				echo '<script type="text/javascript">alert("Selecione uma opção")</script>';
			}
		 }

		 if (isset($_SESSION['resposta1'])) {
		header('location: pergunta2.php');
		}
	}//Caso o usuario tente acessar a pagina sem passar pela index
	elseif(!isset($_SESSION['nome']))
	{
		header('location: index.php');
	}//Caso acabe o tempo
	else
	{
		header('location: destruir.php');
	}

 ?>


 <!DOCTYPE html>
 <html>
	 <head>
	 	<title> QUIZ - Pergunta 1</title>
	 	<meta charset="utf-8">
	 	<link rel="stylesheet" type="text/css" href="css/perguntas.css">
	 </head>
	 <body>
	 	<div class="container">
	 		<form action="pergunta1.php" method="POST">

	 			<h2>1) Quem criou o javascript?</h2>
	 			<p><input type="radio" name="pergunta_1" value="a">a- Brendan Eich</p>
	 			<p><input type="radio" name="pergunta_1" value="b">b- Melissa</p>
	 			<p><input type="radio" name="pergunta_1" value="c">c- Bill Gates</p>
	 			<p><input type="radio" name="pergunta_1" value="d">d- Rodolfo </p>
	 			<p><input type="radio" name="pergunta_1" value="e">e- Claudiao </p>

	 			<p class="p-botao"><input type="submit" name="botao"> </p>
	 		</form>
	 		<script type="text/javascript">
				alert('Voce tem 5 minutos para responder o quetionário')
			</script>
	 	</div>
	 </body>
 </html>