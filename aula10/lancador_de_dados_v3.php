<?php 

$method= $_SERVER["REQUEST_METHOD"];

	if ($method =="POST") {
		
		$minimo = $_POST ["minimo"];
		$maximo = $_POST ["maximo"];
		$dados = $_POST ["dados"];
		 		
	}

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
</head>
<body>


<?php 

	if ($method == "GET") { ?>
	<form method= "POST" >
	    
	    <p>
		<label>minimo:</label>	<input type="number" name = "minimo"/>
		<p>
		<label>maximo:</label>	<input type="number" name = "maximo"/>
		<p>
		<label>dados:</label>	<input type="number" name = "dados"/>
		<p>
		<input type = "submit"/>

	
	</form>
	
	<a href = "index.html">Voltar</a>
	<h1>Lancador de dados v3</h1>

	<?php } else { ?>
	<h1> Valores classificados </h1>
	
	<?php for ($i = 0; $i < $dados; $i ++ ) { ?>
	<h3>
	<?php echo rand ($minimo , $maximo);?>
	
	</h3>
	<?php }?>
	<?php }?>

</body>
</html>