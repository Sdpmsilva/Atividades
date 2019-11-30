<?php $method = $_SERVER["REQUEST_METHOD"];

if ($method == "POST"){
	
	$minimo = $_POST["minimo"];
	$maximo = $_POST["maximo"];
	$Qdezenas = $_POST["Qdezenas"];
	$sorteados = array();
	
} for ($i = 0; $i < $Qdezenas; $i++ ) {
	$adicionado = false; {
	while($adicionado == false);
	$dezena = rand($minimo, $maximo);
	
}?>






<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Insert title here</title>
</head>
<body>

	<form method = "POST">

		<label>Minimo</label> <input type="number" name="minimo"
			value="<?php echo $minimo; ?>" />
		<p>
			<label>Maximo</label> <input type="number" name="maximo"
				value="<?php echo $maximo; ?>" />
		
		
		<p>
			<label>Quantidade de dezenas</label> <input type="number"
				name="Qdezenas" value="<?php echo $Qdezenas; ?>" />
		
		
		<p>
			<input type="submit">
	
	</form>
	<?php echo $sorteados = array () ?>
</body>
</html>
