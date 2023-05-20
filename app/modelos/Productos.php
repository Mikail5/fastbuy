<?php
	class Productos extends Basedatos
	{
		public function mostrar($categ){
			try{
				$r=parent::conexion()->prepare("SELECT * FROM productos WHERE id_cate=?");
				$r->bindParam(1, $categ, PDO::PARAM_INT);
				$r->execute();
				return $r->fetchAll();
			}catch(Exception $e){
				die("Error en Productos->mostrar()" . $e->getMessage());
			}
		}

		public function consulta($data){
			try{
				$r=parent::conexion()->prepare("SELECT * FROM productos WHERE nomPro LIKE :term OR precioPro LIKE :term");
				$r->bindValue(':term', '%'.$data.'%');
				$r->execute();
				return $r->fetchAll();
			}catch(Exception $e){
				die("Error en Productos->consulta()" . $e->getMessage());
			}
		}

		public function registra($data,$url){
			try{
				$r=parent::conexion()->prepare("INSERT INTO productos (nomPro, cantidad, precioPro, link_img, descripcion, id_cate) VALUES (?,?,?,?,?,?)");
				$r->bindParam(1, $data['nombre'], PDO::PARAM_STR);
				$r->bindParam(2, $data['candis'], PDO::PARAM_INT);
				$r->bindParam(3, $data['precio'], PDO::PARAM_INT);
				$r->bindParam(4, $url, PDO::PARAM_STR);
				$r->bindParam(5, $data['descrip'], PDO::PARAM_STR);
				$r->bindParam(6, $data['catego'], PDO::PARAM_INT);
				return $r->execute();
			}catch(Exception $e){
				die("Error en Productos->registra()" . $e->getMessage());
			}
		}

		public function busca($dataid){
			try{
				$r=parent::conexion()->prepare("SELECT * FROM productos WHERE idPro=?");
				$r->bindParam(1, $dataid, PDO::PARAM_INT);
				$r->execute();
				return $r->fetch();
			}catch(Exception $e){
				die("Error en Productos->busca()" . $e->getMessage());
			}
		}

		public function actual_registro($data,$url){
			try{
				$r=parent::conexion()->prepare("UPDATE productos SET nomPro=?, cantidad=?, precioPro=?, link_img=?, descripcion=?, id_cate=? WHERE idPro=?");
				$r->bindParam(1, $data['nombre'], PDO::PARAM_STR);
				$r->bindParam(2, $data['candis'], PDO::PARAM_INT);
				$r->bindParam(3, $data['precio'], PDO::PARAM_INT);
				$r->bindParam(4, $url, PDO::PARAM_STR);
				$r->bindParam(5, $data['descrip'], PDO::PARAM_STR);
				$r->bindParam(6, $data['catego'], PDO::PARAM_INT);
				$r->bindParam(7, $data['id'], PDO::PARAM_INT);
				return $r->execute();
			}catch(Exception $e){
				die("Error en Productos->actual_registro()" . $e->getMessage());
			}
		}

		public function elimina_registro($dataid){
			try{
				$r=parent::conexion()->prepare("DELETE FROM productos WHERE idPro=?");
				$r->bindParam(1, $dataid, PDO::PARAM_INT);
				return $r->execute();
			}catch(Exception $e){
				die("Error en Productos->elimina_registro()" . $e->getMessage());
			}
		}
	}
?>
