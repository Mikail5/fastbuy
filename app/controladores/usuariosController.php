<?php
	class usuariosController extends Usuarios
	{
		public function __construct(){
				call_user_func(['Seguridad','verficaSesion']);
		}

		public function index(){
			require_once 'vistas/usuarios/index.php';
			require_once 'vistas/layouts/footer.php';
		}

		public function crear(){
			require_once 'vistas/usuarios/crear.php';
			require_once 'vistas/layouts/footer.php';
		}

		public function almace(){
			$_POST['contrase'] = password_hash($_POST['contrase'], PASSWORD_DEFAULT);
			if ($_GET['tipu'] == 1) {
				if (parent::registraEmp($_POST)) {
					header("Location: ?controller=admin&method=verUsu");
				}
			}
			elseif ($_GET['tipu'] == 2) {
				if (parent::registraCli($_POST)) {
					header("Location: ?controller=admin&method=verUsu");
				}
			}
			else{
				echo "Error al registrar";
			}
		}

		public function editar(){
			if ($_GET['tipu'] == 1) {
				$pro = parent::buscaEmp($_GET['idu']);
			}
			elseif ($_GET['tipu'] == 2) {
				$pro = parent::buscaCli($_GET['idu']);
			}
			require_once 'vistas/usuarios/actualizar.php';
			require_once 'vistas/layouts/footer.php';
		}

		public function actuali(){
			if ($_GET['tipu'] == 1) {
				$_POST['contrase'] = password_hash($_POST['contrase'], PASSWORD_DEFAULT);
				echo parent::actual_regEmp($_POST) ? header("Location: ?controller=admin&method=verUsu") : 'Error al actualizar';
			}
			elseif ($_GET['tipu'] == 2) {
				$_POST['contrase'] = password_hash($_POST['contrase'], PASSWORD_DEFAULT);
				echo parent::actual_regCli($_POST) ? header("Location: ?controller=admin&method=verUsu") : 'Error al actualizar';
			}
		}

		public function borrar(){
			if ($_GET['tipu'] == 1) {
				echo parent::eliminaEmp($_GET['idu']) ? header("Location: ?controller=admin&method=verUsu") : "Error al eliminar";
			}
			elseif ($_GET['tipu'] == 2) {
				echo parent::eliminaCli($_GET['idu']) ? header("Location: ?controller=admin&method=verUsu") : "Error al eliminar";
			}
		}
	}
?>
