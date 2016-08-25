<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio 19, Vuelo y Pasajero - Mauro Aquino - Programación III </title>
</head>
<body>

<?php

include('Pasajero.php');
include('Vuelo.php');

$pasajero1 = new Pasajero('Aquino', 'Mauro', '33853349', TRUE);  
$pasajero2 = new Pasajero('Arena Castellanos', 'Agustina', '39068422', FALSE);
$pasajero3 = new Pasajero('Aquino', 'Maurita', '33853348', TRUE); 
$pasajero4 = new Pasajero('Arena', 'Agustinita', '39068423', FALSE); 
$pasajero5 = new Pasajero('Ruiz', 'Jorge', '54068423', FALSE);


$vuelo1 = new Vuelo('AA',500,4);
$vuelo2 = new Vuelo('LAN',400,3);

$pasajero1->Equals($pasajero2);

$pasajero1->Equals($pasajero1);

/*
$informacion = $pasajero1->GetInfoPasajero();

echo $informacion;

Pasajero::MostrarPasajero($pasajero2);

echo "--------------------------------------------------------------<br>";
*/

$vuelo1->AgregarPasajero($pasajero1);
$vuelo1->AgregarPasajero($pasajero2);
$vuelo2->AgregarPasajero($pasajero3);
$vuelo2->AgregarPasajero($pasajero4);
$vuelo2->AgregarPasajero($pasajero5);


$vuelo1->MostrarVuelo();
$vuelo2->MostrarVuelo();

$total = Vuelo::Add($vuelo1,$vuelo2);

Vuelo::Remove($vuelo1, $pasajero1);

$vuelo1->MostrarVuelo();


echo "<br> $total";

?>

</body>
</html>