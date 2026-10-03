<!DOCTYPE html>
<html>
<?php
$host="localhost";
$user="root";
$clave="";
$bd="mastergames";

$conectar=mysqli_connect($host,$user,$clave,$bd);
	
	if(!$conectar){
	echo"Error al conectar";
}
else{
	echo"Conectado,<a href='reg.html'>Volver</a>";
}
?>
</html>