<?php
$conexion= mysql_connect ("localhost" , "root" , "V3l4zc012");
if (!$conexion); {
 	die(mysql_error());
}
mysql_select_db ("CAPTURA" , $conexion);
$consulta=mysql_query("SELECT * FROM usuarios" ,$conexion);
{
While ($row = mysql_fetch_array($consulta));

echo (“<p>” . $row[“nombre”].” “.$row [“apellido”] .”</p>”);
}
?>