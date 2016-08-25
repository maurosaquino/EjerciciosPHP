<?php

	class Fabrica{


		private $_cantMaxOperarios;
		private $_operarios = array();
		private $_razonsocial;


		function __construct($razonsocial){

			$this->_razonsocial = $razonsocial;
			$this->_cantMaxOperarios = 5;
		}

		//RetornarCostos (de instancia, privado): Retorna el dinero que la fábrica tiene que gastar en concepto de salario de todos sus operarios. 

		private function RetornarCostos(){

			$gastototal = 0;

			foreach($this->_operarios as $operariofab){

				$gastototal = $gastototal + $operariofab->GetSalario();
			}

			return $gastototal;
		}

		//MostrarOperarios (de instancia, privado): Recorre el Array de operarios de la fábrica y muestra el nombre, apellido y el salario de cada operario (utilizar el método Mostrar de operario). (A REVISAR)

		function  MostrarOperarios(){

			require_once('Operario.php');

			foreach($this->_operarios as $operariofab){

				$datos =  $operariofab->Mostrar();
				
				echo $datos;

			}

			return;
		}

		//Add (de instancia): Agrega un operario al Array de tipo Operario, siempre y cuando haya lugar disponible en la fábrica y el operario no se encuentre ya ingresado. Reutilizar código. Retorna TRUE si pudo ingresar al operario, FALSE, caso contrario.

		function Add($operador){

			require_once('Operario.php');
			$validacion = FALSE;
			$contadormax = 0;
			
			foreach($this->_operarios as $operario2){

				if($operario2->Equals($operador)){

					$validacion = TRUE;
				
					break;
				}else{

				$contadormax++;
				}

			}

			if($validacion==TRUE || $contadormax>=$this->_cantMaxOperarios){

				echo "El operario no pudo ser agregado o ya esta en sistema<br>";

				return;
			}else{

				$this->_operarios[$contadormax-1]=$operador;

				echo "El operario fue agregado.<br>";
				return;
			}
		}

		//MostrarCosto (de clase): muestra la cantidad total del costo de la fábrica en concepto de salarios (utilizar el método RetornarCostos). 

		static function MostrarCosto($fabrica){

			echo "Costo total de salarios en la Fabrica: ".$fabrica->RetornarCostos()."<br>";
			return;
		}

		//Crear el método de clase “Equals”, recibe una Fabrica y un Operario. Retronará un booleano informando si el operario se encuentra en la fábrica o no. Reutilizar código. 

		static function Equals($operador,$fabrica){

			$validacion = FALSE;

			foreach($fabrica->_operarios as $operario2){

				if($operario2->Equals($operador)){

					$validacion = TRUE;
				
					break;
				}

			}

			if($validacion==TRUE){

				echo "El operario ya esta en la Fabrica<br>";

				return;
			}else{

				echo "El operario no esta en la Fabrica<br>";
				return;
			}
		}

		//Remove (de instancia): Recibe a un objeto de tipo Operario y lo saca de la fábrica, siempre y cuando el operario se encuentre en el Array de tipo Operario. Retorna TRUE si pudo quitar al operario, FALSE, caso contrario.

		function Remove($operador){

			require_once('Operario.php');
			$validacion = FALSE;
			$contador = 0;
			
			foreach($this->_operarios as $indice => $operario2){

				if($operario2->Equals($operador)){

					$validacion = TRUE;
					$contador = $indice;
				
					break;
				}

			}

			if($validacion==TRUE){

				unset($this->_operarios[$contador]);
				echo "El operario fue removido<br>";

				return;
			}else{

				echo "El operario no fue removido.<br>";
				return;
			}

		}

	}




?>