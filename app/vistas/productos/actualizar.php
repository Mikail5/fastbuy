	<div class="container mt-5 py-4" style="min-height: 90vh;">
		<form class="form-inline px-4" action="?controller=productos&method=actuali" method="post" enctype="multipart/form-data">
			<div class="row">
				<input type="hidden" name="id" value="<?= $pro->idPro ?>">
				<img class="col-md-6" src="<?= $pro->link_img ?>" alt="Imagen guardada">
				<div class="col-md-6">
					<div class="row mb-4">
						<div class="col-md-6">
							<h5>Nombre</h5>
							<input class="form-control w-100" type="text" name="nombre" placeholder="Nombre" value="<?= $pro->nomPro ?>">
						</div>
						<div class="col-md-6">
							<h5>Cantidad</h5>
							<input class="form-control w-100" type="number" name="candis" placeholder="Cantidad" value="<?= $pro->cantidad ?>">
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<h5>Selecciona categoría</h5>
							<select class="form-control w-100" name="catego">
								<?php if ($pro->id_cate == 1) {?>
									<option value="1" selected>Televisores</option>
								<?php
								}
								 else {?>
									<option value="1">Televisores</option>
								<?php } ?>
								<?php if ($pro->id_cate == 2) {?>
									<option value="2" selected>Audio</option>
								<?php
								}
								 else {?>
									<option value="2">Audio</option>
								<?php } ?>
								<?php if ($pro->id_cate == 3) {?>
									<option value="3" selected>Informática</option>
								<?php
								}
								 else {?>
									<option value="3">Informática</option>
								<?php } ?>
								<?php if ($pro->id_cate == 4) {?>
									<option value="4" selected>Electrodomésticos</option>
								<?php
								}
								 else {?>
									<option value="4">Electrodomésticos</option>
								<?php } ?>
								<?php if ($pro->id_cate == 5) {?>
									<option value="5">Juguetes</option>
								<?php
								}
								 else {?>
									<option value="5">Juguetes</option>
								<?php } ?>
								<?php if ($pro->id_cate == 6) {?>
									<option value="6" selected>Hogar y muebles</option>
								<?php
								}
								 else {?>
									<option value="6">Hogar y muebles</option>
								<?php } ?>
							</select>
						</div>
						<div class="col-md-6">
							<h5>Precio</h5>
							<input class="form-control w-100" type="number" name="precio" placeholder="Precio" value="<?= $pro->precioPro ?>">
						</div>
					</div>
				</div>
				<div class="col-md-12 mt-4">
					<div class="row">
						<div class="col-md-6">
							<h5>Imagen de producto</h5>
							<input class="form-control w-100" type="file" name="imag">
						</div>
						<div class="col-md-6">
							<h5>Descripción</h5>
							<textarea class="form-control w-100" name="descrip"><?= $pro->descripcion ?></textarea>
						</div>
					</div>
				</div>
				<div class="col-md-12 mt-4 d-flex justify-content-end">
					<input class="btn btn-success" type="submit" name="envia" value="Guardar cambios">
				</div>
			</div>
			
		</form>
	</div>


		<script src="assets/js/jquery-3.3.1.slim.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
</body>
</html>
