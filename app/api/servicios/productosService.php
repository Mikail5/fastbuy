<?php 
	class productosService extends Productos{
		public function index(){
			if(isset($_GET['cate'])){
				$result = parent::mostrar($_GET['cate']);
				$productos = array(
					'statuscode' => 200,
					'productos' => $result
				);
				echo(json_encode($productos));
			}
			else{
				echo("No se ha encontrado la categoria");
			}
		}

		public function buscarProducto(){
			if(isset($_GET['idProducto'])){
				$result = parent::busca($_GET['idProducto']);
				$producto = array(
					'statuscode' => 200,
					'producto' => $result
				);
				echo(json_encode($producto));
			}
		}

		public function buscarProductoPorDato(){
			if(isset($_GET['dato'])){
				$result = parent::consulta($_GET['dato']);
				$productos = array(
					'statuscode' => 200,
					'productos' => $result
				);
				echo(json_encode($productos));
			}
		}
	}
?>