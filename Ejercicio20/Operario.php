<?php

	class Operario{

		private $_apellido;
		private $_legajo;
		private $_nombre;
		private $_salario;


		function __construct($legajo, $apellido, $nombre){

			$this->_legajo = $legajo;
			$this->_apellido = $apellido;
			$this->_nombre = $nombre;
		}

		//GetSalario: Sólo retorna el salario del operario.

		function GetSalario(){

			return $this->_salario;
		}

		//SetAumentarSalario: Sólo permite asignar un nuevo salario al operario. La asignación consiste en incrementar el salario de acuerdo al porcentaje que recibe como parámetro. 

		function SetAumentarSalario($porcentaje){

			$this->_salario = $this->_salario + (($this->_salario * $porcentaje )/100);
		}

		//GetNombreApellido (de instancia): Retorna un String que tiene concatenado el nombre y el apellido del operario separado por una coma. 

		function GetNombreApellido(){

			$nombreapellido = $this->_apellido. ", ".$this->_nombre;

			return $nombreapellido;
		}

		//Mostrar (de instancia): Retorna un String con toda la información del operario. 

		function Mostrar(){

			$datosoperario = "Nombre Completo: ". $this->GetNombreApellido() .", Salario:".$this->GetSalario().", Legajo: ".$this->_legajo.".<br>";

			return $datosoperario;
		}

		//Mostrar (de clase): Recibe un operario y retorna un String con toda la información del mismo (utilizar el método Mostrar de instancia) 

		static function MostrarDeClase($operario){

			$datosoperario = "Nombre Completo: ". $operario->GetNombreApellido() .", Salario:".$operario->GetSalario().", Legajo: ".$operario->_legajo.".<br>";

			return $datosoperario;
		}


		//Crear el método de instancia “Equals” que permita comparar al objeto actual con otro de tipo Operario. Retronará un booleano informando si el nombre, apellido y el legajo de los operarios coinciden al mismo tiempo.

		function Equals($operario){

			if ($this->_nombre == $operario->_nombre && $this->_apellido == $operario->_apellido && $this->_legajo == $operario->_legajo){

				return TRUE;
			} else {

				return FALSE;
			}
		}


	}


