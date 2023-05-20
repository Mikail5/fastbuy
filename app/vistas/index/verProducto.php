    <div class="conpad">
    	<h2><?= $datosProducto['nomPro'] ?></h2>
    	<div class="condet">
    		<img class="dimmax" src="<?= $datosProducto['link_img'] ?>" alt="imagen producto">
    		<article>
    			<p class="precioUnidad">$<?= $datosProducto['precioPro'] ?></p>
    			<button class="botcom" type="button" data-id="<?= $datosProducto['idPro'] ?>">Añadir al carrito</button>
    			<p class="inform">Compra online, recibe y paga en tienda.</p>
    			<p class="inform">Registrate e inicia sesión para poder comprar en linea.</p>
    		</article>
    	</div>
    	<h3>Descripción</h3>
    	<article class="descript">
    		<?= $datosProducto['descripcion'] ?>
    	</article>
    </div>
