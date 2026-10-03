<html>
<?php

function Cup(){
	include('conectar.php');
	
	//Recupera el correo del inicio de sesion
	session_start();
if (isset($_SESSION['login'])) {
    $usuario=$_SESSION['login'];
}else{
    echo 'error';
} 
	
	if(isset($_POST['Cup'])){
$sql="INSERT INTO carrito(IDVid,NombreV, Precio, Empresa, CorreoComp)
SELECT IDVid,NombreV, Precio, Empresa, '$usuario' FROM productos 
WHERE IDVid=7";
$resultado=mysqli_query($conectar,$sql);
if($resultado){
	echo"<script language='JavaScript'>
	alert('Juego Agregado correctamente');
	location.assign('CU.html');
</script>";
}else{
	echo"<script language='JavaScript'>
	alert('Juego Agregado incorrectamente');
	location.assign('CU.html');
</script>";
}
}
}
Cup();
function Halo(){
	include('conectar.php');
	
	//Recupera el correo del inicio de sesion
	session_start();
if (isset($_SESSION['login'])) {
    $usuario=$_SESSION['login'];
}else{
    echo 'error';
} 
	
	if(isset($_POST['Halo'])){
$sql="INSERT INTO carrito(IDVid,NombreV, Precio, Empresa,CorreoComp)
SELECT IDVid,NombreV, Precio, Empresa, '$usuario' FROM productos 
WHERE IDVid=1";
$resultado=mysqli_query($conectar,$sql);
if($resultado){
	echo"<script language='JavaScript'>
	alert('Juego Agregado correctamente');
    location.assign('HAL.html');
</script>";
}else{
	echo"<script language='JavaScript'>
	alert('Juego Agregado incorrectamente');
    location.assign('HAL.html');
</script>";
}
}
}
Halo();
function Forza(){
	include('conectar.php');
	
	//Recupera el correo del inicio de sesion
	session_start();
if (isset($_SESSION['login'])) {
    $usuario=$_SESSION['login'];
}else{
    echo 'error';
} 
	
	if(isset($_POST['Forza'])){
$sql="INSERT INTO carrito(IDVid,NombreV, Precio, Empresa, CorreoComp)
SELECT IDVid,NombreV, Precio, Empresa, '$usuario' FROM productos 
WHERE IDVid=2";
$resultado=mysqli_query($conectar,$sql);
if($resultado){
	echo"<script language='JavaScript'>
	alert('Juego Agregado correctamente');
	location.assign('F5.html');
</script>";
}else{
	echo"<script language='JavaScript'>
	alert('Juego Agregado incorrectamente');
	location.assign('F5.html');
</script>";
}
}
}
Forza();
function Mine(){
	include('conectar.php');
	
	//Recupera el correo del inicio de sesion
	session_start();
if (isset($_SESSION['login'])) {
    $usuario=$_SESSION['login'];
}else{
    echo 'error';
} 
	
	if(isset($_POST['Mine'])){
$sql="INSERT INTO carrito(IDVid,NombreV, Precio, Empresa, CorreoComp)
SELECT IDVid,NombreV, Precio, Empresa, '$usuario' FROM productos 
WHERE IDVid=3";
$resultado=mysqli_query($conectar,$sql);
if($resultado){
	echo"<script language='JavaScript'>
	alert('Juego Agregado correctamente');
	location.assign('Mine.html');
</script>";
}else{
	echo"<script language='JavaScript'>
	alert('Juego Agregado incorrectamente');
	location.assign('Mine.html');
</script>";
}
}
}
Mine();
function G5(){
	include('conectar.php');
	
	//Recupera el correo del inicio de sesion
	session_start();
if (isset($_SESSION['login'])) {
    $usuario=$_SESSION['login'];
}else{
    echo 'error';
} 
	
	if(isset($_POST['G5'])){
$sql="INSERT INTO carrito(IDVid,NombreV, Precio, Empresa, CorreoComp)
SELECT IDVid,NombreV, Precio, Empresa, '$usuario' FROM productos 
WHERE IDVid=4";
$resultado=mysqli_query($conectar,$sql);
if($resultado){
	echo"<script language='JavaScript'>
	alert('Juego Agregado correctamente');
	location.assign('GE5.html');
</script>";
}else{
	echo"<script language='JavaScript'>
	alert('Juego Agregado incorrectamente');
	location.assign('GE5.html');
</script>";
}
}
}
G5();
function Cod(){
	include('conectar.php');
	
	//Recupera el correo del inicio de sesion
	session_start();
if (isset($_SESSION['login'])) {
    $usuario=$_SESSION['login'];
}else{
    echo 'error';
} 
	
	if(isset($_POST['Cod'])){
$sql="INSERT INTO carrito(IDVid,NombreV, Precio, Empresa, CorreoComp)
SELECT IDVid,NombreV, Precio, Empresa, '$usuario' FROM productos 
WHERE IDVid=5";
$resultado=mysqli_query($conectar,$sql);
if($resultado){
	echo"<script language='JavaScript'>
	alert('Juego Agregado correctamente');
	location.assign('CD.html');
</script>";
}else{
	echo"<script language='JavaScript'>
	alert('Juego Agregado incorrectamente');
	location.assign('CD.html');
</script>";
}
}
}
Cod();
function Gow(){
	include('conectar.php');
	
	//Recupera el correo del inicio de sesion
	session_start();
if (isset($_SESSION['login'])) {
    $usuario=$_SESSION['login'];
}else{
    echo 'error';
} 
	
	if(isset($_POST['Gow'])){
$sql="INSERT INTO carrito(IDVid,NombreV, Precio, Empresa, CorreoComp)
SELECT IDVid,NombreV, Precio, Empresa, '$usuario' FROM productos 
WHERE IDVid=6";
$resultado=mysqli_query($conectar,$sql);
if($resultado){
	echo"<script language='JavaScript'>
	alert('Juego Agregado correctamente');
	location.assign('GO.html');
</script>";
}else{
	echo"<script language='JavaScript'>
	alert('Juego Agregado incorrectamente');
	location.assign('GO.html');
</script>";
}
}
}
Gow();
function Doom(){
	include('conectar.php');
	
	//Recupera el correo del inicio de sesion
	session_start();
if (isset($_SESSION['login'])) {
    $usuario=$_SESSION['login'];
}else{
    echo 'error';
} 
	
	if(isset($_POST['Doom'])){
$sql="INSERT INTO carrito(IDVid,NombreV, Precio, Empresa, CorreoComp)
SELECT IDVid,NombreV, Precio, Empresa, '$usuario' FROM productos 
WHERE IDVid=8";
$resultado=mysqli_query($conectar,$sql);
if($resultado){
	echo"<script language='JavaScript'>
	alert('Juego Agregado correctamente');
	location.assign('DOO.html');
</script>";
}else{
	echo"<script language='JavaScript'>
	alert('Juego Agregado incorrectamente');
	location.assign('DOO.html');
</script>";
}
}
}
Doom();
function F3(){
	include('conectar.php');
	
	//Recupera el correo del inicio de sesion
	session_start();
if (isset($_SESSION['login'])) {
    $usuario=$_SESSION['login'];
}else{
    echo 'error';
} 
	
	if(isset($_POST['F3'])){
$sql="INSERT INTO carrito(IDVid,NombreV, Precio, Empresa, CorreoComp)
SELECT IDVid,NombreV, Precio, Empresa, '$usuario' FROM productos 
WHERE IDVid=9";
$resultado=mysqli_query($conectar,$sql);
if($resultado){
	echo"<script language='JavaScript'>
	alert('Juego Agregado correctamente');
	location.assign('F3.html');
</script>";
}else{
	echo"<script language='JavaScript'>
	alert('Juego Agregado incorrectamente');
	location.assign('F3.html');
</script>";
}
}
}
F3();
function Fnv(){
	include('conectar.php');
	
	//Recupera el correo del inicio de sesion
	session_start();
if (isset($_SESSION['login'])) {
    $usuario=$_SESSION['login'];
}else{
    echo 'error';
} 
	
	if(isset($_POST['FNV'])){
$sql="INSERT INTO carrito(IDVid,NombreV, Precio, Empresa, CorreoComp)
SELECT IDVid,NombreV, Precio, Empresa, '$usuario' FROM productos 
WHERE IDVid=10";
$resultado=mysqli_query($conectar,$sql);
if($resultado){
	echo"<script language='JavaScript'>
	alert('Juego Agregado correctamente');
	location.assign('FNW.html');
</script>";
}else{
	echo"<script language='JavaScript'>
	alert('Juego Agregado incorrectamente');
	location.assign('FNW.html');
</script>";
}
}
}
Fnv();
function F4(){
	include('conectar.php');
	
	//Recupera el correo del inicio de sesion
	session_start();
if (isset($_SESSION['login'])) {
    $usuario=$_SESSION['login'];
}else{
    echo 'error';
} 
	
	if(isset($_POST['F4'])){
$sql="INSERT INTO carrito(IDVid,NombreV, Precio, Empresa, CorreoComp)
SELECT IDVid,NombreV, Precio, Empresa, '$usuario' FROM productos 
WHERE IDVid=11";
$resultado=mysqli_query($conectar,$sql);
if($resultado){
	echo"<script language='JavaScript'>
	alert('Juego Agregado correctamente');
	location.assign('F4.html');
</script>";
}else{
	echo"<script language='JavaScript'>
	alert('Juego Agregado incorrectamente');
	location.assign('F4.html');
</script>";
}
}
}
F4();
function SP(){
	include('conectar.php');
	
	//Recupera el correo del inicio de sesion
	session_start();
if (isset($_SESSION['login'])) {
    $usuario=$_SESSION['login'];
}else{
    echo 'error';
} 
	
	if(isset($_POST['SP'])){
$sql="INSERT INTO carrito(IDVid,NombreV, Precio, Empresa, CorreoComp)
SELECT IDVid,NombreV, Precio, Empresa, '$usuario' FROM productos 
WHERE IDVid=12";
$resultado=mysqli_query($conectar,$sql);
if($resultado){
	echo"<script language='JavaScript'>
	alert('Juego Agregado correctamente');
	location.assign('PS.html');
</script>";
}else{
	echo"<script language='JavaScript'>
	alert('Juego Agregado incorrectamente');
	location.assign('PS.html');
</script>";
}
}
}
SP();
function DB(){
	include('conectar.php');
	
	//Recupera el correo del inicio de sesion
	session_start();
if (isset($_SESSION['login'])) {
    $usuario=$_SESSION['login'];
}else{
    echo 'error';
} 
	
	if(isset($_POST['DB'])){
$sql="INSERT INTO carrito(IDVid,NombreV, Precio, Empresa, CorreoComp)
SELECT IDVid,NombreV, Precio, Empresa, '$usuario' FROM productos 
WHERE IDVid=13";
$resultado=mysqli_query($conectar,$sql);
if($resultado){
	echo"<script language='JavaScript'>
	alert('Juego Agregado correctamente');
	location.assign('DB.html');
</script>";
}else{
	echo"<script language='JavaScript'>
	alert('Juego Agregado incorrectamente');
	location.assign('DB.html');
</script>";
}
}
}
DB();
function Doome(){
	include('conectar.php');
	
	//Recupera el correo del inicio de sesion
	session_start();
if (isset($_SESSION['login'])) {
    $usuario=$_SESSION['login'];
}else{
    echo 'error';
} 
	
	if(isset($_POST['Doome'])){
$sql="INSERT INTO carrito(IDVid,NombreV, Precio, Empresa, CorreoComp)
SELECT IDVid,NombreV, Precio, Empresa, '$usuario' FROM productos 
WHERE IDVid=14";
$resultado=mysqli_query($conectar,$sql);
if($resultado){
	echo"<script language='JavaScript'>
	alert('Juego Agregado correctamente');
	location.assign('DOETE.html');
</script>";
}else{
	echo"<script language='JavaScript'>
	alert('Juego Agregado incorrectamente');
	location.assign('DOETE.html');
</script>";
}
}
}
Doome();
function Te(){
	include('conectar.php');
	
	//Recupera el correo del inicio de sesion
	session_start();
if (isset($_SESSION['login'])) {
    $usuario=$_SESSION['login'];
}else{
    echo 'error';
} 
	
	if(isset($_POST['Te'])){
$sql="INSERT INTO carrito(IDVid,NombreV, Precio, Empresa, CorreoComp)
SELECT IDVid,NombreV, Precio, Empresa, '$usuario' FROM productos 
WHERE IDVid=15";
$resultado=mysqli_query($conectar,$sql);
if($resultado){
	echo"<script language='JavaScript'>
	alert('Juego Agregado correctamente');
	location.assign('TES.html');
</script>";
}else{
	echo"<script language='JavaScript'>
	alert('Juego Agregado incorrectamente');
	location.assign('TES.html');
</script>";
}
}
}
Te();
function wit(){
	include('conectar.php');
	
	//Recupera el correo del inicio de sesion
	session_start();
if (isset($_SESSION['login'])) {
    $usuario=$_SESSION['login'];
}else{
    echo 'error';
} 
	
	if(isset($_POST['T3'])){
$sql="INSERT INTO carrito(IDVid,NombreV, Precio, Empresa, CorreoComp)
SELECT IDVid,NombreV, Precio, Empresa, '$usuario' FROM productos 
WHERE IDVid=16";
$resultado=mysqli_query($conectar,$sql);
if($resultado){
	echo"<script language='JavaScript'>
	alert('Juego Agregado correctamente');
	location.assign('T3.html');
</script>";
}else{
	echo"<script language='JavaScript'>
	alert('Juego Agregado incorrectamente');
	location.assign('T3.html');
</script>";
}
}
}
wit();
function DM5(){
	include('conectar.php');
	
	//Recupera el correo del inicio de sesion
	session_start();
if (isset($_SESSION['login'])) {
    $usuario=$_SESSION['login'];
}else{
    echo 'error';
} 
	
	if(isset($_POST['DM5'])){
$sql="INSERT INTO carrito(IDVid,NombreV, Precio, Empresa, CorreoComp)
SELECT IDVid,NombreV, Precio, Empresa, '$usuario' FROM productos 
WHERE IDVid=17";
$resultado=mysqli_query($conectar,$sql);
if($resultado){
	echo"<script language='JavaScript'>
	alert('Juego Agregado correctamente');
	location.assign('D5.html');
</script>";
}else{
	echo"<script language='JavaScript'>
	alert('Juego Agregado incorrectamente');
	location.assign('D5.html');
</script>";
}
}
}
DM5();
function Un4(){
	include('conectar.php');
	
	//Recupera el correo del inicio de sesion
	session_start();
if (isset($_SESSION['login'])) {
    $usuario=$_SESSION['login'];
}else{
    echo 'error';
} 
	
	if(isset($_POST['U4'])){
$sql="INSERT INTO carrito(IDVid,NombreV, Precio, Empresa, CorreoComp)
SELECT IDVid,NombreV, Precio, Empresa, '$usuario' FROM productos 
WHERE IDVid=18";
$resultado=mysqli_query($conectar,$sql);
if($resultado){
	echo"<script language='JavaScript'>
	alert('Juego Agregado correctamente');
	location.assign('U4.html');
</script>";
}else{
	echo"<script language='JavaScript'>
	alert('Juego Agregado incorrectamente');
	location.assign('U4.html');
</script>";
}
}
}
Un4();
?>
</html>