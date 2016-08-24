<?php

	class Rectangulo {


		private	$_verticeUno;
		private	$_verticeDos; 
		private	$_verticeTres;
		private	$_verticeCuatro;

		public  $_area;
		public	$_ladoVertical;
		public	$_ladoHorizontal;
		public	$_perimetro;

		function __construct($Puntov1, $Puntov3){

			
			$this->_verticeUno = $Puntov1;
			$this->_verticeTres = $Puntov3;

		}

		function Dibujar(){

			$this->_ladoHorizontal = ($this->_verticeTres->GetX()) - ($this->_verticeUno->GetX());
			$this->_ladoVertical = ($this->_verticeTres->GetY()) - ($this->_verticeUno->GetY()); 
			$this->_area = $this->_ladoHorizontal * $this->_ladoVertical;
			$this->_perimetro = 2*($this->_ladoHorizontal) + 2*($this->_ladoVertical);

			echo "Valores:" . $this->_ladoHorizontal . "  " . $this->_ladoVertical . " " . $this->_area . " " . $this->_perimetro . " <br>";	
			

			for ($contador = 0 ; $contador < $this->_ladoVertical; $contador++){

				for ($contador2 = 0 ; $contador2 < $this->_ladoHorizontal; $contador2++){

					echo "*";

				}

				echo "<br>";
			}

			return;

		
		}
 
 		


	}


?>
