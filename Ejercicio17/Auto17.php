<?php

	class Auto{

		private $_color;
		private $_precio;
		private $_marca;
		private $_fecha;

		function __construct ($color, $marca, $precio, $fecha){


			$this->_color = $color;
			$this->_marca = $marca;
			$this->_precio = $precio;
			$this->_fecha = $fecha;


		}

		//Realizar un método de instancia llamado “AgregarImpuestos”, que recibirá un doble por parámetro y que se sumará al precio del objeto. 

		function AgregarImpuestos($impuesto){

			$this->_precio = $this->_precio + $impuesto;


		}
		
		//Realizar un método de clase llamado “MostrarAuto”, que recibirá un objeto de tipo “Auto” por parámetro y que mostrará todos los atributos de dicho objeto.

		static function MostrarAuto ($auto){

			echo "Caracteristicas del auto <br>";
			echo "Color: " . $auto->_color ." Marca: " . $auto->_marca ." Precio: " . $auto->_precio ." Fecha: " . $auto->_fecha;

			return;


		}

		//Crear el método de instancia “Equals” que permita comparar dos objetos de tipo “Auto”. Sólo devolverá TRUE si ambos “Autos” son de la misma marca.

		function Equals ($auto){

			if ($this->_marca == $auto->_marca) {

				echo " <br>";
				echo "Los autos son de la misma marca";

			} else {

				echo " <br>";
				echo "Los autos no son de la misma marca";

			}

			return;
		}

		//Crear un método de clase, llamado “Add” que permita sumar dos objetos “Auto” (sólo si son de la misma marca, y del mismo color, de lo contrario informarlo) y que retorne un Double con la suma de los precios o cero si no se pudo realizar la operación.

		static function Add($auto1, $auto2){

			$valor_sumado = 0;

			echo "<br>";

			if ($auto1->_marca == $auto2->_marca && $auto1->_color == $auto2->_color){

				$valor_sumado = $auto1->_precio + $auto2->_precio;

				echo "El valor de los autos fue sumado satisfactoriamente. ";

			}  else {

				
				echo "Los autos no son del mismo color o marca. ";

			}

			return $valor_sumado;

		}


	}	


?>