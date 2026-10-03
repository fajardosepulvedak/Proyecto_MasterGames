<?php
//Incluye los servicios de la pagina en include sin mostrar nada visible del archivo
ob_start();
include('conectar.php');
ob_end_clean();


session_start();
if(isset($_POST['login'])){
	$usuario=$_POST['email'];
	$password=$_POST['con'];
    $sql="SELECT Correo, Contrasena FROM cuentas where Correo='".$usuario."'and Contrasena='".$password."'";
    $query=mysqli_query($conectar,$sql);
    $counter=mysqli_num_rows($query);
    
    $_SESSION['login']=$usuario;
    if($counter==1){ 
        $_SESSION['login_user_sys']=$usuario; 
        echo "<script>window.open('IN.html');window.close('inicio.php')</script>'";
    

    }else{
    	echo"<script>alert('Correo y/o contrasena incorrectos');
    	location.assign('inicio.html');</script>";
    }
}


    	?>