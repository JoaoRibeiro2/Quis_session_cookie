<?php 
session_start();

$_SESSION['final'] = "final";

// echo $_SESSION['resposta1'],'<br>';
// echo $_SESSION['resposta2'],'<br>';
// echo $_SESSION['resposta3'],'<br>';
// echo $_SESSION['resposta4'],'<br>';
// echo $_SESSION['resposta5'],'<br>';




if ($_SESSION['resposta1'] == 'a') {
	$r1 = '1';
	
}else
{
	$r1 = '0';
	
}

if ($_SESSION['resposta2'] == 'b') {
	$r2 = '1';
	
}else
{
	$r2 = '0';
	
}

if ($_SESSION['resposta3'] == 'b') {
	$r3 = '1';

}else
{
	$r3 = '0';
	
}

if ($_SESSION['resposta4'] == 'd') {
	$r4 = '1';
	
}else
{
	$r4 = '0';
	
}

if ($_SESSION['resposta5'] == 'e') {
	$r5 = '1';
	
}else
{
	$r5 = '0';
	
}

$total = $r1 + $r2 + $r3 + $r4 +$r5;

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 	<meta charset="utf-8">
 	<link rel="stylesheet" type="text/css" href="css/final.css">
 </head>
 <body>
 		<h2>Numero Total de Acertos: <?php echo $total; ?></h2>
 	<div class="acertos">
 		<p>Respostas: </p>
		<p>1)<?php echo $_SESSION['resposta1']; ?></p>
	 	<p>2)<?php echo $_SESSION['resposta2']; ?></p>
	 	<p>3)<?php echo $_SESSION['resposta3']; ?></p>
	 	<p>4)<?php echo $_SESSION['resposta4']; ?></p>
	 	<p>5)<?php echo $_SESSION['resposta5']; ?></p> 		
 	</div>
 	<p class="p-botao"><a href="destruir.php">Voltar para Index!!!</a></p>
 </body>
 </html>