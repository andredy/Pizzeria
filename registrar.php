<?php
include 'conexion.php';
$nombre = $_POST["nomb"];
$clave = $_POST["cont"];
$horas = $_POST["hor"];
$clasificacion = $_POST["clas"];
//consultar para insertar
$sql = "INSERT INTO personal(Nombre, Contrasena, HrsTrabajo, Clasificacion) VALUES ('$nombre', '$clave', '$horas', '$clasificacion')";

/*$verificar_usuario = mysql_query($conexion, "SELECT * FROM personas WHERE nomb ='$nombre'");
if(mysql_num_rows($verificar_usuario)> 0){
    echo '<script> alert ("El usuario ya esta registrado")
    . </script>';
    exit;
}
$verificar_correo = mysql_query($conexion, "SELECT * FROM personas WHERE correo ='$correo'");
if(mysql_num_rows($verificar_correo)> 0){
    echo 'El correo ya esta registrado';
    exit;
} */
//ejecutar consulta
$res = mysql_query($sql,$conexion);
if($res){
    //hasta aki llegue en revisar
    echo 'Los datos fueron registrados satisfactoriamente: '; 
    echo " Nombre: ".$nombre." Contrasena: ".$clave." HrsTrabajo: ".$horas. "Clasificacion: ".$clasificacion;
} else {
    echo 'Error al registrarse'.mysql_error();
       
}

mysql_close($conexion);
?>