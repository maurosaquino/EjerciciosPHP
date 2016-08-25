<!DOCTYPE html>
<html>
<head>
	<title>Ejercicios guia 1,2,3 - Mauro Aquino - Programacion III</title>
</head>
<body>
<?php

//Aplicación N3: OBTENER EL VALOR DEL MEDIO

$a  = rand (1,50);
$b  = rand (1,50);
$c  = rand (1,50);

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

$op  = '+';
$num1 = rand (1,50);
$num2 = rand (1,50);

echo "<br>Aqui comienza la ejecución de la <B>Aplicacion N4: CALCULADORA</B>, los valores son $num1 $num2:<br>";

for ($x=0;$x<4;$x++){

	if ($op == '*'){

	echo "El operador es * <br> Resultado de la multiplicación: " . $num1*$num2 . "<br>";
	
	$op='/';

	}elseif($op=='+'){

	echo "El operador es + <br> Resultado de la suma: " . ($num1+$num2) . "<br>";
	
	$op='-';
	
	}elseif($op=='/'){
	
	echo "El operador es / <br> Resultado de la division: " . round($num1/$num2,2) . "<br>";
	
	$op='+';

	}elseif($op=='-'){

	echo "El operador es - <br> Resultado de la resta: " . ($num1-$num2) . "<br>";
	$op='*';

	}else{

	echo "Error, operador no valido<br>";
	}
}

echo "Fin de la ejecución de <B>Aplicacion N4</B> <br>";

//APLICACION N5:NUMEROS EN LETRAS transformar numeros ente 20 y 60 en letras

$num = rand (10,70);
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


//APLICACION  N11: Mostrar las primeras cuatro potencias del 1 al 4

$numonce = rand(1,10);

echo "<br>Aqui comienza la ejecución de la <B>Aplicacion N11: POTENCIAS DE NUMEROS</B>: <br>";

function Potencias($num){

	echo "Numero $num elevado al cuadrado  :" . pow($num, 2). ".<br>";
	echo "Numero $num elevado al cubo      :" . pow($num, 3). ".<br>";
	echo "Numero $num elevado a la cuarta  :" . pow($num, 4). ".<br>";
	echo "Numero $num elevado a la quinta  :" . pow($num, 5). ".<br>";

}

echo "El numero es $numonce: <br>";
Potencias($numonce);

echo "Fin de la ejecución de <B>Aplicacion N1</B> <br>";

//APLICACION  N12: INVERTIR LA PALABRA


echo "<br>Aqui comienza la ejecución de la <B>Aplicacion N12: INVERTIR PALABRA</B>: <br>";

function InvertirPalabra($palabra){

	$arraydoce = array();
	$lenght = strlen($palabra);
	$arraydoce = str_split($palabra);
	
	for ($x=0;$x<$lenght;$x++){

		echo  $arraydoce[(($lenght-1)-$x)];

	}

 return;

}

$palabra_rand1  = 'HOLA';
$palabra_rand2  = 'JUANCHO';
$palabra_rand3  = 'MARIA';
$palabra_corr1 	= 'RAMON';
$palabra_corr2 	= 'SURFISTA';
$palabra_corr3	= 'NEUQUEN';
$numerodoce 	= rand(1,6);

switch ($numerodoce){
		case 1: 
		echo "La palabra es $palabra_rand1. Invertida:";
		InvertirPalabra($palabra_rand1);
		break;
		case 2: 
		echo "La palabra es $palabra_rand2. Invertida:";
		echo InvertirPalabra($palabra_rand2);
		break;
		case 3: 
		echo "La palabra es $palabra_rand3. Invertida:";
		InvertirPalabra($palabra_rand3);
		break;
		case 4: 
		echo "La palabra es $palabra_corr1. Invertida:";
		InvertirPalabra($palabra_corr1);
		break;
		case 5: 
		echo "La palabra es $palabra_corr2. Invertida:";
		InvertirPalabra($palabra_corr2);
		break;
		case 6: 
		echo "La palabra es $palabra_corr3. Invertida:";
		InvertirPalabra($palabra_corr3);
		break;
	}

echo "<br>Fin de la ejecución de <B>Aplicacion N12</B> <br>";

//APLICACION  N13: VALIDAR Y DEVOLVER PALABRA


echo "<br>Aqui comienza la ejecución de la <B>Aplicacion N13: RETORNAR PALABRA</B>";

$palabra_rand1  = 'Incorrecta';
$palabra_rand2  = 'NoSirve';
$palabra_rand3  = 'MalaPalabra';
$palabra_corr1 	= 'Recuperatorio';
$palabra_corr2 	= 'Parcial';
$palabra_corr3	= 'Programacion';
$max 			= rand (1,20);
$numerotrece 	= rand(1,6);

	function ValidaPalabra($palabra, $max){

		if (strlen($palabra)>$max){

			echo "ERROR: La palabra supera los caracteres permitidos.<br>";
			return 0;
		} elseif ($palabra == 'Programacion' || $palabra == 'Parcial' || $palabra == 'Recuperatorio') {
			return 1;
		}else{
			return 0;
		}
	}

	switch ($numerotrece){
		case 1: 
		echo "<br>La palabra es $palabra_rand1 :<br>";
		$booleantrece = ValidaPalabra($palabra_rand1, $max);
		echo "Numero Devuelto: $booleantrece";
		break;
		case 2: 
		echo "<br>La palabra es $palabra_rand2 :<br>";
		$booleantrece = ValidaPalabra($palabra_rand2, $max);
		echo "Numero Devuelto: $booleantrece";
		break;
		case 3: 
		echo "<br>La palabra es $palabra_rand3: <br>";
		$booleantrece = ValidaPalabra($palabra_rand3, $max);
		echo "Numero Devuelto: $booleantrece";
		break;
		case 4: 
		echo "<br>La palabra es $palabra_corr1 :<br>";
		$booleantrece = ValidaPalabra($palabra_corr1, $max);
		echo "Numero Devuelto: $booleantrece";
		break;
		case 5: 
		echo "<br>La palabra es $palabra_corr2 :<br>";
		$booleantrece = ValidaPalabra($palabra_corr2, $max);
		echo "Numero Devuelto: $booleantrece";
		break;
		case 6: 
		echo "<br>La palabra es $palabra_corr1: <br>";
		$booleantrece = ValidaPalabra($palabra_corr3, $max);
		echo "Numero Devuelto: $booleantrece";
		break;
	}

echo "<br>Los caracteres maximos para esta palabra son $max<br>";

echo "Fin de la ejecución de <B>Aplicacion N13</B> <br>";


//APLICACION  N14: Funcion de numero par o impar

$numero = rand(1,50);
$boolean;

echo "<br>Aqui comienza la ejecución de la <B>Aplicacion N14: PAR E IMPAR</B>, el numero es $numero: <br>";

	function esPar($num) {


			if($num % 2 == 0 )
			{ 
				return TRUE;
			}

			return FALSE;
	}
	
	$boolean = esPar($numero);
	
	if ($boolean == TRUE){

		echo "El numero es PAR<br>";

		}

		else{ 

		echo "El numero es IMPAR<br>";
	}

echo "Fin de la ejecución de <B>Aplicacion N14</B> <br>";


?>
</body>
</html>