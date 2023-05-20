<?php
  class vendeController extends Seguridad
  {
    public function __construct(){
      $rolperm=2;
      parent::verificaRol($rolperm);
    }

    public function index()
    {
      require_once "vistas/vende/header.php";
      require_once "vistas/vende/index.php";
      require_once "vistas/layouts/footer.php";
    }

    public function verPro(){
    	require_once "vistas/vende/header.php";
    	call_user_func(['productosController','index']);
    }

    public function crearPro(){
    	require_once "vistas/vende/header.php";
    	call_user_func(['productosController','crear']);
    }

    public function editarPro(){
    	require_once "vistas/vende/header.php";
    	call_user_func(['productosController','editar']);
    }

    public function verVen(){
    	require_once "vistas/vende/header.php";
    	call_user_func(['ventasController','index']);
    }

    public function crearVen(){
    	require_once "vistas/vende/header.php";
    	call_user_func(['ventasController','crear']);
    }
  }
?>
