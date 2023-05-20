<?php

$estilo = [
	"televisores" => "", 
	"audio" => "", 
	"informatica" => "", 
	"electrodomesticos" => "", 
	"juguetes" => "", 
	"hogar" => ""
];

$estiloSeleccion = 'style="background: #999999; color: #FAFAFA;"';
if(isset($categoria)){
	switch ($categoria) {
		case '1':
			$estilo['televisores'] = $estiloSeleccion;
			$titulo = "Televisores";
			break;
		case '2':
			$estilo['audio'] = $estiloSeleccion;
			$titulo = "Audio";
			break;
		case '3':
			$estilo['informatica'] = $estiloSeleccion;
			$titulo = "Informática";
			break;
		case '4':
			$estilo['electrodomesticos'] = $estiloSeleccion;
			$titulo = "Electrodomésticos";
			break;
		case '5':
			$estilo['juguetes'] = $estiloSeleccion;
			$titulo = "Juguetes";
			break;
		case '6':
			$estilo['hogar'] = $estiloSeleccion;
			$titulo = "Hogar y muebles";
			break;
	}
}

?>

	<div class="slider">
		<input type="radio" name="cambio" id="i1" checked>
		<input type="radio" name="cambio" id="i2">
		<input type="radio" name="cambio" id="i3">
		<div class="conima" id="uno">
			<img src="assets/img/im1.jpg" alt="image1">

			<label for="i3" class="ant"><img src="assets/icons/arrow-left.png"></label>
			<label for="i2" class="sig"><img src="assets/icons/arrow-right.png"></label>
		</div>
		<div class="conima" id="dos">
			<img src="assets/img/im2.jpg" alt="image2">

			<label for="i1" class="ant"><img src="assets/icons/arrow-left.png"></label>
			<label for="i3" class="sig"><img src="assets/icons/arrow-right.png"></label>
		</div>
		<div class="conima" id="tres">
			<img src="assets/img/im3.jpg" alt="image3">

			<label for="i2" class="ant"><img src="assets/icons/arrow-left.png"></label>
			<label for="i1" class="sig"><img src="assets/icons/arrow-right.png"></label>
		</div>
		<nav class="botones">
			<label class="botc" id="bot1" for="i1"></label>
			<label class="botc" id="bot2" for="i2"></label>
			<label class="botc" id="bot3" for="i3"></label>
		</nav>
	</div>
	<div class="contpad">
		<nav>
			<a href="?controller=index&cate=1" <?= $estilo['televisores'] ?>>Televisores</a>
			<a href="?controller=index&cate=2" <?= $estilo['audio'] ?>>Audio</a>
			<a href="?controller=index&cate=3" <?= $estilo['informatica'] ?>>Informática</a>
			<a href="?controller=index&cate=4" <?= $estilo['electrodomesticos'] ?>>Electrodomésticos</a>
			<a href="?controller=index&cate=5" <?= $estilo['juguetes'] ?>>Juguetes</a>
			<a href="?controller=index&cate=6" <?= $estilo['hogar'] ?>>Hogar y muebles</a>
		</nav>
		<div class="conarti">
			<div class="arti">
				<h2><?= $titulo ?></h2>
				<div class="conind">
					<?php
						foreach ($response['productos'] as $producto):
					?>
					<div class="artind">
						<img class="dimimg" src="<?= $producto['link_img'] ?>">
						<p class="nombre"><?= $producto['nomPro']; ?></p>
						<p class="precio"><?= $producto['precioPro']; ?></p>
						<a class="botview" href="?controller=index&method=verProd&idp=<?= $producto['idPro']; ?>">Ver producto</a>
					</div>
				    <?php endforeach; ?>
				</div>
			</div>
		</div>
	</div>
