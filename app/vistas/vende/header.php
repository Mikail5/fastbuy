<!DOCTYPE html>
<html>
<head>
	<title>
		<?php
		if ($_GET['controller'] == 'vende' && !isset($_GET['method'])) {
			echo "Administrador";
		}
		else {
			switch ($_GET['method']) {
				case 'verPro':
					echo "Productos";
				break;

				case 'verVen':
					echo "Ventas";
				break;

				default:
				break;
			}
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
		else if (isset($_GET['controller']) && $_GET['controller'] == "index") { ?>
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
	<nav class="navbar navbar-expand-md navbar-light fixed-top" style="background: #3498DB; font-family: sans-serif;">
		<div class="container">
			<a class="navbar-brand p-0" href="?controller=index"><h1 class="logobtp">FastBuy</h1></a>
			<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#uno">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="uno">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item"><a class="nav-link text-light" href="?controller=vende">Inicio</a></li>
					<li class="nav-item"><a class="nav-link text-light" href="?controller=vende&method=verPro&cate=1">Productos</a></li>
					<li class="nav-item"><a class="nav-link text-light" href="?controller=vende&method=verVen">Ventas</a></li>
					<li class="nav-item"><a class="nav-link text-light" href="?controller=seguridad&method=salir">Salir</a></li>
				</ul>
			</div>
		</div>
	</nav>
