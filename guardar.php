<?php

include "conexion.php";

$nombre=$_POST["nomb"];
$pass=$_POST["con"];
$hor=$_POST["ht"];
$puest=$_POST["psto"];                                                                         

echo "hasta aqui llegan los datos";

$sql="INSERT INTO personal (Nombre, Contrasena, HrsTrabajo, Clasificacion)VALUES('$nombre','$pass','$hor','$puest')"; 
$res=mysql_query($sql,$conexion);

if($res){
	echo "Los datos fueron registrados satifactoriamente: ";
	echo "Nombre ".$nombre.", Contraseña ".$pass.", HrsTrabajo ".$hor.", IDClasificacion ".$puest;

}else{
	echo "Se produjo un error en ele momento de resgistrar los datos:".mysql_error();

}
mysql_close($conexion);
?>
