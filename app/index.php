<?php
  session_start();

  $controller = isset($_GET['controller']) ? $_GET['controller'] : 'index';
  $method = isset($_GET['method']) ? $_GET['method'] : 'index';

  require_once "modelos/Basedatos.php";
  require_once 'modelos/Productos.php';
  require_once 'modelos/Usuarios.php';
  require_once 'modelos/Seguridad.php';

  require_once "controladores/indexController.php";
  require_once 'controladores/productosController.php';
  require_once 'controladores/usuariosController.php';
  require_once 'controladores/ventasController.php';
  require_once 'controladores/seguridadController.php';
  require_once 'controladores/adminController.php';
  require_once 'controladores/vendeController.php';

  $controller = "{$controller}Controller";
  $controller = new $controller();

  call_user_func([$controller,$method]);
?>
