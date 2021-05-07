<?php
require 'src/api/accesorios.php';
?>
<section id="persianas" class="accesorios">
	<h2 class="sr-only">Información de accesorios</h2>
	<?php
	foreach ($accesorios as $i => $accesorio) :
		?>
		<div class="accesorio__container">
			<figure class="accesorio__image">
				<img src="src/assets/imgs/<?= $accesorio[ 'imagen' ]; ?>" loading="lazy" alt="<?= $accesorio[ 'imagen-alt' ]; ?>">
			</figure>
			<div class="accesorio__info">
				<h3 class="accesorio__title"><?= $accesorio[ 'titulo' ]; ?></h3>
				<p class="accesorio__descripcion"><?= $accesorio[ 'texto' ]; ?></p>
			</div>
		</div>
	<?php
	endforeach;
	?>
</section>