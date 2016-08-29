<?php

	class BDConnection{


		static function link(){

			$ini = parse_ini_file("config.ini");

			$connection = mysqli_connect($ini['db_location'],$ini['db_user'],"",$ini['db_name']) or die("Problemas con la conexión");

			return $connection;
		}

		static function close($con){

			mysqli_close($con);

			return;
		}


	}

?>