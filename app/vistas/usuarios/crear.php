	<div class="container mt-5 pt-4" style="min-height: 90vh;">
		<div class="row">
			<div class="col-sm-3 px-0">
				<div class="list-group" id="list-tab" role="tablist">
					<a href="#forme" class="list-group-item list-group-item-action pl-5 active" id="usere" data-toggle="list" role="tab">Registrar empleado</a>
					<a href="#formc" class="list-group-item list-group-item-action pl-5" id="userc" data-toggle="list" role="tab">Registrar cliente</a>
				</div>
			</div>
			<div class="col-sm-9 px-0">
				<div class="tab-content" id="nav-tab">
					<div class="tab-pane fade show active" id="forme" role="tabpanel">
						<form class="form px-4" action="?controller=usuarios&method=almace&tipu=1" method="post">
							<div class="row">
								<div class="col-md-6 mb-4">
									<input class="form-control" type="text" name="nombre" placeholder="Nombre">
								</div>
								<div class="col-md-6 mb-4">
									<input class="form-control" type="text" name="apelli" placeholder="Apellido">
								</div>
								<div class="col-md-6 mb-4">
									<input class="form-control" type="number" name="telef" placeholder="Teléfono">
								</div>
								<div class="col-md-6 mb-4">
									<input class="form-control" type="number" name="edad" placeholder="Edad del empleado">
								</div>
								<div class="col-md-6 mb-4">
									<input class="form-control" type="text" name="contrase" placeholder="Contraseña">
								</div>
								<div class="col-md-6 mb-4">
									<select class="form-control" name="rolem">
										<option value="1">Administrador</option>
										<option value="2">Vendedor</option>
									</select>
								</div>
								<div class="col-md-12 d-flex justify-content-end">
									<input class="btn btn-success" type="submit" name="envia" value="Registrar">
								</div>
							</div>
						</form>
					</div>
					<div class="tab-pane fade" id="formc" role="tabpanel">
						<form class="form px-4" action="?controller=usuarios&method=almace&tipu=2" method="post">
							<div class="row">
								<div class="col-md-6 mb-4">
									<input class="form-control" type="text" name="nombre" placeholder="Nombre">
								</div>
								<div class="col-md-6 mb-4">
									<input class="form-control" type="text" name="apelli" placeholder="Apellido">
								</div>
								<div class="col-md-6 mb-4">
									<input class="form-control" type="number" name="telef" placeholder="Teléfono">
								</div>
								<div class="col-md-6 mb-4">
									<input class="form-control" type="email" name="correo" placeholder="Correo electrónico">
								</div>
								<div class="col-md-6 mb-4">
									<input class="form-control" type="password" name="contrase" placeholder="Contraseña">
								</div>
								<div class="col-md-6 mb-4">
									<input class="form-control" type="password" name="contrasedos" placeholder="Confirmar contraseña">
								</div>
								<div class="col-md-12 d-flex justify-content-end">
									<input class="btn btn-success" type="submit" name="envia" value="Registrar">
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>


		<script src="assets/js/jquery-3.3.1.slim.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
</body>
</html>
