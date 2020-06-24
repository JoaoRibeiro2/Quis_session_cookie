<?php 
session_start();

	if (isset($_COOKIE['jogador'])) {
		
		if ($_POST) {

			$resposta5 = $_POST["pergunta_5"];

			if($resposta5 != null){
				$_SESSION['resposta5'] = $resposta5;
				header('location: final.php');
			}
			else{
				echo '<script type="text/javascript">alert("Selecione uma opção")</script>';
			}

		 }

		  if (isset($_SESSION['resposta5'])) {
			header('location: final.php');
		}
	}
	elseif(!isset($_SESSION['resposta4']))
		{
			header('location: pergunta4.php');
		}
		else
		{
			header('location: destruir.php');
		}
?>

<!DOCTYPE html>
 <html>
	 <head>
	 	<title> QUIZ - Pergunta 5</title>
	 	<meta charset="utf-8">
	 	<link rel="stylesheet" type="text/css" href="css/perguntas.css">
	 </head>
	 <body>
	 	<div class="container">
	 		<form action="pergunta5.php" method="POST">

	 			<h2>5) Sobre o React Native correto afirmar?</h2>
	 			<p><input type="radio" name="pergunta_5" value="a">a- É um editor de texto baseado no Visual Studioç </p>
	 			<p><input type="radio" name="pergunta_5" value="b">b- Utiliza html e css. </p>		
	 			<p><input type="radio" name="pergunta_5" value="c">c- É Uma que evita invasões de BruteForce nas aplicações feitas em js. </p>
	 			<p><input type="radio" name="pergunta_5" value="d">d- Tem como base a linguagem de programação Cobol. </p> 
	 			<p><input type="radio" name="pergunta_5" value="e">e- Converte o código escrito no framework para código nativo do dispositivo. </p>

	 			<p class="p-botao"><input type="submit" name="botao"></p>
	 		</form>
	 	</div>
	 </body>
 </html>