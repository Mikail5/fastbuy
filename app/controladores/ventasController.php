<?php
	class ventasController
	{
		public function __construct(){
			call_user_func(['Seguridad','verficaSesion']);
		}

		public function index(){
			require_once 'vistas/ventas/index.php';
			require_once 'vistas/layouts/footer.php';
		}

		public function crear(){
			require_once 'vistas/ventas/crear.php';
			require_once 'vistas/layouts/footer.php';
		}

		public function almace(){
			/*if (parent::registra($_POST,$ruta)) {
				header("Location: ?controller=ventas");
				/*if ($_SESSION['user']->id_rol=="1") {
					header("Location: ?controller=admin");
				}
				elseif ($_SESSION['user']->id_rol=="2") {
					header("Location: ?controller=ven");
				}
			}
			else{
				echo "Error al registrar";
			}*/
		}

		public function borrar(){
			/*if (parent::elimina_registro($_GET['idpro'])) {
				header("Location: ?controller=ventas");
			}
			else{
				echo "Error al eliminar";
			}*/
		}
	}
?>
