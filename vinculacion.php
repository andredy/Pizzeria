<?php
$usuario="root";
$contrasena="";
$servidor="localhost";
$bd="elcoyote";
$conexion=  mysqli_connect($servidor,$usuario,$contrasena,$bd) or die("Error al conectarse al servidor de base de datos: ".mysqli_error());
//mysql_select_db($bd,$conexion);
?>