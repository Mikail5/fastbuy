<?php
	class productosController extends Productos
	{
		public function __construct(){
			call_user_func(['Seguridad','verficaSesion']);
		}

		public function index(){
			require_once 'vistas/productos/index.php';
			require_once 'vistas/layouts/footer.php';
		}

		public function crear(){
			require_once 'vistas/productos/crear.php';
			require_once 'vistas/layouts/footer.php';
		}

		public function almace(){
			$nimg=$_FILES['imag']['name'];
			$timg=$_FILES['imag']['type'];
			$ruta="assets/img/".$nimg;
			move_uploaded_file($_FILES['imag']['tmp_name'], $ruta);
			if (parent::registra($_POST,$ruta)) {
				if ($_SESSION['user']->idRol=="1") {
					header("Location: ?controller=admin&method=verPro&cate=1");
				}
				elseif ($_SESSION['user']->idRol=="2") {
					header("Location: ?controller=vende&method=verPro&cate=1");
				}
			}
			else{
				echo "Error al registrar";
			}
		}

		public function editar(){
			$pro = parent::busca($_GET['idpro']);
			require_once 'vistas/productos/actualizar.php';
			require_once 'vistas/layouts/footer.php';
		}

		public function actuali(){
			$nimg=$_FILES['imag']['name'];
			$timg=$_FILES['imag']['type'];
			$ruta="assets/img/".$nimg;
			move_uploaded_file($_FILES['imag']['tmp_name'], $ruta);
			echo parent::actual_registro($_POST,$ruta) ? header("Location: ?controller=admin&method=verPro&cate=1") : "Error al actualizar";
		}

		public function borrar(){
			echo parent::elimina_registro($_GET['idpro']) ? header("Location: ?controller=admin&method=verPro&cate=1") : "Error al eliminar";
		}
	}
?>
