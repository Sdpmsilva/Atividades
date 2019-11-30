<?php 

$method= $_SERVER["REQUEST_METHOD"];

if  ($method =="POST"){
	$minimo = $_POST ["minimo"];
	$maximo = $_POST ["maximo"];
	$resultado = rand ($minimo, $maximo);

}
?>

	<form method="POST">
	
	<a href="index.html">Voltar</a>
	<h1>Informe os valores</h1>
	<p>
	<input name="minimo" type="number"/>
	</p>
	<input name="maximo" type="number"/>
	<P>
	<input type="submit">
	</P>
	</form>

	<?php 
	
	if ($method=="POST") { ?>
	
		<h1>valor resultado <?php echo $resultado; ?> <h1>
		
	<?php } ?>