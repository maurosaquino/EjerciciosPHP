<?php

class Vuelo{

	private $_fecha;
	private $_empresa;
	private $_precio; 
	private $_listaDePasajeros = array();
	private $_cantMaxima; 



	function __construct($empresa, $precio, $cantmax){

		$this->_empresa = $empresa;
		$this->_precio = $precio;
		$this->_cantMaxima = $cantmax;
	}

	function GetCantMaxima(){

		return $this->_cantMaxima;
	}

	function SetCantMaxima($cantmax){

		$this->_cantMaxima = $cantmax;
	}

	//Agregar un método getter, que devuelva en una cadena de caracteres toda la información de un vuelo: fecha, empresa, precio, cantidad máxima de pasajeros, y toda la información de todos los pasajeros.

	function GetInfoVuelo(){

		$variable = "<br>". $this->_fecha . " " . $this->_empresa ." ". $this->_precio ." ". $this->_cantMaxima;
		
		foreach ($this->_listaDePasajeros as $pasajero){

			$variable = $variable ." ". $pasajero->GetNombre() ." ". $pasajero->GetApellido() ." ".$pasajero->GetDni() ." ". $pasajero->GetEsPlus() . "<br>";
		}


		return $variable;
	}

	//Crear un método de instancia llamado AgregarPasajero, en el caso que no exista en la lista, se agregará (utilizar Equals). Además tener en cuenta la capacidad del vuelo. El valor de retorno de este método indicará si se agregó o no.

	function AgregarPasajero($pasajero){

		$cantpasajeros = 0;
		$validar = FALSE;

		foreach ($this->_listaDePasajeros as $pasajerosenlista){

		if	($pasajerosenlista->Equals($pasajero)){

			$validar = True;
			break;
		}

		$cantpasajeros++;

		}

		if($validar==False && $this->_cantMaxima > $cantpasajeros){

			$this->_listaDePasajeros[] = $pasajero;
			echo "El pasajero ". $pasajero->GetApellido() . ", ".$pasajero->GetNombre() ." fue añadido.<br>";

		} elseif ($this->_cantMaxima >= $cantpasajeros) {

			echo "El pasajero ". $pasajero->GetApellido() . ", ". $pasajero->GetNombre() . " no se ha podido agregar debido al cupo maximo";
		} else {
			echo "El pasajero no se pudo agregar debido a que ya esta en el vuelo.";
		}
	}


	//Agregar un método de instancia llamado MostrarVuelo, que mostrará la información de un vuelo.

	function MostrarVuelo(){

		echo "<br><u>Información de Vuelo.</u> <br> <u>Fecha del Vuelo</u>: ". $this->_fecha ." <br> <u>Empresa</u>: " . $this->_empresa ."<br> <u>Precio del Pasaje</u>: " . $this->_precio . "<br> <u>Cantidad maxima de pasajeros:</u> ". $this->_cantMaxima . "<br> <u> Listado de Pasajeros</u>: ";

		foreach($this->_listaDePasajeros as $pasajero){

		echo "<br> <u>Nombre Completo</u>: ". $pasajero->GetNombre() .", ". $pasajero->GetApellido() ." <u>DNI</u>: ". $pasajero->GetDni() ." <u>Es Plus</u>: ". $pasajero->GetEsPlus() . "<br>";
		} 
	
		return;
	}


	//Crear el método de clase “Add” para que permita sumar dos vuelos. El valor devuelto deberá ser de tipo numérico, y representará el valor recaudado por los vuelos. Tener en cuenta que si un pasajero es Plus, se le hará un descuento del 20% en el precio del vuelo. (No toma todos los del Vuelo 2 - PREGUNTAR)

	static function Add($vuelo1, $vuelo2){

		$preciovuelo1 = $vuelo1->_precio;
		$preciovuelo2 = $vuelo2->_precio;
		$totalrecaudado = 0;

		foreach ($vuelo1->_listaDePasajeros as $pasajerov1){

			if($pasajerov1->GetEsPlus() == True){

				$totalrecaudado = $totalrecaudado + ($preciovuelo1 * 0.80);

			} else {

				$totalrecaudado = $totalrecaudado + $preciovuelo1;

			}
		}

		foreach ($vuelo2->_listaDePasajeros as $pasajerov2){

			if($pasajerov2->GetEsPlus() == True){

				$totalrecaudado = $totalrecaudado + ($preciovuelo2 * 0.80);

			} else {

				$totalrecaudado = $totalrecaudado + $preciovuelo2;

			}

		}

		return $totalrecaudado;
	}

	//Crear el método de clase “Remove”, que permite quitar un pasajero de un vuelo, siempre y cuando el pasajero esté en dicho vuelo, caso contrario, informarlo. El método retornará un objeto de tipo Vuelo. 

	static function Remove($vuelo,$pasajero){

		$validar = FALSE;
		$posicion = 0;

		foreach ($vuelo->_listaDePasajeros as $indice => $pasajerosenlista){

			if	($pasajerosenlista->Equals($pasajero)){

			
			$validar = TRUE;
			$posicion = $indice;
			unset($vuelo->_listaDePasajeros[$posicion]);

			break;
			}		
		}

			if ($validar == TRUE){

			echo "El pasajero ha sido removido exitosamente";

			}else{

			echo "No se encontró el pasajero en el vuelo";
			}
	}
}

?>