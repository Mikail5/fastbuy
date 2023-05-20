<?php
  class adminController extends Seguridad
  {
    public function __construct(){
      $rolperm=1;
      parent::verificaRol($rolperm);
    }

    public function index(){
      require_once "vistas/admin/header.php";
      require_once "vistas/admin/index.php";
      require_once "vistas/layouts/footer.php";
    }

    public function verPro(){
    	require_once "vistas/admin/header.php";
    	call_user_func(['productosController','index']);
    }

    public function crearPro(){
    	require_once "vistas/admin/header.php";
    	call_user_func(['productosController','crear']);
    }

    public function editarPro(){
    	require_once "vistas/admin/header.php";
    	call_user_func(['productosController','editar']);
    }

    public function verUsu(){
    	require_once "vistas/admin/header.php";
    	call_user_func(['usuariosController','index']);
    }

    public function crearUsu(){
    	require_once "vistas/admin/header.php";
    	call_user_func(['usuariosController','crear']);
    }

    public function editarUsu(){
    	require_once "vistas/admin/header.php";
    	call_user_func(['usuariosController','editar']);
    }

    public function verVen(){
    	require_once "vistas/admin/header.php";
    	call_user_func(['ventasController','index']);
    }

    public function crearVen(){
    	require_once "vistas/admin/header.php";
    	call_user_func(['ventasController','crear']);
    }
  }
?>
