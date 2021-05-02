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
			<h1></h1>
			<nav>
				<ul>
					<li>
						<a href="index.php?s=home">home</a>
					</li>
					<li>
						<a href="index.php?s=nosotros">nosotros</a>
					</li>
					<li>
						<a href="index.php?s=persianas">persianas</a>
					</li>
					<li>
						<a href="index.php?s=puertas-plegadizas">puertas-plegadizas</a>
					</li>
					<li>
						<a href="index.php?s=accesorios">accesorios</a>
					</li>
					<li>
						<a href="index.php?s=contacto">contacto</a>
					</li>
				</ul>
			</nav>
		</header>
		<main>
			<?php
			require_once "src/sections/{$currentSection}.php";
			?>
		</main>
	</body>
</html>