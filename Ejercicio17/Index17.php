<!DOCTYPE html>
<html>
<head>
	<title>
	Ejercicio 17 - Mauro Aquino - Programación III	
	</title>
</head>
<body>

<?php

require ('Auto17.php');

$auto = new Auto('Amarillo','Fiat',10000,date("d-m-y"));
$auto2 = new Auto('Rojo', 'Peugeot', 11999, date("d-m-y"));
$auto3 = new Auto('Rojo', 'Fiat', 13999, date("d-m-y"));
$auto4 = new Auto('Amarillo', 'Fiat', 13999, date("d-m-y"));


$auto->AgregarImpuestos(20);

Auto::MostrarAuto($auto);

$auto->Equals($auto2);
$auto->Equals($auto3);

$valor_sumado = Auto::Add($auto,$auto4);

echo " Total de valor sumado: $valor_sumado";

$valor_sumado = Auto::Add($auto,$auto3);

echo "Total de valor sumado: $valor_sumado";


?>

</body>
</html>