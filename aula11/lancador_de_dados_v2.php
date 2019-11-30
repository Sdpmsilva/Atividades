<?php

$method= $_SERVER["REQUEST_METHOD"];

	if ($method=="POST"); {
	
	$minimo = $_POST["minimo"];
	$manimo = $_POST["maximo"];
	$dados = $_POST["dados"];
	

}?>

<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Insert title here</title>
</head>
<body>
	<h1>INFORME OS VALORES</h1>
	
<?php if ($method=="GET"){ ?>
		
	<form method="POST">
		<label>minimo</label>
		<input name="minimo" type="number" />
		<label>maximo</label> 
		<input name="maximo" type="number" />
		<label>dados</label> 
		<input name="dados" type="number" /> 
		<input type="submit" />
	
	</form>
	<?php } ?>
	
	<?php echo rand("minimo; maximo")?>

</body>
</html>