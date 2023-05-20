<?php
	class Basedatos{

		public function conexion(){
			try{
				return new PDO('mysql:host=localhost;dbname=fastbuy;charset=utf8;','root','',
				[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
				 PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ]);
			}
			catch(Exception $e){
				die($e->getMessage());
			}
		}
	}
?>