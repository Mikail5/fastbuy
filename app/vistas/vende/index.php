	<div class="conpad">
		<div class="concab">
			<div class="mensaje">
				<img src="assets/icons/bienven.png">
				<h2>Hola! <?php echo $_SESSION['user']->nomEmp ?></h2>
			</div>
			<p class="txtcab">En este este espacio tendrás las opciones a tu disposición que puedes realizar como
				vendedor del sistema. Echa un vistazo por la página para saber cuales son.</p>
		</div>
		<div class="plus">
			<h2>Registra tu venta</h2>
			<p class="texto">Regsitra los productos en una factura y administra las mismas en este apartado, podrás
				ver o eliminar la información que ya no necesites.</p>
			<a class="bref1" href="?controller=vende&method=verVen">Ir a Ventas</a>
		</div>
		<div class="con2">
			<h2>Buscar datos de producto</h2>
			<p class="texto">Busca la información de un prodcucto ya registrado, además vas a poder checkar la cantidad
				de productos disponibles en caso de que falle el sistema.</p>
			<a class="bref2" href="?controller=vende&method=verPro&cate=1">Consultar producto</a>
		</div>
	</div>
