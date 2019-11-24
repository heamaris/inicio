<?php

  include("conexion.php"); 

  if (isset($_POST['nombres']) && !empty($_POST['nombres']) &&
      isset($_POST['apellidos']) && !empty($_POST['apellidos']) &&
      isset($_POST['usuario']) && !empty($_POST['usuario']) &&
      isset($_POST['clave']) && !empty($_POST['clave']) &&
      isset($_POST['id_perfil']) && !empty($_POST['id_perfil'])
      ) {
  	# code...
  	  $cons=mysqli_connect($host,$user,$pw,$db);
      mysqli_query($cons,("INSERT INTO 
      	                 usuario (nombres,apellidos,usuario,clave,id_perfil)

      VALUES ('$_POST[nombres]','$_POST[apellidos]','$_POST[usuario]','$_POST[clave]','$_POST[id_perfil]')"));
      
      echo("DATOS INSERTADOS"), header("location:Formulario.html"); 
  } else {

  	  echo"ERROR AL INSERTAR DATOS";
  }
 ?>