<?php
$usuario="u357700750_andr";
$contrasena="1234567";
$servidor="mysql.hostinger.mx";
$bd="u357700750_elcoy";
$conexion=mysql_connect($servidor,$usuario,$contrasena) or die("Error al conectarse al servidor de base de datos: ".mysql_error());
mysql_select_db($bd,$conexion);
?>