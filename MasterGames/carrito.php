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

	$sql="SELECT*FROM carrito Where CorreoComp='$usuario'";
	$resultado=mysqli_query($conectar,$sql);
	?>

<html>
    <style>
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
<body>
    <center>
    <fieldset>
	<table border="2">
		<thead>
			<tr>
				<th>Nombre</th>
				<th>Precio</th>
				<th>Empresa</th>
			</tr>
		</thead>
<tbody>
	<?php while($row=mysqli_fetch_array($resultado))
	{ 


		?>
		<tr>
			<td><?php echo $row['NombreV']; ?></td>
			<td><?php echo $row['Precio']; ?></td>
			<td><?php echo $row['Empresa']; ?></td>
			<td><?php echo"<a href='EliCarrito.php?id=".$row['ID']."'><img src='bote2.png' widht='100px' height='20px'></a>";?></td>
		</tr>
<?php } ?>


<?php

//Calcula el precio total de todos los juegos de la cuenta 
$consulta=mysqli_query($conectar,("SELECT*FROM carrito Where CorreoComp='$usuario'"));
$total=0;
while($row=mysqli_fetch_array($consulta)){
	$total=$total+$row['Precio'];
}

//Calcula la cantidad total de juegos que hay en el carrito
$query="SELECT COUNT(*) Nombre FROM carrito Where CorreoComp='$usuario'";
$result=mysqli_query($conectar,$query);
$fila=mysqli_fetch_array($result);
?>
</tbody>
	</table>
	<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
		<br>Total de Productos: <input disabled type="number" name="totalPro" id="totalPro" value="<?php echo $fila['Nombre'];?>"><br>
	<br>Precio Total: $<input disabled type="number" name="totali" id="totali" value="<?php echo $total ?>">
	<br><br>
	<button onclick="Pagar()">Ver Precio</button>
	<br><br>
	<button type="submit" name="pre">Pagar</button>
<br><br><button onclick="location.assign('IN.html');window.close();">Regresar</button>
</form>
</fieldset>
</center>
</body>
<?php
if(isset($_POST['pre'])){
	$sql3= "UPDATE productos SET Cantidad = Cantidad - 1 WHERE IDVid IN (SELECT IDVid FROM carrito)";
	$result3=mysqli_query($conectar,$sql3);
	if($result3){
		echo "<script>alert('Pagado con exito');</script>";
	}else{
		echo "<script>alert('Pago sin realizar');</script>";
	}
		$sql4="Delete From carrito WHERE CorreoComp='$usuario'";
	$result4=mysqli_query($conectar,$sql4);
	if ($result4) {
		echo "<script>location.assign('carrito.php')</script>";
	}
}
?>
</html>
<script type="text/javascript">
	var total,volumen, pro, pv, v,precio,precioTotal, fecha,des;
	function Pagar(){
	
	total=document.getElementById('totali');
	pro=document.getElementById('totalPro');
	volumen=pro.value*14*2*18;
pv=volumen/5000; 
pv=parseFloat(pv);
v=pv;
v=parseFloat(v);
if (v>0&&v<=0.5){
precio="100";
precio=parseFloat(precio);

} 
if (v>0.5&&v<=1){
precio="120";
precio=parseFloat(precio);

}
if (v>1&&v<=2){
precio="140";
precio=parseFloat(precio);

} 
if (v>2&&v<=4) {
precio="180";
precio=parseFloat(precio);

}
if (v>4&&v<=6) { 
precio="200";
precio=parseFloat(precio);

} 
if (v>6&&v<=8) {
precio="220";
precio=parseFloat(precio);

}
if (v>8&&v<=10){
precio="245"
precio=parseFloat(precio);

}
if (v>10&&v<=12) {
precio="300"
precio=parseFloat(precio);

}
if (v>12 &&v<=14) { 
precio="330"
precio=parseFloat(precio);

} 
if (v>14&&v<=20) {
precio="500"
precio=parseFloat(precio);

}
if(v>20){
alert("EL PESO DEBE SER MENOR DE 20KG!!");
}
precioTotal=precio+parseFloat(total.value);
alert(
	"MasterGames"+"\n"+
	"Precio de los Productos: $"+total.value+"\n"+
	"Precio de envio: $"+precio+"\n"+
	"Precio Total: $"+precioTotal);

}
</script>
</html>