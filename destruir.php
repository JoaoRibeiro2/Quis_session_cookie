
<?php 
session_start();

if (!isset($_SESSION['final'])){
	$_SESSION['restart'] = "restart";
}
else{
	null;
}


unset($_SESSION['nome']);
unset($_SESSION['resposta1']);
unset($_SESSION['resposta2']);
unset($_SESSION['resposta3']);
unset($_SESSION['resposta4']);
unset($_SESSION['resposta5']);
unset($_SESSION['final']);
header('location: index.php');


 ?>