<?php
	class Usuarios extends Basedatos
	{
		public function mostrar($tabla){
			try{
				$r=parent::conexion()->prepare("SELECT * FROM $tabla");
				$r->execute();
				return $r->fetchAll();
			}catch(Exception $e){
				die("Error en Usuarios->mostrar()" . $e->getMessage());
			}
		}

		public function consultaEmp($data){
			try{
				$r=parent::conexion()->prepare("SELECT * FROM empleados WHERE nomEmp LIKE :term OR apelEmp LIKE :term OR telEmp LIKE :term");
				$r->bindValue(':term', '%'.$data.'%');
				$r->execute();
				return $r->fetchAll();
			}catch(Exception $e){
				die("Error en Usuarios->consultaEmp()" . $e->getMessage());
			}
		}

		public function consultaCli($data){
			try{
				$r=parent::conexion()->prepare("SELECT * FROM clientes WHERE nomCli LIKE :term OR apelCli LIKE :term OR telCli LIKE :term");
				$r->bindValue(':term', '%'.$data.'%');
				$r->execute();
				return $r->fetchAll();
			}catch(Exception $e){
				die("Error en Usuarios->consultaCli()" . $e->getMessage());
			}
		}

		public function registraEmp($data){
			try{
				$r=parent::conexion()->prepare("INSERT INTO empleados (nomEmp, apelEmp, telEmp, Edad, passwEmp, idRol) VALUES (?,?,?,?,?,?)");
				$r->bindParam(1, $data['nombre'], PDO::PARAM_STR);
				$r->bindParam(2, $data['apelli'], PDO::PARAM_STR);
				$r->bindParam(3, $data['telef'], PDO::PARAM_STR);
				$r->bindParam(4, $data['edad'], PDO::PARAM_STR);
				$r->bindParam(5, $data['contrase'], PDO::PARAM_STR);
				$r->bindParam(6, $data['rolem'], PDO::PARAM_INT);
				return $r->execute();
			}catch(Exception $e){
				die("Error en Usuarios->registraEmp()" . $e->getMessage());
			}
		}

		public function registraCli($data){
			try{
				$r=parent::conexion()->prepare("INSERT INTO clientes (nomCli, apelCli, telCli, correo, passwCli) VALUES (?,?,?,?,?)");
				$r->bindParam(1, $data['nombre'], PDO::PARAM_STR);
				$r->bindParam(2, $data['apelli'], PDO::PARAM_STR);
				$r->bindParam(3, $data['telef'], PDO::PARAM_STR);
				$r->bindParam(4, $data['correo'], PDO::PARAM_STR);
				$r->bindParam(5, $data['contrase'], PDO::PARAM_STR);
				return $r->execute();
			}catch(Exception $e){
				die("Error en Usuarios->registraCli()" . $e->getMessage());
			}
		}

		public function buscaEmp($dataid){
			try{
				$r=parent::conexion()->prepare("SELECT * FROM empleados WHERE idEmp=?");
				$r->bindParam(1, $dataid, PDO::PARAM_INT);
				$r->execute();
				return $r->fetch();
			}catch(Exception $e){
				die("Error en Usuarios->buscaEmp()" . $e->getMessage());
			}
		}

		public function buscaCli($dataid){
			try{
				$r=parent::conexion()->prepare("SELECT * FROM clientes WHERE idCli=?");
				$r->bindParam(1, $dataid, PDO::PARAM_INT);
				$r->execute();
				return $r->fetch();
			}catch(Exception $e){
				die("Error en Usuarios->buscaCli()" . $e->getMessage());
			}
		}

		public function actual_regEmp($data){
			try{
				$r=parent::conexion()->prepare("UPDATE empleados SET nomEmp=?, apelEmp=?, telEmp=?, Edad=?, passwEmp=?, idRol=? WHERE idEmp=?");
				$r->bindParam(1, $data['nombre'], PDO::PARAM_STR);
				$r->bindParam(2, $data['apelli'], PDO::PARAM_STR);
				$r->bindParam(3, $data['telef'], PDO::PARAM_STR);
				$r->bindParam(4, $data['edad'], PDO::PARAM_STR);
				$r->bindParam(5, $data['contrase'], PDO::PARAM_STR);
				$r->bindParam(6, $data['rolem'], PDO::PARAM_INT);
				$r->bindParam(7, $data['idusu'], PDO::PARAM_INT);
				return $r->execute();
			}catch(Exception $e){
				die("Error en Usuarios->actual_regEmp()" . $e->getMessage());
			}
		}

		public function actual_regCli($data){
			try{
				$r=parent::conexion()->prepare("UPDATE clientes SET nomCli=?, apelCli=?, telCli=?, correo=?, passwCli=? WHERE idCli=?");
				$r->bindParam(1, $data['nombre'], PDO::PARAM_STR);
				$r->bindParam(2, $data['apelli'], PDO::PARAM_STR);
				$r->bindParam(3, $data['telef'], PDO::PARAM_STR);
				$r->bindParam(4, $data['correo'], PDO::PARAM_STR);
				$r->bindParam(5, $data['contrase'], PDO::PARAM_STR);
				$r->bindParam(6, $data['idusu'], PDO::PARAM_INT);
				return $r->execute();
			}catch(Exception $e){
				die("Error en Usuarios->actual_regCli()" . $e->getMessage());
			}
		}

		public function eliminaEmp($dataid){
			try{
				$r=parent::conexion()->prepare("DELETE FROM empleados WHERE idEmp=?");
				$r->bindParam(1, $dataid, PDO::PARAM_INT);
				return $r->execute();
			}catch(Exception $e){
				die("Error en Usuarios->eliminaEmp()" . $e->getMessage());
			}
		}

		public function eliminaCli($dataid){
			try{
				$r=parent::conexion()->prepare("DELETE FROM clientes WHERE idCli=?");
				$r->bindParam(1, $dataid, PDO::PARAM_INT);
				return $r->execute();
			}catch(Exception $e){
				die("Error en Usuarios->eliminaEmp()" . $e->getMessage());
			}
		}
	}
?>
