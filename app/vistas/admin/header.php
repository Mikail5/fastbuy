<!DOCTYPE html>
<html>
<head>
	<title>
		<?php
		$claseLinks = [
			"inicio" => "", 
			"productos" => "", 
			"ventas" => "", 
			"usuarios" => "" 
		];

		if ($_GET['controller'] == 'admin' && !isset($_GET['method'])) {
			echo "Administrador";
		}
		if ($_GET['controller'] == 'index') {
			echo "Administrador";
		}
		if(isset($_GET['controller']) && isset($_GET['method'])){
			if($_GET['method'] == 'verPro' || $_GET['method'] == 'crearPro' || $_GET['method'] == 'editarPro') {
				$claseLinks['productos'] = "active";
				echo "Productos";
			}
			if($_GET['method'] == 'verUsu' || $_GET['method'] == 'crearUsu' || $_GET['method'] == 'editarUsu'){
				$claseLinks['usuarios'] = "active";
				echo "Usuarios";
			}
			if($_GET['method'] == 'verVen' || $_GET['method'] == 'crearVen' || $_GET['method'] == 'detalleVen'){
				$claseLinks['ventas'] = "active";
				echo "Ventas";
			}
		}
		elseif(isset($_GET['controller'])) {
			$claseLinks['inicio'] = "active";
		}
		?>
	</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<?php
	if (isset($_GET['method']) && $_GET['controller'] != "index") { ?>
		<link rel="stylesheet" href="assets/css/bootstrap.min.css">
		<link rel="stylesheet" href="assets/css/bootstrap-grid.min.css">
		<link rel="stylesheet" href="assets/css/logo.css">
	<?php }
	elseif (isset($_GET['controller']) && $_GET['controller'] == "index") { ?>
		<link rel="stylesheet" href="assets/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="assets/css/estiloinx.css">
		<link rel="stylesheet" href="assets/css/estiloDP.css">
		<link rel="stylesheet" href="assets/css/logo.css">
	<?php }
	else { ?>
		<link rel="stylesheet" href="assets/css/logo.css">
		<link rel="stylesheet" href="assets/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="assets/css/estiloInicios.css">
	<?php } ?>
</head>
<body>
	<nav class="navbar navbar-expand-md navbar-dark fixed-top" style="background: #3498DB; font-family: sans-serif;">
		<div class="container">
			<a class="navbar-brand p-0" href="?controller=index"><h1 class="logobtp">FastBuy</h1></a>
			<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#uno">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="uno">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a class="nav-link <?= $claseLinks['inicio'] ?>" href="?controller=admin">Inicio</a>
					</li>
					<li class="nav-item">
						<a class="nav-link <?= $claseLinks['productos'] ?>" href="?controller=admin&method=verPro&cate=1">Productos</a>
					</li>
					<li class="nav-item">
						<a class="nav-link <?= $claseLinks['ventas'] ?>" href="?controller=admin&method=verVen">Ventas</a>
					</li>
					<li class="nav-item">
						<a class="nav-link <?= $claseLinks['usuarios'] ?>" href="?controller=admin&method=verUsu">Usuarios</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="?controller=seguridad&method=salir">Salir</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
