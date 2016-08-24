<?php

class Garage{

	private $_razonSocial;
	private $_precioPorHora;
	public	$_autos = array();


	function __construct($razonSocial, $precioporhora){

		$this->_razonSocial = $razonSocial;
		$this->_precioPorHora = $precioporhora;
		
	}

	//Realizar un método de instancia llamado “MostrarGarage”, que no recibirá parámetros y que mostrará todos los atributos del objeto.

	function MostrarGarage(){

		foreach ($this->_autos as $indice => $valor){

			echo " " . $valor->_color ." " . $valor->_marca  ." ". $valor->_precio ." ". $valor->_fecha . "<br>";


		}

		return;

	}

	//Crear el método de instancia “Equals” que permita comparar al objeto de tipo Garaje con un objeto de tipo Auto. Sólo devolverá TRUE si el auto está en el garaje.

	function Equals($auto1){
	
		foreach ($this->_autos as $indice => $valor){

			if ($valor->_marca == $auto1->_marca && $valor->_color == $auto1->_color && $valor->_precio == $auto1->_precio  && $valor->_fecha == $auto1->_fecha) {

				echo "El auto esta en el Garage";
				

			}
		}

	return;

	}

	//Crear el método de instancia “Add” para que permita sumar un objeto “Auto” al “Garage” (sólo si el auto no está en el garaje, de lo contrario informarlo). Ejemplo:	$miGarage->Add($autoUno);

	function Add($auto){

		$validar = 'N';

		foreach ($this->_autos as $valor){

			if ($valor->_marca == $auto->_marca && $valor->_color == $auto->_color && $valor->_precio == $auto->_precio  && $valor->_fecha == $auto->_fecha) {

				$validar='Y';

				break;

			} 

			}

			if ($validar=='Y'){

				echo "El auto ya esta en el Garage <br>";

			} else {

				$this->_autos[] = $auto;

				echo "El auto fue agregado al Garage <br>";

			} 

		return;

	}

	//Crear el método de instancia “Remove” para que permita quitar un objeto “Auto” del “Garage” (sólo si el auto está en el garaje, de lo contrario informarlo).

	function Remove ($auto){

		$validar = 'N';
		$posicion = 0;

		foreach ($this->_autos as $indice => $valor){

			if ($valor->_marca == $auto->_marca && $valor->_color == $auto->_color && $valor->_precio == $auto->_precio  && $valor->_fecha == $auto->_fecha) {

				$validar='Y';
				$posicion = $indice;

				break;

			} 

			}

			if ($validar=='Y'){

				unset($this->_autos[$posicion]);

				echo "El auto fue removido del Garage Garage <br>";

			} else {

				echo "El auto no se encontraba en el Garage <br>";

			} 

		return;

	}



	


	
		
}

?>