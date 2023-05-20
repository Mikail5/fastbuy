	<div class="conpad">
		<div class="concab">
			<div class="mensaje">
				<img src="assets/icons/bienven.png">
				<h2>Hola! <?php echo $_SESSION['user']->nomEmp ?></h2>
			</div>
			<p class="txtcab">En este este espacio tendrás las opciones a tu disposición que puedes realizar como
				administrador del sistema. Echa un vistazo por la página para saber cuales son.</p>
		</div>
		<div class="con1">
			<h2>Registra tu venta</h2>
			<p class="texto">Regsitra los productos en una factura y administra la mismas en este apartado, podrás
				ver o eliminar la información que ya no necesites.</p>
			<a class="bref1" href="?controller=admin&method=verVen">Ir a Ventas</a>
		</div>
		<div class="con2">
			<h2>Cambiar datos de producto</h2>
			<p class="texto">Cambia o actualiza los datos de un regsitrado producto en el sistema por medio de este
				apartado y al final haz clic en guardar cambios.</p>
			<a class="bref2" href="?controller=admin&method=verPro&cate=1">Actualizar producto</a>
		</div>
		<div class="con3">
			<h2>Regsitrar usuarios</h2>
			<p class="texto">Regsitra los usuarios nuevos que hayan llegado a tu empresa, solo haz clic aqui y te enviará
				a un formulario que se llenará con los datos del nuevo usuario.</p>
			<a class="bref1" href="?controller=admin&method=crearUsu">Nuevo usuario</a>
		</div>
		<div class="con4">
			<h2>Editar datos de usuario</h2>
			<p class="texto">Cambia los datos de un usuario, ya sea que lo quieras cambiar de rol o simplemente cambiar
				sus datos personales.</p>
			<a class="bref2" href="?controller=admin&method=verUsu">Cambiar datos</a>
		</div>
	</div>
