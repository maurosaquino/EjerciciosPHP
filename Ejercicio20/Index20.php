<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio 20, Operario y Fabrica - Mauro Aquino - Programación III </title>
</head>
<body>

<?php

//Prueba de Operario//

include('Operario.php');

$operario1 = new Operario(1234,'Juan','Ramirez');
$operario2 = new Operario(1235,'Hernan','Ferandez');

$infosalario = $operario1->GetSalario();

echo "$infosalario <br>";

$infoperario = $operario1->Mostrar();

echo "$infoperario <br>";

$soniguales = $operario1->Equals($operario2);

if ($soniguales == FALSE){

	echo "Los empleados comparados no son iguales <br>";

}else{

	echo "Los empleados comparados son iguales <br>";
}

$infoperario = Operario::MostrarDeClase($operario2);

echo "$infoperario <br>";

//Prueba de Fabrica

include('Fabrica.php');

$fabrica1 = new Fabrica ('Famularo');

$fabrica1->Add($operario1);

$fabrica1->MostrarOperarios();

//Fabrica::MostrarCosto($fabrica1);

//Fabrica::Equals($operario2,$fabrica1);

$fabrica1->Add($operario2);

$fabrica1->MostrarOperarios();

$fabrica1->Remove($operario2);

$fabrica1->MostrarOperarios();

?>

</body>
</html>