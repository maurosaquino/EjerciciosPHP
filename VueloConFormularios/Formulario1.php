<!DOCTYPE html>
<html>
<head>
	<title>Formulario de entrada del dato</title>
	<link rel="stylesheet" type="text/css" href="estilo1.css">
</head>

  <body>
  <div id="div1">
  </div>
  
  <div id="div2">

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

    $esPlus=TRUE;

    }elseif ($esPlus=='NO'){

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


  <form method="post" action="Formulario.php"> 
  <input id="f3" type="submit" value="Volver"> 
  </form>

  </div>



</body>
</html>