	<div class="mt-5 pt-4" style="min-height: 90vh;">
		<div class="container">
			<div class="row align-items-center py-2">
				<div class="col-lg-auto">
					<h2>Ventas</h2>
				</div>
				<div class="col-lg">
					<div class="d-flex justify-content-end">
						<a href="?controller=ventas&method=crear" class="btn btn-outline-dark m-1 mx-4">Registrar factura</a>
						<form class="form-inline m-1" action="" method="post">
							<input type="search" name="nomus" class="form-control" placeholder="Buscar venta">
							<input type="submit" name="buscai" class="btn btn-success" value="Buscar">
						</form>
					</div>
				</div>
			</div>
		</div>
		<div class="container w-100">
				<div class="tab-content" id="nav-tab">
					<div class="tab-pane fade show active" id="tablee" role="tabpanel">
						<div class="table-responsive">
							<table class="table table-hover">
								<thead class="thead-dark">
									<tr>
										<th scope="col">Id</th>
										<th scope="col">Empleado</th>
										<th scope="col">Cliente</th>
										<th scope="col">Fecha de venta</th>
										<th scope="col">Valor total</th>
										<th scope="col">Estado</th>
										<th scope="col">Eliminar</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td scope="row">1</td>
										<td>Chucho</td>
										<td>Pedro</td>
										<td>27-08-2019</td>
										<td>25000</td>
										<td>Vendida</td>
										<td><a href="#" class="btn btn-info">Ver detalles</a></td>
									</tr>
								</tbody>
							</table>
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
