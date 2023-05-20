	<div class="mt-5 pt-4" style="min-height: 90vh;">
		<div class="container">
			<div class="row align-items-center py-2">
				<div class="col-lg-auto px-0">
					<h2>Usuarios</h2>
				</div>
				<div class="col-lg px-0">
					<div class="d-flex justify-content-end">
						<a href="?controller=admin&method=crearUsu" class="btn btn-outline-dark m-1 mx-4">Nuevo usuario</a>
						<form class="form-inline m-1" action="?controller=admin&method=verUsu" method="post">
							<?php if (isset($_POST['nomus'])) { ?>
								<input type="search" name="nomus" class="form-control w-auto" placeholder="Buscar usuario" value="<?php echo $_POST['nomus']; ?>">
							<?php }
							else { ?>
								<input type="search" name="nomus" class="form-control w-auto" placeholder="Buscar usuario">
							<?php } ?>
							<input type="submit" name="buscai" class="btn btn-success d-inline" value="Buscar">
						</form>
					</div>
				</div>
			</div>
		
			<div class="row">
				<div class="col-sm-3 px-0">
					<div class="list-group" id="list-tab" role="tablist">
						<a href="#tablee" class="list-group-item list-group-item-action pl-5 active" id="usere" data-toggle="list" role="tab">Empleados</a>
						<a href="#tablec" class="list-group-item list-group-item-action pl-5" id="userc" data-toggle="list" role="tab">Clientes</a>
					</div>
				</div>
				<div class="col-sm-9 px-0">
					<div class="tab-content" id="nav-tab">
						<div class="tab-pane fade show active" id="tablee" role="tabpanel">
							<div class="table-responsive">
								<table class="table table-hover">
									<thead class="thead-dark">
										<tr>
											<th scope="col">Id</th>
											<th scope="col">Nombre</th>
											<th scope="col">Apellido</th>
											<th scope="col">Teléfono</th>
											<th scope="col">Edad</th>
											<th scope="col">Editar</th>
											<th scope="col">Eliminar</th>
										</tr>
									</thead>
									<tbody>
										<?php
										if (isset($_POST['nomus'])) {
											foreach(parent::consultaEmp($_POST['nomus']) as $usua): ?>
											<tr>
												<td scope="row"><?= $usua->idEmp ?></td>
												<td><?= $usua->nomEmp ?></td>
												<td><?= $usua->apelEmp ?></td>
												<td><?= $usua->telEmp ?></td>
												<td><?= $usua->Edad ?></td>
												<td>
													<a href="?controller=admin&method=editarUsu&tipu=1&idu=<?= $usua->idEmp ?>" class="btn btn-primary">Editar</a>
												</td>
												<td>
													<a href="?controller=usuarios&method=borrar&tipu=1&idu=<?= $usua->idEmp ?>" class="btn btn-danger">Eliminar</a>
												</td>
											</tr>
										<?php endforeach;
										}
										else {
											$tipo="empleados";
											foreach(parent::mostrar($tipo) as $usua):?>
											<tr>
												<td scope="row"><?= $usua->idEmp ?></td>
												<td><?= $usua->nomEmp ?></td>
												<td><?= $usua->apelEmp ?></td>
												<td><?= $usua->telEmp ?></td>
												<td><?= $usua->Edad ?></td>
												<td><a href="?controller=admin&method=editarUsu&tipu=1&idu=<?= $usua->idEmp ?>" class="btn btn-primary">Editar</a></td>
												<td><a href="?controller=usuarios&method=borrar&tipu=1&idu=<?= $usua->idEmp ?>" class="btn btn-danger">Eliminar</a></td>
											</tr>
										<?php endforeach; } ?>
									</tbody>
								</table>
							</div>
						</div>
						<div class="tab-pane fade" id="tablec" role="tabpanel">
							<div class="table-responsive">
								<table class="table table-hover">
									<thead class="thead-dark">
										<tr>
											<th scope="col">Id</th>
											<th scope="col">Nombre</th>
											<th scope="col">Apellido</th>
											<th scope="col">Teléfono</th>
											<th scope="col">Correo</th>
											<th scope="col">Editar</th>
											<th scope="col">Eliminar</th>
										</tr>
									</thead>
									<tbody>
										<?php
										if (isset($_POST['nomus'])) {
											foreach(parent::consultaCli($_POST['nomus']) as $usua): ?>
											<tr>
												<td scope="row"><?= $usua->idCli ?></td>
												<td><?= $usua->nomCli ?></td>
												<td><?= $usua->apelCli ?></td>
												<td><?= $usua->telCli ?></td>
												<td><?= $usua->correo ?></td>
												<td><a href="?controller=admin&method=editarUsu&tipu=2&idu=<?= $usua->idCli ?>" class="btn btn-primary">Editar</a></td>
												<td><a href="?controller=usuarios&method=borrar&tipu=2&idu=<?= $usua->idCli ?>" class="btn btn-danger">Eliminar</a></td>
											</tr>
										<?php endforeach;
										}
										else {
											$tipo="clientes";
											foreach(parent::mostrar($tipo) as $usua): ?>
										<tr>
											<td scope="row"><?= $usua->idCli ?></td>
											<td><?= $usua->nomCli ?></td>
											<td><?= $usua->apelCli ?></td>
											<td><?= $usua->telCli ?></td>
											<td><?= $usua->correo ?></td>
											<td><a href="?controller=admin&method=editarUsu&tipu=2&idu=<?= $usua->idCli ?>" class="btn btn-primary">Editar</a></td>
											<td><a href="?controller=usuarios&method=borrar&tipu=2&idu=<?= $usua->idCli ?>" class="btn btn-danger">Eliminar</a></td>
										</tr>
									<?php endforeach; } ?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
