<!DOCTYPE html>
<html>
<head>
	<title>
	Ejercicio 17 - Mauro Aquino - Programación III	
	</title>
</head>
<body>

<?php

require ('Auto18.php');
require ('Garage18.php');

$auto1 = new Auto('Amarillo','Fiat',10000,date("d-m-y"));
$auto2 = new Auto('Rojo', 'Peugeot', 11999, date("d-m-y"));
$auto3 = new Auto('Rojo', 'Fiat', 13999, date("d-m-y"));
$auto4 = new Auto('Amarillo', 'Fiat', 13999, date("d-m-y"));


$Estacionamiento = new Garage('Aquino Hnos','60');

$Estacionamiento->Add($auto1);
$Estacionamiento->Add($auto2);

$Estacionamiento->MostrarGarage();

$Estacionamiento->Add($auto1);

$Estacionamiento->Remove($auto1);

$Estacionamiento->MostrarGarage();

?>

</body>
</html>