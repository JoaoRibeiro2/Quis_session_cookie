<?php 
session_start();

if (isset($_COOKIE['jogador']) && isset($_SESSION['resposta2'])) {
		
		if ($_POST) {

			$resposta3 = $_POST["pergunta_3"];


			if($resposta3 != null){
				$_SESSION['resposta3'] = $resposta3;
			}
			else{
				echo '<script type="text/javascript">alert("Selecione uma opção")</script>';
			}
		 }

		if (isset($_SESSION['resposta3'])) {
			header('location: pergunta4.php');
		}
	
	}
	elseif(!isset($_SESSION['resposta2']))
		{
			header('location: pergunta2.php');
		}
	
		else
		{
			header('location: destruir.php');
		}

		
?>
<!DOCTYPE html>
 <html>
	 <head>
	 	<title> QUIZ - Pergunta 3</title>
	 	<meta charset="utf-8">
	 	<link rel="stylesheet" type="text/css" href="css/perguntas.css">
	 </head>
	 <body>
	 	<div class="container">
	 		<form action="pergunta3.php" method="POST">

	 			<h2>3) Sobre o HTML é abreviação para:</h2>
	 			<p><input type="radio" name="pergunta_3" value="a">a- Linguagem de Programação</p>
	 			<p><input type="radio" name="pergunta_3" value="b">b- Linguagem de marcação de hiper texto. </p>		
	 			<p><input type="radio" name="pergunta_3" value="c">c- É um softawre baseado em python criado por Bill Gates em 1890 depois da segunda guerra mundial, com o objetivo de derrotar o exército romano na idade média. </p>
	 			<p><input type="radio" name="pergunta_3" value="d">d- Foi o primeiro computador que rodava JavaScript. </p> 

	 			<p><input type="radio" name="pergunta_3" value="e">e- É um site onde é possível baixar GTA 5 gratis. </p>

	 			<p class="p-botao"><input type="submit" name="botao"></p>
	 		</form>
	 	</div>
	 </body>
 </html>