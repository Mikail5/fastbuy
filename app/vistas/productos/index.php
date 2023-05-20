	<?php 
		$claseLista = [
			"televisores" => "", 
			"audio" => "", 
			"informatica" => "", 
			"electrodomesticos" => "", 
			"juguetes" => "", 
			"hogar" => ""
		];

		if(isset($_GET['cate'])){
			switch ($_GET['cate']) {
				case '1':
					$claseLista['televisores'] = "active";
					break;
				case '2':
					$claseLista['audio'] = "active";
					break;
				case '3':
					$claseLista['informatica'] = "active";
					break;
				case '4':
					$claseLista['electrodomesticos'] = "active";
					break;
				case '5':
					$claseLista['juguetes'] = "active";
					break;
				case '6':
					$claseLista['hogar'] = "active";
					break;
			}
		}
	 ?>
	<div class="mt-5 pt-4" style="min-height: 90vh;">
		<div class="container">
			<div class="row align-items-center py-2">
				<div class="col-lg-auto p-0">
					<h2>Productos</h2>
				</div>
				<div class="col-lg">
					<div class="d-flex justify-content-end">
						<?php if ($_SESSION['user']->idRol == 1) { ?>
							<a href="?controller=admin&method=crearPro" class="btn btn-outline-dark m-1 mx-4">Nuevo producto</a>
						<?php } elseif ($_SESSION['user']->idRol == 2) { ?>
							<a href="?controller=vende&method=crearPro" class="btn btn-outline-dark m-1 mx-4">Nuevo producto</a>
						<?php } ?>
						<?php if ($_SESSION['user']->idRol == 1) { ?>
							<form class="form-inline m-1" action="?controller=admin&method=verPro" method="post">
						<?php } elseif ($_SESSION['user']->idRol == 2) { ?>
							<form class="form-inline m-1" action="?controller=vende&method=verPro" method="post">
						<?php } ?>
							<input type="search" name="nomus" class="form-control" placeholder="Buscar por nombre">
							<input type="submit" name="buscai" class="btn btn-success" value="Buscar">
						</form>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6 col-md-5 col-lg-3 px-0">
					<div class="list-group" id="list-tab" role="tablist">
						<?php if ($_SESSION['user']->idRol == 1) { ?>
							<a href="?controller=admin&method=verPro&cate=1" class="list-group-item list-group-item-action pl-5 <?= $claseLista['televisores'] ?>">Televisores</a>
							<a href="?controller=admin&method=verPro&cate=2" class="list-group-item list-group-item-action pl-5 <?= $claseLista['audio'] ?>">Audio</a>
							<a href="?controller=admin&method=verPro&cate=3" class="list-group-item list-group-item-action pl-5 <?= $claseLista['informatica'] ?>">Informática</a>
							<a href="?controller=admin&method=verPro&cate=4" class="list-group-item list-group-item-action pl-5 <?= $claseLista['electrodomesticos'] ?>">Electrodomésticos</a>
							<a href="?controller=admin&method=verPro&cate=5" class="list-group-item list-group-item-action pl-5 <?= $claseLista['juguetes'] ?>">Juguetes</a>
							<a href="?controller=admin&method=verPro&cate=6" class="list-group-item list-group-item-action pl-5 <?= $claseLista['hogar'] ?>">Hogar y muebles</a>
						<?php } elseif ($_SESSION['user']->idRol == 2) { ?>
							<a href="?controller=vende&method=verPro&cate=1" class="list-group-item list-group-item-action pl-5">Televisores</a>
							<a href="?controller=vende&method=verPro&cate=2" class="list-group-item list-group-item-action pl-5">Audio</a>
							<a href="?controller=vende&method=verPro&cate=3" class="list-group-item list-group-item-action pl-5">Informática</a>
							<a href="?controller=vende&method=verPro&cate=4" class="list-group-item list-group-item-action pl-5">Electrodomésticos</a>
							<a href="?controller=vende&method=verPro&cate=5" class="list-group-item list-group-item-action pl-5">Juguetes</a>
							<a href="?controller=vende&method=verPro&cate=6" class="list-group-item list-group-item-action pl-5">Hogar y muebles</a>
						<?php } ?>
					</div>
				</div>
				<div class="col-sm-6 col-md-7 col-lg-9 px-0">
					<div class="tab-content" id="nav-tab">
						<div class="tab-pane fade show active" id="prot" role="tabpanel">
							<div class="row px-3">
								<?php if (isset($_POST['nomus'])) {
									foreach (parent::consulta($_POST['nomus']) as $produ): ?>
										<div class="col-sm-12 col-lg-6 col-xl-4 p-3">
											<div class="border border-info rounded p-3 text-center">
												<img class="w-75" src="<?= $produ->link_img ?>">
												<table class="w-100 text-left">
													<tr>
														<td class="p-1 text-info">Id</td>
														<td class="p-1"><?= $produ->idPro ?></td>
													</tr>
													<tr>
														<td class="p-1 text-info">Nombre</td>
														<td class="p-1"><?= $produ->nomPro ?></td>
													</tr>
													<tr>
														<td class="p-1 text-info">Cantidad</td>
														<td class="p-1"><?= $produ->cantidad ?></td>
													</tr>
													<tr>
														<td class="p-1 text-info">Precio</td>
														<td class="p-1"><?= $produ->precioPro ?></td>
													</tr>
												</table>
												<?php if ($_SESSION['user']->idRol == 1) { ?>
													<a href="?controller=admin&method=editarPro&idpro=<?= $produ->idPro ?>" class="btn btn-primary btn-block">Editar</a>
													<a href="?controller=productos&method=borrar&idpro=<?= $produ->idPro ?>" class="btn btn-danger btn-block">Eliminar</a>
												<?php } ?>
											</div>
										</div>
								<?php
								endforeach;
								}
								else if(isset($_GET['cate'])){
									foreach (parent::mostrar($_GET['cate']) as $produ): ?>
									<div class="col-sm-12 col-lg-6 col-xl-4 p-3">
										<div class="border border-info rounded p-3  text-center">
											<img class="w-75" src="<?= $produ->link_img ?>">
											<table class="w-100 text-left">
												<tr>
													<td class="p-1 text-info">Id</td>
													<td class="p-1"><?= $produ->idPro ?></td>
												</tr>
												<tr>
													<td class="p-1 text-info">Nombre</td>
													<td class="p-1"><?= $produ->nomPro ?></td>
												</tr>
												<tr>
													<td class="p-1 text-info">Cantidad</td>
													<td class="p-1"><?= $produ->cantidad ?></td>
												</tr>
												<tr>
													<td class="p-1 text-info">Precio</td>
													<td class="p-1"><?= $produ->precioPro ?></td>
												</tr>
											</table>
											<?php if ($_SESSION['user']->idRol == 1) { ?>
												<a href="?controller=admin&method=editarPro&idpro=<?= $produ->idPro ?>" class="btn btn-primary btn-block">Editar</a>
												<a href="?controller=productos&method=borrar&idpro=<?= $produ->idPro ?>" class="btn btn-danger btn-block">Eliminar</a>
											<?php } ?>
										</div>
									</div>
								<?php endforeach; }
								else{
									echo('<h3 class="text-center w-100">No se ha seleccionado una categoria</h3>');
								} ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
