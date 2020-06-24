<?php 
session_start();

if (isset($_COOKIE['jogador']) && isset($_SESSION['resposta1'])) {
		
		if ($_POST) {

			$resposta2 = $_POST["pergunta_2"];


			if($resposta2 != null){
				$_SESSION['resposta2'] = $resposta2;
				header('location: pergunta3.php');
			}
			else{
				echo '<script type="text/javascript">alert("Selecione uma opção")</script>';
			}
		}
		 
	
	if (isset($_SESSION['resposta2'])) {
	header('location: pergunta3.php');
	}
}elseif(!isset($_SESSION['resposta1']))
	{
		header('location: pergunta1.php');
	}
	//Caso acabe o tempo
	else
	{
		header('location: destruir.php');
	}
	


 ?>


<!DOCTYPE html>
 <html>
	 <head>
	 	<title> QUIZ - Pergunta 2</title>
	 	<meta charset="utf-8">
	 	<link rel="stylesheet" type="text/css" href="css/perguntas.css">
	 </head>
	 <body>
	 	<div class="container">
	 		<form action="pergunta2.php" method="POST">

	 			<h2>2) Sobre o nodejs, é correto afirmar:</h2>
	 			<p><input type="radio" name="pergunta_2" value="a">a- Servidor sem fio</p>
	 			<p><input type="radio" name="pergunta_2" value="b">b- É um interpretador de JavaScript assíncrono com código aberto orientado a eventos, criado por Ryan Dahl em 2009, focado em migrar a programação do Javascript do cliente (frontend) para os servidores. </p>		
	 			<p><input type="radio" name="pergunta_2" value="c">c- É um softawre baseado em python criado por Bill Gates em 1890 depois da segunda guerra mundial, com o objetivo de derrotar o exército romano na idade média. </p>
	 			<p><input type="radio" name="pergunta_2" value="d">d- Foi o primeiro computador que rodava JavaScript. </p> 
	 			<p><input type="radio" name="pergunta_2" value="e">e- É um site onde é possível baixar GTA 5 gratis. </p>

	 			<p class="p-botao"><input type="submit" name="botao"></p>
	 		</form>
	 	</div>
	 </body>
 </html>