<?php
    require "./inc/sesion_start.php";
  ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <?php
    include "./inc/head.php";
  ?>
</head>
<body>
  <?php

    //Esto es para cargar las vistas si se manipula la URL
    if(!isset($_GET['vista']) || $_GET['vista']==""){
      $_GET['vista']="login";
    }

    if(is_file("./vista/".$_GET['vista'].".php") && $_GET['vista']!="login" && $_GET['vista']!="404"){

      include "./inc/navbar.php";
      include "./vista/".$_GET['vista'].".php";
      include "./inc/script.php";
    } else{
      if($_GET['vista']=="login"){
        include "./vista/login.php";
      }else{
        include "./vista/404.php";
      }
    }


    
  ?>
    
</body>
</html>