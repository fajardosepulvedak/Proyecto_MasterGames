<!DOCTYPE html>
<html>
<?php
$host="freackylandia.com";
$user="u966749536_Deidad2006";
$clave="Kyfs1234";
$bd="u966749536_MasterGame";

$conectar=mysqli_connect($host,$user,$clave,$bd);
	
	if(!$conectar){
	echo"Error al conectar";
}
else{
	echo"Conectado,<a href='reg.html'>Volver</a>";
}
?>
</html>