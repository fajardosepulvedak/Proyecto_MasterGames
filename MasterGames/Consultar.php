<html>
      <style>
     legend{
        font-size:24px;
        font-family:Gill Sans;
        font-style:italic;
        font-weight:bold;
        background-color:black;
        color:white;
        } 
      
     fieldset{
       border-color:#2A0C3D;
       background: linear-gradient(#323243,black);
       border-width:15px;
       width:40%;
       color: white;
     }
            table{
       border-color:#2A0C3D;
       background: linear-gradient(#323243,black);
       border-width:5px;
       width:100%;
       color: white;
        }
input{
         font-size:14px;
         font-family:Lucida Sans;
         border-radius:10px;
         border-color:#2A0C3D;
         color:white;
         background-color: transparent;
         border-width: 5px;
            }
   button{ 
          size:28px;
         font-size:18px;
         font-family:Comic Sans MS;
         border-radius:10px;
         border-color:#311B3E;
         background:linear-gradient(#311B3E,black);
         color:white;
         }
         
        </style>
<fieldset>
<legend>
	CUENTAS
</legend>
<?php

ob_start();
include("conectar.php");
ob_end_clean();

//Recupera datos de la sesion (Correo)
session_start();
if (isset($_SESSION['login'])) {
    $usuario=$_SESSION['login'];
}else{
    echo 'error';
} 

	$sql="SELECT*FROM cuentas WHERE Correo='$usuario'";
	$resultado=mysqli_query($conectar,$sql);
	?>

	<table border="2">
		<thead>
			<tr>
				<th>Nombre</th>
				<th>Apellido</th>
				<th>Correo</th>
				<th>Contrasena</th>
				<th>Telefono</th>
				<th>Direccion</th>
				<th>Codigo Postal</th>
				<th>Fecha Nac</th>
				<th>Sexo</th>
			</tr>
		</thead>
<tbody>
	<?php while($row=mysqli_fetch_array($resultado))
	{ ?>
		<tr>
			<td><?php echo $row['Nombre']; ?></td>
			<td><?php echo $row['Apellido']; ?></td>
			<td><?php echo $row['Correo']; ?></td>
			<td><?php echo"**********"; ?></td>
			<td><?php echo $row['Telefono']; ?></td>
			<td><?php echo $row['Direccion']; ?></td>
			<td><?php echo $row['CodigoPostal']; ?></td>
			<td><?php echo $row['FechaNac']; ?></td>
			<td><?php echo $row['Sexo']; ?></td>
			<td><?php echo"<a href='Modificar.php?id=".$row['IdCuenta']."'><img src='lapiz.png' width='30px' height='30px'></a>";?></td>
			<td><?php echo"<a href='Eliminar.php?id=".$row['IdCuenta']."'><img src='bote2.png' width='30px' height='30px'></a>";?></td>
		</tr>
<?php } 
/*
<html>
<fieldset>
<legend>
	CUENTAS
</legend>
<?php
include("conectar.php");
	$where="";
	if(!empty($_POST)){
		$valor=$_POST['campo'];
		if(!empty($valor)){
			$where="WHERE Nombre LIKE '%$valor%'";
		}
	}
	$sql="SELECT*FROM cuentas $where";
	$resultado=mysqli_query($conectar,$sql);
	?>
	<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
Nombre: <input type="text" name="campo"><br><br>
<input type="submit" name="Bu" value="Buscar">
</form>

	<table border="2">
		<thead>
			<tr>
				<th>ID Cuenta</th>
				<th>Nombre</th>
				<th>Apellido</th>
				<th>Correo</th>
				<th>Contrasena</th>
				<th>Telefono</th>
				<th>Direccion</th>
				<th>Codigo Postal</th>
				<th>Fecha Nac</th>
				<th>Sexo</th>
			</tr>
		</thead>
<tbody>
	<?php while($row=mysqli_fetch_array($resultado))
	{ ?>
		<tr>
			<td><?php echo $row['IdCuenta']; ?></td>
			<td><?php echo $row['Nombre']; ?></td>
			<td><?php echo $row['Apellido']; ?></td>
			<td><?php echo $row['Correo']; ?></td>
			<td><?php echo"**********"; ?></td>
			<td><?php echo $row['Telefono']; ?></td>
			<td><?php echo $row['Direccion']; ?></td>
			<td><?php echo $row['CodigoPostal']; ?></td>
			<td><?php echo $row['FechaNac']; ?></td>
			<td><?php echo $row['Sexo']; ?></td>
			<td><?php echo"<a href='Modificar.php?id=".$row['IdCuenta']."'><img src='lapiz.png' width='30px' height='30px'></a>";?></td>
			<td><?php echo"<a href='eliminar.php?id=".$row['IdCuenta']."'><img src='bote2.png' width='30px' height='30px'></a>";?></td>
		</tr>
<?php } ?>
</tbody>
	</table>
	<body>
<br><br><button onclick="location.assign('IN.html');window.close();">Regresar</button>
	</body>
</fieldset>
</html>

*/
?>
</tbody>
	</table>
	<body>
<br><br><button onclick="location.assign('IN.html');window.close();">Regresar</button>
	</body>
</fieldset>
</html>
