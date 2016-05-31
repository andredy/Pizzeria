<?php
include "vinculacion.php";
$sql="SELECT *FROM clienteslocal";
$res=mysqli_query($conexion,$sql);
$datos=array();
if($res){    
$i=0;
	while($fila=mysqli_fetch_assoc($res)){
		 $datos[$i]=$fila;
	 $i=$i+1;	
	}
        
}else{
	echo "Error al ejecutar la cosulta: ".mysqli_error();
}
mysqli_close($conexion);
//echo 'la vida es bella'.$res;
echo json_encode($datos);
?>
