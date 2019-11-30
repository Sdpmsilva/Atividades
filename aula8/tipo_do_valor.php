<?php

$method= $_SERVER["REQUEST_METHOD"];
if  ( $method=="POST" ) {
	$valor = $_POST["valor"];

	if (is_numeric ($valor)) {
		$tipo = "numeric";

	} else {
		$tipo = "Nao e numerico";
	}
}

?>


<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Tipo do valor</title>
</head>
<body>

<?php if ($method=="GET") {	?>

	<form method="post">
		<label>informe um valor: </label> <input name="valor" /> <input type="submit" />
	</form>
	<?php } else { ?>

	<h1>
		Tipo do valor informado:
		<?php echo $tipo; ?>
	</h1>

	<?php } ?>

</body>
</html>
