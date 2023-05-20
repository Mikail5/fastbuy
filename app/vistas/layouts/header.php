<!DOCTYPE html>
<html>
<head>
	<title>FastBuy</title>
	<meta charset="utf-8">
  <link rel="stylesheet" href="assets/css/estiloDP.css">
	<link rel="stylesheet" type="text/css" href="assets/css/estiloinx.css">
	<link rel="stylesheet" href="assets/css/logo.css">
</head>
<body>
  <header>
		<a class="logofast" href="?controller=index">FastBuy</a>
		<form action="?controller=index&method=consultarProducto" method="POST">
			<input class="busca" type="search" name="nomart" placeholder="Nombre del producto">
			<input class="botbus" type="submit" name="buscanom" value="Buscar">
			<label for="exeis">Ingresar</label>
			<label for="exereg">Registrate</label>
		</form>
	</header>
	<input type="checkbox" id="exeis">
	<input type="checkbox" id="exereg">
	<div class="sombrais">
          <form id="cuad1" action="?controller=seguridad&method=entrar" method="POST">
            <div class="cabis">
              <h2 class="titul">Inicio de sesión</h2>
              <label for="exeis" id="back">X</label>
            </div>
            <p class="min">Nombre</p>
            <input class="campos" type="text" name="nombre" required>
            <p class="min">Contraseña</p>
            <input class="campos" type="password" name="contrasen" required>
            <input class="boting" type="submit" name="envia" value="Iniciar sesión">
          </form>
    </div>
    <div class="sombrareg">
    	<form id="cuad2" action="?controller=usuarios&method=almace&tipu=2&req=1" method="POST" name="regdat">
            <div class="cabis">
              <h2 class="titulr">Registro</h2>
              <label for="exereg" id="backr">X</label>
            </div>
            <p class="min">Nombre</p>
            <input class="campos" type="text" name="nombre" required>
            <p class="min">Apellido</p>
            <input class="campos" type="text" name="apelli" required>
            <p class="min">Teléfono</p>
            <input class="campos" type="text" name="telef" required>
            <p class="min">Correo</p>
            <input class="campos" type="text" name="correo" required>
            <p class="min">Contraseña</p>
            <input class="campos" type="text" name="contrase" required>
            <input class="botreg" type="submit" name="regista" value="Registrarse">
        </form>
    </div>
