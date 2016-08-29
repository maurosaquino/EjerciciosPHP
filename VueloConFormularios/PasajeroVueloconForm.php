<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio 19, Vuelo y Pasajero - Mauro Aquino - Programación III </title>
</head>
<body>

<?php

include('Pasajero.php');
include('Vuelo.php');
include('BDConnection.php');

$lispasajeros = array();

$nombre   = $_REQUEST['nombre']; 
$apellido = $_REQUEST['apellido'];
$dni      = $_REQUEST['dni'];
$esPlus   = $_REQUEST['esPlus'];

if ($esPlus == 'SI'){

    echo "El pasajero es Plus<br>";
    $esPlus=TRUE;

    }elseif ($esPlus=='NO'){

    echo "El pasajero no es Plus<br>";
    $esPlus=FALSE;
  }


	$conexion= BDConnection::link();
	
	$lispasajeros = Pasajero::recuperarPasajeros($conexion);	

	BDConnection::close($conexion);

 	echo "<table border=1>
  		 	 <tr>
			    <th>Nombre</th>
			    <th>Apellido</th>
			    <th>DNI</th>
			    <th>esPlus</th>
  			</tr>
  			<tr>";

			foreach ($lispasajeros as $pasajero2){

		
			echo "<td>".$pasajero2->GetNombre()."</td> <td>".$pasajero2->GetApellido()."</td><td>".$pasajero2->GetDNI()."</td><td>".$pasajero2->GetEsPlus()."</td> </tr>";

	}

   echo "</table>";

?>

</body>
</html>


