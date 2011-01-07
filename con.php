<?php

$link = mysql_connect("localhost", "root", "V3l4zc012");

mysql_select_db("CAPTURA", $link);

$result = mysql_query("SELECT * FROM usuarios", $link);

if ($row = mysql_fetch_array($result)){

echo "<table border = '1'> \n";

echo "<tr> \n";

echo "<td><b>Nombre</b></td> \n";

do {

echo "<tr> \n";

echo "<td>".$row["nombre"]."</td> \n";

} while ($row = mysql_fetch_array($result));

echo "</table> style="margin-left: 50">echo "</table> \n";

} else {

echo "¡ La base de datos está vacia !";

}

?>