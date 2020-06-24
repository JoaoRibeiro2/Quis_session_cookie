<?php 
session_start();

if ($_POST) {
	
	$nome = $_POST['nome'];


	if ($nome == null) {
		echo '<script type="text/javascript"> alert("Digita o nome aeeeeeeeeeee") </script>';
	}
	else
	{
		$_SESSION['nome'] = $nome;
		setcookie('jogador', 'user', time()+10);
	}       

}
//Caso o usuario tente voltar a pagina
if (isset($_SESSION['nome'])) {
		header('location: pergunta1.php');
}

if (isset($_SESSION['restart'])) {
		echo '<script type="text/javascript"> alert("Acabou o tempo, tente de novo!!!") </script>';
		
	}

 ?>





<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">	
</head>
<body>
	<h1>Super Quis sobre JavaScript!!!</h1>
	<div class="container">
		<form action="index.php" method="POST">
			<p class="p-nome">Digite seu nome: <input type="text" name="nome"></p>
			<p class="p-botao"><input type="submit" class="botao" name="botao" value="Começar"></p>	
		</form>

	</div>
	</body>	
</html>