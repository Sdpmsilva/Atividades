<?php 
$lista = array();
$pessoa = array();
$pessoa["nome"] = "Igor";
$pessoa["sobrenome"] = "Santos";
$pessoa["endereco"] = "Bras�lia - DF";
$pessoa2 = array();
$pessoa2["nome"] = "Steve";
$pessoa2["sobrenome"] = "Jobs";
$pessoa2["endereco"] = "San Francisco - CA";
$lista[] = $pessoa;
$lista[] = $pessoa2;
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Arrays</title>
</head>
<body>
<a href="index.html">Voltar</a>
<h1>Arrays</h1>
<p>Interpola��o: 
<?php echo "{$pessoa["nome"]} {$pessoa["sobrenome"]}"; ?>
</p>
<p>Concatena��o: 
<?php echo $pessoa["nome"] . " " . $pessoa["sobrenome"]; ?>
</p>
</body>
</html> 