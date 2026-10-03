<!DOCTYPE html>
<html>
<body>
	
<?php
include('conectar.php');
$Ra=$_POST['rad'];
$Che=$_POST['check'];
if (!isset($Che)||!isset($Ra)) {
	echo "<script>alert('LO SENTIMOS!!, necesitamos que estes de acuerdo con nuestras politicas');
location.assign('reg.html');
	</script>";
}else{

$Nombre=$_POST['nom'];
$Apellido=$_POST['ape'];
$Correo=$_POST['correo'];
$Contra=$_POST['pass'];
$Tele=$_POST['tel'];
$Direccion=$_POST['dir'];
$Cp=$_POST['cp'];
$Fecha=$_POST['fechana'];
$Sex=$_POST['sex'];

$sql="INSERT INTO cuentas (Nombre,Apellido,Correo,Contrasena,Telefono,Direccion,CodigoPostal,FechaNac,Sexo) VALUES('$Nombre','$Apellido','$Correo','$Contra','$Tele','$Direccion','$Cp','$Fecha','$Sex')";
$resultado=mysqli_query($conectar,$sql);
if($resultado){
	echo"<script>alert('Cuenta creada con exito');
	location.assign('reg.html');</script>";
}else{
	echo"<script>alert('Creacion de cuenta fallida')
	location.assign('reg.html');</script>";
}
}
?>
</body>
</html>
