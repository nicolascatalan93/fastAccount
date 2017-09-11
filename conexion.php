<?php


	class Conectar{


		public function conexion(){
			$user="root";
			$pass="admin123";
			$host="localhost";
			$db="contalinedb";
			try {
				$conexion = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
				$conexion->serAttribute(PDO::ATTR_ERROMODE, PDO::ERROMODE_EXCEPTION);
				$conexion->exec("SET CHARACTER SET UTF8");
			} catch (Exception $e) {

				die("Error". $e->getMessage());
				echo "Linea del error" . $e->getLine();
			}
			return $conexion;
		}
	}

?>
