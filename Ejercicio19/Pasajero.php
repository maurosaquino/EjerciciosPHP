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

			echo "Los pasajeros " . $this->_nombre . ", ". $this->_apellido . " y " . $pasajero->_nombre . ", ". $pasajero->_apellido . " son distintos <br>";;
			return FALSE;
		}

	}

	//Agregar un método getter llamado GetInfoPasajero, que retornará una cadena de caracteres con los atributos concatenados del objeto.

	function GetInfoPasajero(){

		$informacion =  "La informacion del pasajero es: <br> <u>Nombre  Completo:</u> " . $this->_apellido . " , " . $this->_nombre . " , <u>DNI</u>: ". $this->_dni . " <u>Es Plus</u>: " . $this->_esPlus;

		return $informacion;

	}

	//Agregar un método de clase llamado MostrarPasajero que mostrará los atributos en la página.

	static function mostrarPasajero($pasajero){

		echo " <br>";
		echo "La informacion del pasajero es: <br> <u>Nombre  Completo:</u> " . $pasajero->_apellido . " , " . $pasajero->_nombre . " , <u>DNI</u>: ". $pasajero->_dni . " <u>Es Plus</u>: " . $pasajero->_esPlus;

		return;
	}

}


?>