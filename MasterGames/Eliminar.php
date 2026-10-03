<html>
<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
	Escribe la contrasena:<br>
	<input type="password" name="pass"><br>
	<input type="submit" name="conf">
</form>
</html>
<?php
if(isset($_POST['conf'])){
$id=$_GET['id'];
include("conectar.php");

$pass=$_POST['pass'];
$sql2="SELECT *FROM cuentas WHERE Contrasena='$pass' AND IdCuenta='".$id."'";
$resultado2=mysqli_query($conectar,$sql2);
if($resultado2->num_rows>0){
$sql="Delete From cuentas Where IdCuenta='".$id."'";
$resultado=mysqli_query($conectar,$sql);
if($resultado){
	echo"<script language='JavaScript'>
	alert('Los datos se eliminaron correctamente');
	location.assign('Consultar.php');</script>";
}else{
	echo"<script language='JavaScript'>
	alert('Los datos NO se eliminaron correctamente');
	location.assign('Consultar.php');
</script>";
}
}else{
	echo "<script>
alert('Contrasena incorrecta');
location.assign('Consultar.php');
	</script>";
}
}
?>