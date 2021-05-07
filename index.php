<?php
require_once "src/router/router.php";
$currentSection = $_GET[ 's' ] ?? "home";

if (!isset($section[ $currentSection ])) {
	$currentSection = 404;
}
?>
<!doctype html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<meta name="description" content="Venta y servicio técnico de cortinas de enrollar en madera y pvc">
		<link rel="shortcut icon" href="src/assets/imgs/cortinasFav.png" type="image/x-icon">
		<!-- Google Tag Manager -->
		<script>(function (w, d, s, l, i) {
				w[l] = w[l] || [];
				w[l].push({
					'gtm.start':
						new Date().getTime(), event: 'gtm.js'
				});
				var f = d.getElementsByTagName(s)[0],
					j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
				j.async = true;
				j.src =
					'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
				f.parentNode.insertBefore(j, f);
			})(window, document, 'script', 'dataLayer', 'GTM-M4T9D5R');</script>
		<!-- End Google Tag Manager -->
		<!-- Google Tag Manager (noscript) -->
		<noscript>
			<iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M4T9D5R" height="0" width="0" style="display:none;visibility:hidden"></iframe>
		</noscript>
		<!-- End Google Tag Manager (noscript) -->
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&display=swap" rel="stylesheet">
		<!--		<link rel="stylesheet" href="src/css/estilos.minify.css">-->
		<link rel="stylesheet" href="src/css/index.css">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title><?php echo $section[ $currentSection ][ "title" ]; ?></title>
	</head>
	<body>
		<header>
			<div class="wrapper">
				<div class="wrapper-content__header">
					<div class="header">
						<h1 class="header__title">Cortinas congreso
							<a href="index.php?s=home">
								<img src="src/assets/icons/icon__logo.svg" alt="logo cortinas congreso" class="header__logo">
							</a>
						</h1>
						<nav class="header__navbar">
							<ul class="header__menu">
								<li class="header__item">
									<a href="index.php?s=home" class="header__link header__link--hover">Home</a>
								</li>
								<li class="header__item">
									<a href="index.php?s=quienes-somos" class="header__link header__link--hover">Quienes somos</a>
								</li>
								<li class="header__item">
									<a href="#" class="header__link header__link--hover">Productos
										<img src="src/assets/icons/icon__arrow.svg" alt="arrow" class="header__arrow-icon">
									</a>
									<ul class="header__submenu">
										<li class="header__submenu-item">
											<a href="index.php?s=cortinas-de-enrollar" class="header__submenu-link">Cortinas de Enrollar</a>
										</li>
										<li class="header__submenu-item">
											<a href="index.php?s=herrajes-y-accesorios" class="header__submenu-link">Herrajes y Accesorios</a>
										</li>
										<li class="header__submenu-item">
											<a href="index.php?s=interiores" class="header__submenu-link">Interiores</a>
										</li>
									</ul>
								</li>
								<li class="header__item">
									<a href="index.php?s=contacto" class="header__link header__link--hover">Contacto</a>
								</li>
							</ul>
						</nav>
						<button class="header__btn">
							<img src="src/assets/icons/icon__menu-open.svg" alt="icon navbar" class="header__btn-icon">
						</button>
					</div>
				</div>
			</div>
		</header>
		<main>
			<?php if ($currentSection === "home"): ?>
				<div class="main__hero">
					<h2 class="hero__title">Persianas de Enrollar
						<br>
						en Madera y PVC
					</h2>
				</div>
			<?php endif; ?>
			<?php if ($currentSection === "quienes-somos"): ?>
				<div class="nosotros__banner"></div>
			<?php endif; ?>
			<?php if ($currentSection === "herrajes-y-accesorios"): ?>
				<div class="accesorios__body">
					<div class="accesorios__body-container">
						<div class="accesorios__title">Herrajes y Accesorios</div>
						<div class="accesorios__text">Todo lo que necesitas para tus Cortinas de Enrollar. Todos nuestros productos son de la máxima calidad. fabricados por la industria
							nacional.
						</div>
					</div>
				</div>
			<?php endif; ?>
			<div class="wrapper">
				<a id="Tel" href="https://wa.me/541151333049" class="flex items-center justify-center" target="blank">
					<img src="src/assets/icons/whatsapp.svg" alt="whatsapp" class="icon-whatsapp">
				</a>
				<div class="wrapper__content-main">
					<?php
					require_once "src/sections/{$currentSection}.php";
					?>
				</div>
			</div>
		</main>
		<footer>
			<div class="wrapper">
				<div class="wrapper-content__footer">
					<div class="footer">
						<div class="footer__logo">
							<img src="src/assets/icons/icon__logo.svg" alt="footer logo">
						</div>
						<address class="footer__sucursal">
							<p class="footer__sucursal-title">Sucursal Montserrat</p>
							<div class="footer__sucursal-item">
								<img src="src/assets/icons/icon__locate.svg" alt="icon locate" class="footer__sucursal-icon">
								Combate delos pozos 618
							</div>
							<div class="footer__sucursal-item">
								<img src="src/assets/icons/icon__phone.svg" alt="icon phone" class="footer__sucursal-icon">
								4382-0581/8110
							</div>
						</address>
						<address class="footer__sucursal">
							<p class="footer__sucursal-title">Sucursal Belgrano</p>
							<div class="footer__sucursal-item">
								<img src="src/assets/icons/icon__locate.svg" alt="icon locate" class="footer__sucursal-icon">
								Iberá 2509
							</div>
							<div class="footer__sucursal-item">
								<img src="src/assets/icons/icon__phone.svg" alt="icon phone" class="footer__sucursal-icon">
								4541-0974
							</div>
						</address>
						<div class="footer__social">
							<p>Seguinos en
								<br>
								Redes Sociales
							</p>
							<ul class="footer__menu">
								<li class="footer__menu-item">
									<a href="https://www.instagram.com/cortinascongreso/?hl=es" target="_blank" class="footer__menu-link">
										<img src="src/assets/icons/icon__instagram.svg" alt="logo instagram" class="footer__menu-icon">
									</a>
								</li>
								<li class="footer__menu-item">
									<a href="https://www.facebook.com/cortinascongreso/" target="_blank" class="footer__menu-link">
										<img src="src/assets/icons/icon__facebook.svg" alt="logo facebook" class="footer__menu-icon">
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<script src="src/js/index.js"></script>
	</body>
</html>