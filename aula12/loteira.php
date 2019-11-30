<?php 
$method = $_SERVER["REQUEST_METHOD"];
if ($method == "POST") {
	
	$minimo = $_POST["minimo"];
	$maximo = $_POST["maximo"];
	$nDezenas = $_POST["nDezenas"];
	$sorteados = array();
	
	for($i = 0; $i < $nDezenas; $i++) {
		
		// Enquanto o n�mero sorteado existir, sortear de novo
		//	S� sai do "for" se n�o encontrar o valor sorteado
		for($repetido = true; $repetido;  ) {
			
			$rand = rand($minimo, $maximo);
			
			if (in_array($rand, $sorteados) == false) {
				$sorteados[] = $rand;
				$repetido = false;
			}
		
		}
		
	}
	
	sort($sorteados);
	
} else {
	
	$minimo = 1;
	$maximo = 60;
	$nDezenas = 6;
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Loteria</title>
</head>
<body>
<a href="/Atividades/">Voltar</a>
<h1>Loteria</h1>
<form method="POST">
	<p>
		<label>M�nimo: </label>
		<input type="number" name="minimo" value="<?php echo $minimo; ?>" />
	</p>
	<p>
		<label>M�ximo: </label>
		<input type="number" name="maximo" value="<?php echo $maximo; ?>" />
	</p>
	<p>
		<label>Quantidade de dezenas sorteadas: </label>
		<input type="number" name="nDezenas" value="<?php echo $nDezenas; ?>" />
	</p>
	<input type="submit" value="Sortear" />
</form>
<?php if ($method == "POST") { ?>

	<h2>Dezenas Sorteadas: </h2>
	<p>
	<?php echo implode(" | ", $sorteados); ?>
	</p>

<?php } ?>

</body>
</html> 