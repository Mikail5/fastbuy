<?php
	class Seguridad extends Basedatos
	{
		public function validaEntrada($nombre){
			try{
				$r=parent::conexion()->prepare("SELECT * FROM empleados WHERE nomEmp=?");
				$r->bindParam(1, $nombre, PDO::PARAM_STR);
				$r->execute();
				return $r->fetch();
			}catch(Exception $e){
				die("Error en Seguridad->validaEntrada()" . $e->getMessage());
			}
		}

		public function sesionIniciada(){
			if (isset($_SESSION['user'])) {
				if ($_SESSION['user']->idRol==1) {
					header("Location: ?controller=admin");
		    }
				elseif ($_SESSION['user']->idRol==2) {
					header("Location: ?controller=vende");
				}
			}
		}

		public static function verficaSesion(){
			if (!isset($_SESSION['user'])) {
				header("Location: ?controller=index");
			}
		}

		public function verificaRol($rol){
			if ($rol!=$_SESSION['user']->idRol) {
				header("Location: ?controller=index");
			}
		}
	}
?>
