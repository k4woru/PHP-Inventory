<html>
<title>Pruebas de PHP</title>
<body>
<div Inventario>
<?php
$cables = array (

	'1' => 'coaxial',
	'2' => 'fibra optica',
	'3' => 'cat 5e',
);

foreach ($cables as $tipo) {
	echo " Este tipo  de $tipo es para: <br>";
}


?>
