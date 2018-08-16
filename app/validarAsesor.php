<?php

     require ("../app/conectarBD.php");

     $validId=$_POST ['validId'];

     $sql="SELECT * FROM asesores WHERE asesor='$validId' ";
     $result=$conn->query($sql);

     if($f=mysqli_fetch_array($result)){
          echo '<script>alert("Tu asesor es confiable")</script>';
          header("Location: ../secciones/asesores.php");
     }
     else{
          echo '<script>alert("Este asesor no trabaja con nosotros")</script>';
          header("Location: ../secciones/asesores.php");
     }
 ?>
