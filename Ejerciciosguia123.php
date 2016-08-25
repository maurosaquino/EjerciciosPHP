<!DOCTYPE html>
<html>
<head>
	<title>Ejercicios guia 1,2,3 - Mauro Aquino - Programacion III</title>
</head>
<body>
<?php

//Aplicación N3: OBTENER EL VALOR DEL MEDIO

$a  = 2;
$b  = 2;
$c  = 3;

echo "Aqui comienza la ejecución de la <B>Aplicacion N3: Obetener el valor del medio</B>, los valores son $a $b $c:<br>";

if ($a>$b && $a>$c){

	if ($b>$c){

		echo "El del medio es $b|";
	}elseif ($b==$c){

		echo "No hay valor del medio";
	}else{

		echo "El del medio es $c";
	}
}

if ($b>$a && $b>$c){

	if ($a>$c){

		echo "El del medio es $a";
	}elseif ($a==$c){

		echo "No hay valor del medio";
	}else{

		echo "El del medio es $c";
	}
}

if ($c>$a && $c>$b){

	if ($a>$b){

		echo "El del medio es $a";
	}elseif ($a==$b){

		echo "No hay valor del medio";
	}else{

		echo "El del medio es $b";
	}
}

echo " <br>";
echo "Fin de la ejecución de <B>Aplicacion N3</B> <br>";

//Aplicación N4: CALCULADORA

$op  = '/';
$num1 = 3;
$num2 = 3;

echo "<br>Aqui comienza la ejecución de la <B>Aplicacion N4: CALCULADORA</B>, los valores son $num1 $num2 el operador es $op:<br>";

if ($op == '*'){

	echo "Resultado de la multiplicación: " . $num1*$num2 . "<br>";

	}elseif($op=='+'){

	echo "Resultado de la suma: " . $num1+$num2 . "<br>";

	}elseif($op=='/'){
	
	echo "Resultado de la division: " . $num1/$num2 . "<br>";

	}elseif($op=='-'){

	echo "Resultado de la resta: " . $num1-$num2 . "<br>";

	}else{

	echo "Error, operador no valido<br>";
}

echo "Fin de la ejecución de <B>Aplicacion N4</B> <br>";

//APLICACION N5:NUMEROS EN LETRAS transformar numeros ente 20 y 60 en letras

$num = 20;
$array = array();

//str_split separa cada numero en una posición del array
$array = str_split($num);

echo "<br>Aqui comienza la ejecución de la <B>Aplicacion N5: NUMERO A LETRAS</B>, numero a convertir $num:<br>";

if ($num<20 || $num>60){

	echo "El valor ingresado es incorrecto, debe ser entre 20 y 60<br>";
	}elseif($num==20){

		echo "Veinte<br>";
	}else{

	switch ($array[0]){
	case 2: 
	echo "Veinti";
	break;
	case 3:
	echo "Treinta";
	break;
	case 4:
	echo "Cuartenta";
	break;
	case 5:
	echo "Cincuenta";
	break;
	case 6: 
	echo "Sesenta";}
	
	switch ($array[1]){
	case 1:
	echo " y uno<br>";
	break;
	case 2:
	echo " y dos<br>";
	break;
	case 3:
	echo " y tres<br>";
	break;
	case 4:
	echo " y cuatro<br>";
	break;
	case 5:
	echo " y cinco<br>";
	break;
	case 6:
	echo " y seis<br>";
	break;
	case 7:
	echo " y siete<br>";
	break;
	case 8:
	echo " y ocho <br>";
	break;
	case 9:
	echo " y nueve<br>";
	break;
	case 0:
	echo "<br>";
	break;
	}

}

echo "Fin de la ejecución de <B>Aplicacion N5</B> <br>";


//APLICACION N6: CARGA ALEATOREA Cargar 5 numeros y sacar porcentaje en relacion a 6


$array6 = array();
$mayor = 0;
$menor = 0;
$igual = 0;

echo "<br>Aqui comienza la ejecución de la <B>Aplicacion N6: CARGA ALEATOREA</B>, los numeros son ";

for ($cont=0; $cont<5; $cont++){

	$array6[$cont] = rand(0,10);

	echo $array6[$cont] . ", ";

	if ($array6[$cont] > 6){
		
			$mayor++;
		
		}elseif($array6[$cont]==6){
		
			$igual++;
		
		}else{
		
			$menor++;
	}
}

echo ":<br> Hay " . round(($mayor*100)/5 ,2) .  "% numeros mayores a 6, ". round(($menor*100)/5,2) ."% numeros menores a 6 y ". round(($igual*100)/5,2) . "% iguales a 6<br>";

echo "Fin de la ejecución de <B>Aplicacion N6</B> <br>";


//APLICACION N7: MOSTRAR IMPARES cargar 10 numeros impares y mostrarlos con While y Foreach

$array7 = array(1,3,5,7,9,11,13,15,17,19);
$valor  = 0;

echo "<br>Aqui comienza la ejecución de la <B>Aplicacion N7: MOSTRAR IMPARES</B>";

echo "<br>Numeros mostrados mediante FOREACH: ";

foreach($array7 as $valor){

	echo "$valor ";

}

$valor = 0;

echo "<br>Numeros mostrados mediante WHILE: ";

while($valor<=9){

	echo $array7[$valor]." ";
	$valor++;

}

echo "<br>Fin de la ejecución de <B>Aplicacion N7</B> <br>";



?>
</body>
</html>