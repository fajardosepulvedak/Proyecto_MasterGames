<?php
$id=$_GET['id'];
include("conectar.php");

$sql="Delete From carrito Where ID='".$id."'";
$resultado=mysqli_query($conectar,$sql);
if($resultado){
	echo"<script language='JavaScript'>
	alert('Los datos se eliminaron correctamente');
	location.assign('carrito.php');</script>";
}else{
	echo"<script language='JavaScript'>
	alert('Los datos NO se eliminaron correctamente');
	location.assign('carrito.php');
</script>";
}


?>