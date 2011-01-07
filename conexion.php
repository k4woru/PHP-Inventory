<?php
//$conexion = mysql_connect("servidor" , "usuario" , "password" );
$conexion = mysql_connect("localhost" , "root" , "V3l4zc012");
if (!$conexion) {
 	die(mysql_error());
}
mysql_select_db("usuarios" , $conexion);
?>
