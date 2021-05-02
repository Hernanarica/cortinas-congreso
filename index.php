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
							<img src="src/assets/icons/icon__logo.svg" alt="logo cortinas congreso" class="header__logo">
						</h1>
						<nav class="header__navbar">
							<ul class="header__menu">
								<li class="header__item">
									<a href="index.php?s=home" class="header__link header__link--hover">home</a>
								</li>
								<li class="header__item">
									<a href="index.php?s=nosotros" class="header__link header__link--hover">nosotros</a>
								</li>
								<li class="header__item">
									<a href="index.php?s=persianas" class="header__link header__link--hover">persianas</a>
								</li>
								<li class="header__item">
									<a href="index.php?s=puertas-plegadizas" class="header__link header__link--hover">puertas-plegadizas</a>
								</li>
								<li class="header__item">
									<a href="index.php?s=accesorios" class="header__link header__link--hover">accesorios</a>
								</li>
								<li class="header__item">
									<a href="index.php?s=contacto" class="header__link header__link--hover">contacto</a>
								</li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</header>
		<main>
			<?php
			require_once "src/sections/{$currentSection}.php";
			?>
		</main>
	</body>
</html>