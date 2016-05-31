<?php
include "conexion.php";

$Nc=$_POST["NC"];


$sql="DELETE FROM personal WHERE idPersonal='$Nc'";
$res=mysql_query($sql,$conexion);

if($res){
	echo "Los datos fueron Eliminados satifactoriamente: ";
	echo " id: ".$Nc;

}else{
	echo "Se produjo un error al momento de eliminar los datos:".mysql_error();

}
mysql_close($conexion);
?>