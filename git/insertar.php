<?php

  include("conexion.php"); 

  if (isset($_POST['nombres']) && !empty($_POST['nombres']) &&
      isset($_POST['ips']) && !empty($_POST['ips']) &&
      isset($_POST['regional']) && !empty($_POST['regional']) &&
      isset($_POST['zonal']) && !empty($_POST['zonal']) &&
      isset($_POST['fecha_inicial']) && !empty($_POST['fecha_inicial']) &&
      isset($_POST['fecha_final']) && !empty($_POST['fecha_final']) &&
      isset($_POST['pregunta_1']) && !empty($_POST['pregunta_1'])&&
      isset($_POST['pregunta_2']) && !empty($_POST['pregunta_2'])&&
      isset($_POST['pregunta_3']) && !empty($_POST['pregunta_3'])&&
      isset($_POST['pregunta_4']) && !empty($_POST['pregunta_4'])&&
      isset($_POST['pregunta_5']) && !empty($_POST['pregunta_5'])&&
      isset($_POST['pregunta_6']) && !empty($_POST['pregunta_6'])&&
      isset($_POST['pregunta_7']) && !empty($_POST['pregunta_7'])&&
      isset($_POST['pregunta_8']) && !empty($_POST['pregunta_8'])&&
      isset($_POST['pregunta_9']) && !empty($_POST['pregunta_9'])&&
      isset($_POST['pregunta_10']) && !empty($_POST['pregunta_10'])&&
      isset($_POST['pregunta_11']) && !empty($_POST['pregunta_11'])&&
      isset($_POST['pregunta_12']) && !empty($_POST['pregunta_12'])&&
      isset($_POST['pregunta_13']) && !empty($_POST['pregunta_13'])&&
      isset($_POST['pregunta_14']) && !empty($_POST['pregunta_14'])&&
      isset($_POST['pregunta_15']) && !empty($_POST['pregunta_15'])&&
      isset($_POST['pregunta_16']) && !empty($_POST['pregunta_16'])&&
      isset($_POST['pregunta_17']) && !empty($_POST['pregunta_17'])&&
      isset($_POST['pregunta_18']) && !empty($_POST['pregunta_18'])&&
      isset($_POST['pregunta_19']) && !empty($_POST['pregunta_19'])&&
      isset($_POST['pregunta_20']) && !empty($_POST['pregunta_20'])&&
      isset($_POST['observaciones']) && !empty($_POST['observaciones'])
      ) {
  	# code...
  	  $con=mysqli_connect($host,$user,$pw,$db);
      mysqli_query($con,("INSERT INTO 
      	                 lista (id_usuario,id_regional,id_zonal,cod_ips,fecha_inicial,fecha_final,pregunta_1,pregunta_2,pregunta_3,pregunta_4,pregunta_5,pregunta_6,
                         pregunta_7,pregunta_8,pregunta_9,pregunta_10,pregunta_11,pregunta_12,pregunta_13,pregunta_14,
                         pregunta_15,pregunta_16,pregunta_17,pregunta_18,pregunta_19,pregunta_20,observaciones)

      VALUES ('$_POST[nombres]','$_POST[regional]','$_POST[zonal]','$_POST[ips]','$_POST[fecha_inicial]',
              '$_POST[fecha_final]','$_POST[pregunta_1]','$_POST[pregunta_2]','$_POST[pregunta_3]','$_POST[pregunta_4]'
                           ,'$_POST[pregunta_5]','$_POST[pregunta_6]','$_POST[pregunta_7]','$_POST[pregunta_8]'
                           ,'$_POST[pregunta_9]','$_POST[pregunta_10]' ,'$_POST[pregunta_11]','$_POST[pregunta_12]'
                           ,'$_POST[pregunta_13]','$_POST[pregunta_14]','$_POST[pregunta_15]','$_POST[pregunta_16]'
                           ,'$_POST[pregunta_17]','$_POST[pregunta_18]','$_POST[pregunta_19]','$_POST[pregunta_20]',
                            '$_POST[observaciones]')"));
      
      echo("DATOS INSERTADOS"); 
  } else {

  	  echo"ERROR AL INSERTAR DATOS";
  }
 ?>