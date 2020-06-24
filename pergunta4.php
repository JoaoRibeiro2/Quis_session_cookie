<?php 
session_start();

if (isset($_COOKIE['jogador']) && isset($_SESSION['resposta3'])) {
		
		if ($_POST) {

			$resposta4 = $_POST["pergunta_4"];

			if($resposta4 != null){
				$_SESSION['resposta4'] = $resposta4;
				
			}
			else{
				echo '<script type="text/javascript">alert("Selecione uma opção")</script>';
			}
		 }
		 if (isset($_SESSION['resposta4'])) {
			header('location: pergunta5.php');
		}
	}
	elseif(!isset($_SESSION['resposta3']))
		{
			header('location: pergunta3.php');
		}
	
		else
		{
			header('location: destruir.php');
		}

	
?>



<!DOCTYPE html>
 <html>
	 <head>
	 	<title> QUIZ - Pergunta 4</title>
	 	<meta charset="utf-8">
	 	<link rel="stylesheet" type="text/css" href="css/perguntas.css">
	 </head>
	 <body>
	 	<div class="container">
	 		<form action="pergunta4.php" method="POST">

	 			<h2>4) O que é React Native?</h2>
	 			<p><input type="radio" name="pergunta_4" value="a">a- É uma biblioteca criada pelo google, usada para desenvolver apps para Android e IOS utilizando html, css e javascript </p>
	 			<p><input type="radio" name="pergunta_4" value="b">b- É um framework criado pela Microsoft, usada para desenvolver apalicativos em java. </p>		
	 			<p><input type="radio" name="pergunta_4" value="c">c- Uma linguagem de programação. </p>
	 			<p><input type="radio" name="pergunta_4" value="d">d- É uma biblioteca JavaScript criada pelo facebook, usada para desenvolver apps para Android e IOS de forma nativa. </p> 

	 			<p><input type="radio" name="pergunta_4" value="e">e- Reação Nativa. </p>

	 			<p class="p-botao"><input type="submit" name="botao"></p>
	 		</form>
	 	</div>
	 </body>
 </html>