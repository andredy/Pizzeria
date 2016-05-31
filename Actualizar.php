<?php
include "conexion.php";

$nombre=$_POST["Nombre"];
$Contrasena=$_POST["Cont"];
$HrsT=$_POST["ht"];


$sql="UPDATE personal SET Nombre='$nombre',Contrasena='$Contrasena', HrsTrabajo='$HrsT' WHERE Nombre='$nombre'";
$res=mysql_query($sql,$conexion);

if($res){
	echo "Los datos fueron Actualizados satifactoriamente: ";
	echo " Nombre: ".$nombre." Contrasena: ".$Contrasena." HrsTrabajo: ".$HrsT ;

}else{
	echo "Se produjo un error en ele momento de Actualizar los datos:".mysql_error();

}
mysql_close($conexion);
?>

