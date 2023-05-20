	<div class="container mt-5 pt-4" style="min-height: 90vh;">
		<?php if ($_GET['tipu']==1) { ?>
			<form class="form p-2" action="?controller=usuarios&method=actuali&tipu=1" method="post">
				<div class="row">
					<div class="col-md-6 mb-4">
						<input class="form-control" type="text" name="nombre" placeholder="Nombre" value="<?= $pro->nomEmp ?>">
					</div>
					<div class="col-md-6 mb-4">
						<input class="form-control" type="text" name="apelli" placeholder="Apellido" value="<?= $pro->apelEmp ?>">
					</div>
					<div class="col-md-6 mb-4">
						<input class="form-control" type="number" name="telef" placeholder="Teléfono" value="<?= $pro->telEmp ?>">
					</div>
					<div class="col-md-6 mb-4">
						<input class="form-control" type="number" name="edad" placeholder="Edad" value="<?= $pro->Edad ?>">
					</div>
					<div class="col-md-6 mb-4">
						<input class="form-control" type="password" name="contrase" placeholder="Contraseña" value="<?= $pro->passwEmp ?>">
					</div>
					<div class="col-md-6 mb-4">
						<select class="form-control" name="rolem">
							<?php if ($pro->idRol == 1) {?>
								<option value="1" selected>Administrador</option>
							<?php
							}
							 else {?>
								<option value="1">Administrador</option>
							<?php } ?>
							<?php if ($pro->idRol == 2) {?>
								<option value="2" selected>Vendedor</option>
							<?php
							}
							 else {?>
								<option value="2">Vendedor</option>
							<?php } ?>
						</select>
					</div>
					<div class="col-md-12 d-flex justify-content-end">
						<input type="hidden" name="idusu" value="<?= $pro->idEmp ?>">
						<input class="btn btn-outline-info" type="submit" name="envia" value="Guardar cambios">
					</div>
				</div>
			</form>
		<?php }
					elseif ($_GET['tipu']==2) { ?>
						<form class="form p-2" action="?controller=usuarios&method=actuali&tipu=2" method="post">
							<div class="row">
								<div class="col-md-6 mb-4">
									<input class="form-control" type="text" name="nombre" placeholder="Nombre" value="<?= $pro->nomCli ?>">
								</div>
								<div class="col-md-6 mb-4">
									<input class="form-control" type="text" name="apelli" placeholder="Apellido" value="<?= $pro->apelCli ?>">
								</div>
								<div class="col-md-6 mb-4">
									<input class="form-control" type="number" name="telef" placeholder="Teléfono" value="<?= $pro->telCli ?>">
								</div>
								<div class="col-md-6 mb-4">
									<input class="form-control" type="email" name="correo" placeholder="Correo electrónico" value="<?= $pro->correo ?>">
								</div>
								<div class="col-md-6 mb-4">
									<input class="form-control" type="password" name="contrase" placeholder="Contraseña" value="<?= $pro->passwCli ?>">
								</div>
								<div class="col-md-6 mb-4">
									<input class="form-control" type="password" name="contrasedos" placeholder="Confirmar contraseña">
								</div>
								<div class="col-md-12 d-flex justify-content-end">
									<input type="hidden" name="idusu" value="<?= $pro->idCli ?>">
									<input class="btn btn-outline-info" type="submit" name="envia" value="Guardar cambios">
									
								</div>
							</div>
						</form>
					<?php } ?>
	</div>


	<script src="assets/js/jquery-3.3.1.slim.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
</body>
</html>
