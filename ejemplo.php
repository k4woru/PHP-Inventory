<html>
<body>
<?php

//Declaras variables para luego imprimirla en pantalla
$nombre = 'Armando Velazco';
$alo = "Bienvenido $nombre al sistema";
echo $alo;

$frutas = array(
    'a' => 'Plátano',
    'b' => 'Piña',
    'c' => 'Manzana',
    'd' => 'Fresa',
    'e' => 'Naranja'
);
 
foreach($frutas as $letra => $fruta) {
    echo "La fruta '$letra' es '$fruta' <br>";
}

?>
</body>
</html>
