<html>
<body>
<?php
//$conexion = mysql_connect("servidor" , "usuario" , "password" );
$conexion = mysql_connect("localhost" , "root" , "V3l4zc012");
if (!$conexion) {
 	die(mysql_error());
}
mysql_select_db("captura");
?>
Bienvenido al sistema<br/> <?php echo $_POST['nombre'];?>
<?php echo $_POST ['apellido']?>
<br />
Tu edad es: <?php echo $_POST['edad'];?> años.<br/>
Eres:<?php echo $_POST['gender'];?> <br/>
Tu rfc es:<? echo $_POST['RFC'];?><br/>
<?php mysql_query("INSERT INTO 'usuarios' ('nombre' , 'apellido') VALUES ('Angela' ,'Velazco')");

 echo "Listo ya estas registrado en el sistema";?>
</body>
</html>

