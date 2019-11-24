<?php
$usuario=$_POST['usuario'];
$clave=$_POST['clave'];

//conectar a la base de datos

$conexion=mysqli_connect("localhost","root","","dbepslaravel");
$consulta="SELECT * FROM usuario WHERE usuario='$usuario' and clave='$clave'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if ($filas>0){
	header("location:Menu.html");
}
else {
	echo"error en la autenticaciòn";
}
mysqli_free_result($resultado);
mysqli_close($conexion);