<?php

// Criar uma variável
$titulo = "Dinâmico";
$int = 10;
$float = 20.5;
$string = string;

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>variaveis</title>
</head>
<body>
	<h1>título: <?php echo $titulo; ?></h1>
	<p>$titulo: <?php var_dump($titulo)?><p>
	<p>$int: <?php var_dump($int)?><p>
	<p>$float: <?php var_dump($float)?><p>
	<p>$string: <?php var_dump($string)?><p>
</body>	
</html>