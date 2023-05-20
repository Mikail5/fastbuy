<?php 
	$service = (isset($_GET['service'])) ? $_GET['service'] : 'index';
	$method = (isset($_GET['method'])) ? $_GET['method'] : 'index';

	require_once '../modelos/Basedatos.php';

	require_once '../modelos/Productos.php';

	require_once 'servicios/productosService.php';

	$service = "{$service}Service";
	$service = new $service();

	call_user_func([$service, $method]);
?>