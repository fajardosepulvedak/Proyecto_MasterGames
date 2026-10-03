<?php
include("conectar.php");
?>
<html>
<head>
	<title>EDITAR</title>
</head>
	<?php
if(isset($_POST['act'])){
$id=$_POST['IDC'];

$nombre=$_POST['nomb'];
$apellido=$_POST["apes"];
$correo=$_POST['correo2'];
$passwordss=$_POST['passs'];
$Tel=$_POST['tell'];
$Direccion=$_POST['dirr'];
$CP=$_POST['cpp'];
$fecha=$_POST['fechanaa'];
$sexo=$_POST['sexo'];

$pass=$_POST['pass2'];
$sql2="SELECT *FROM cuentas WHERE Contrasena='$pass' AND IdCuenta='".$id."'";
$resultado2=mysqli_query($conectar,$sql2);
if($resultado2->num_rows>0){

$sql="Update cuentas set Nombre='".$nombre."', Apellido='".$apellido."', Correo='".$correo."', Contrasena='".$passwordss."', Telefono='".$Tel."', Direccion='".$Direccion."',CodigoPostal='".$CP."',FechaNac='".$fecha."',Sexo='".$sexo."' where IdCuenta='".$id."'";
$resultado=mysqli_query($conectar,$sql);
if($resultado){
	echo"<script language='JavaScript'>
	alert('Los datos se actualizaron correctamente');
	location.assign('Consultar.php');</script>";
}else{
	echo"<script language='JavaScript'>
	alert('Los datos NO se actualizaron correctamente');
	location.assign('Consultar.php');</script>";
}
}else{
	echo"<script>
alert('Contrasena incorrecta');
location.assign('Consultar.php');
	</script>";
}
}else{
$id=$_GET['id'];
$sql="Select*From cuentas Where IdCuenta='".$id."'";
$resultado=mysqli_query($conectar,$sql);
$row=mysqli_fetch_assoc($resultado);
$nombres=$row['Nombre'];
$apellidos=$row["Apellido"];
$correos=$row['Correo'];
$passwords=$row['Contrasena'];
$Tels=$row['Telefono'];
$Direccions=$row['Direccion'];
$CPs=$row['CodigoPostal'];
$fechas=$row['FechaNac'];
$sexos=$row['Sexo'];
}


	?>
<form action="<?=$_SERVER['PHP_SELF']?>" method="post">
	Contrasena Actual<br>
	<input type="password" name="pass2"><br><br>
<h1>Editar Cuenta</h1>
Nombre(s): <input type="text" placeholder="Nombre" name="nomb" value="<?php echo $nombres;?>"> Apellidos: <input type="text" placeholder="Apellidos" name="apes" value="<?php echo $apellidos;?>"><br><br>
Correo: <input type="email" placeholder="example@gmail.com" name="correo2" value="<?php echo $correos;?>">
Contrasena: <input type="password" placeholder="Escribe una contrasena segura" name="passs" value="<?php echo $passwords;?>"><br><br>
Telefono: <input type="text" placeholder="Escribe tu telefono" name="tell" value="<?php echo $Tels;?>"><br><br>
Direccion: <input type="text" placeholder="Calle-NumeroDeCasa" name="dirr" value="<?php echo $Direccions;?>"> <input type="text" placeholder="Codigo Postal" name="cpp" value="<?php echo $CPs;?>"><br><br>
Fecha de Nacimiento: <input type="date" name="fechanaa" value="<?php echo $fechas;?>"><br><br>
Sexo: <select name="sexo" id="sex">
<option value="Hombre">Hombre</option>
<option value="Mujer">Mujer</option>
<option value="Otro">Otro</option>
</select><br><br>

<input type="hidden" name="IDC" value="<?php echo $id;?>"><br>

	<input type="submit" name="act" value="Actualizar"><br>
	<a href="Consultar.php">Regresar</a>
</form>
</html>