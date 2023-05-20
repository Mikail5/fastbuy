	<div class="container mt-5 pt-4" style="min-height: 90vh;">
		<form class="form-inline px-4" action="?controller=productos&method=almace" method="post" enctype="multipart/form-data">
			<div class="row">
				<div class="col-md-6">
					<input class="form-control my-4 w-100" type="text" name="nombre" placeholder="Nombre">
				</div>
				<div class="col-md-6">
					<input class="form-control my-4 w-100" type="number" name="candis" placeholder="Cantidad disponible">
				</div>
				<div class="col-md-6">
					<h5>Imagen de producto</h5>
					<input class="form-control w-100" type="file" name="imag">
				</div>
				<div class="col-md-6">
					<h5>Selecciona categoría</h5>
					<select class="form-control w-100" name="catego">
						<option value="1">Televisores</option>
						<option value="2">Audio</option>
						<option value="3">Informática</option>
						<option value="4">Electrodomésticos</option>
						<option value="5">Juguetes</option>
						<option value="6">Hogar y muebles</option>
					</select>
				</div>
				<div class="col-md-6">
					<textarea class="form-control my-4 w-100" name="descrip" placeholder="Escribe la descripción aquí"></textarea>
					
				</div>
				<div class="col-md-6">
					<input class="form-control my-4 w-100" type="number" name="precio" placeholder="Precio">
				</div>
				<div class="col d-flex justify-content-end">
					<input class="btn btn-success ml-auto" type="submit" name="envia" value="Registrar">
				</div>
			</div>
		</form>
	</div>


		<script src="assets/js/jquery-3.3.1.slim.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
</body>
</html>
