<?php

$method= $_SERVER["REQUEST_METHOD"];
$EHPOST= $method== "POST";



if ($EHPOST)    {

	$num1= $_POST["num1"];
	$num2= $_POST["num2"];
	
	if (is_numeric($num1))  {
	}
	else {
		echo "Numero 1 nao e valor numerico, informe um valor!";
	}

	if (is_numeric($num2))  {
	}
	
	if ($num2!=0){

		$SOMA = $num1 + $num2;
		$MULTI = $num1 * $num2;
		$SUB = $num1 - $num2;
		$DIV = $num1 / $num2;
	}
	
		
	else {
		echo "Numero 2 tem que ser diferente de 0!";
	}

}

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Calculadora V2</title>
</head>
<body>
	<form method="POST">

		<h1>Calculadora V2</h1>
		<label>Numero 1</label> <input name="num1" /> <label>Numero 2</label>
		<input name="num2" /> <input type="submit" />

	</form>

	
	
	<?php if ($EHPOST)  {?>
	<h2>Resultados</h2>
		<?php if (is_numeric($num1)) {?>
			<?php if (is_numeric($num2)) {?>
				<?php if ($num2!=0) {?>

	<p>
		SOMA =
		<?php echo $SOMA; ?>
	
	
	<p>
	
	
	<p>
		MULTI =
		<?php echo $MULTI; ?>
	
	
	<p>
	
	
	<p>
		SUB =
		<?php echo $SUB; ?>
	
	
	<p>
	
	
	<p>
		DIV =
		<?php echo $DIV; ?>
	
	
	<p>

				<?php } ?>
			<?php } ?>
		<?php } ?>
	<?php } ?>

</body>
</html>
