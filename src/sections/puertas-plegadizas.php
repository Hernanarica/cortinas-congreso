<?php
require 'src/api/puertas.php';
?>
<section id="persianas" class="plegadizas">
	<h2 class="sr-only">Información de puertas</h2>
	<?php
	foreach ($puertas as $i => $puerta) :
		?>
		<div class="plegadizas__container">
			<figure class="plegadizas__image">
				<img src="src/assets/imgs/<?= $puerta[ 'imagen' ]; ?>" loading="lazy" alt="<?= $puerta[ 'imagen-alt' ]; ?>">
			</figure>
			<div class="plegadizas__info">
				<h3 class="plegadizas__title"><?= $puerta[ 'titulo' ]; ?></h3>
				<p class="plegadizas__text"><?= $puerta[ 'texto' ]; ?></p>
			</div>
		</div>
	<?php
	endforeach;
	?>
</section>