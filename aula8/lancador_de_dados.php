<?php



$method= $_SERVER["REQUEST_METHOD"];


if ($method=="POST") {
	$valor1= $_POST["valor1"];
	$valor2= $_POST["valor2"];
	$resultado= rand($valor1, $valor2);
}

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Lançador de dados</title>
</head>
<body>

<?php if ($method=="GET") { ?>

	<form method="POST">
		<label>Informe um Valor: </label> <input name="valor1" /> <input
			name="valor2" /> <input type="submit" />
	</form>
	<?php } else { ?>

	<?php } ?>

	<?php if ($method=="POST"){ ?>

	<?php echo "$resultado"?>
	<?php } else { ?>

	<?php } ?>


</body>
</html>
