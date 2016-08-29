<?php

class Pasajero{

	private $_apellido;
	private $_nombre;
	private $_dni;
	private $_esPlus;


	function __construct($apellido, $nombre, $dni, $esPlus){

		$this->_apellido 	= $apellido;
		$this->_nombre		= $nombre;
		$this->_dni    		= $dni;
		$this->_esPlus 		= $esPlus;

	}	

	function GetNombre(){

		return $this->_nombre;
	}	

	function GetApellido(){

		return $this->_apellido;
	}

	function GetDni(){

		return $this->_dni;
	}

	function GetEsPlus(){

		return $this->_esPlus;
	}

	//Crear el método de instancia “Equals” que permita comparar dos objetos Pasajero. Retornará TRUE cuando los _dni sean iguales.

	function Equals($pasajero){

		if($this->_dni == $pasajero->_dni){

			echo "El pasajero " . $this->_nombre . ", ". $this->_apellido . " es el mismo al comparado <br>";
			return TRUE;

		} else {

			return FALSE;
		}
	}

	//Agregar un método getter llamado GetInfoPasajero, que retornará una cadena de caracteres con los atributos concatenados del objeto.

	function GetInfoPasajero(){

	}

	//Agregar un método de clase llamado MostrarPasajero que mostrará los atributos en la página.

	static function mostrarPasajero($pasajero){

		echo " <br>";
		echo "La informacion del pasajero es: <br> <u>Nombre  Completo:</u> " . $pasajero->_apellido . " , " . $pasajero->_nombre . " , <u>DNI</u>: ". $pasajero->_dni . " <u>Es Plus</u>: " . $pasajero->_esPlus;

		return;
	}


	static function recuperarPasajeros($conexion){

	$registros=mysqli_query($conexion,"select INF_PASAJ_V_DNI,
										  INF_PASAJ_V_NOM,
										  INF_PASAJ_V_APE,
										  INF_PASAJ_V_PLUS 
										  from INF_PASAJ_VUELO") or die("Problemas en el select:".mysqli_error($conexion));

	
	while ($dato=mysqli_fetch_array($registros))
	{
  		$pasajero= new pasajero($dato['INF_PASAJ_V_APE'],$dato['INF_PASAJ_V_NOM'],$dato['INF_PASAJ_V_DNI'],$dato['INF_PASAJ_V_PLUS']);
  		$listapasajeros[] = $pasajero;

  	}

  	return $listapasajeros;


	}


}


?>