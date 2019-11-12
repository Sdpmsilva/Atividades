<?php

//variaveis para os numeros

$method = $_SERVER ["REQUEST_METHOD"];
$EHPOST = $method == "POST";
$num1 = $_POST ["num1"];
$num2 = $_POST ["num2"];


if ($EHPOST)  { 

$soma = $num1 + $num2;
$sub = $num1 - $num2;
$mult = $num1 * $num2;
$div = $num1 / $num2;

}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>calculadora</title>
</head>
<body>
	<h1>calculadora</h1>
	<form method="POST">
		<label>numero 1: </label> 
		<input name="num1" /> 
		<label>numero 2: </label>
		<input name="num2" /> 
		<input type="submit" />

	</form>
	
	<?php if($EHPOST) { ?>
	
	<h2>resultados</h2>
	<p>	soma =<?php echo $soma; ?></p>
	<p>	sub =<?php echo $sub; ?></p>
	<p>	mult =<?php echo $mult; ?></p>
	<p>	div =<?php echo $div; ?></p>
	
	<?php }?>
	
</body>
</html>
