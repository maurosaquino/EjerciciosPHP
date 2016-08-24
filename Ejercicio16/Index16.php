<html>
<head>
	<title>Ejercicio 16 - Mauro Aquino - Programación III</title>
</head>
<body>

<?php 


include ('Punto.php');
include ('Rectangulo.php');

$ver1 = new Punto (1,1);
$ver3 = new Punto (22,22);


$Rec = new Rectangulo ($ver1,$ver3);


$Rec->Dibujar();


 ?>

</body>
</html>
