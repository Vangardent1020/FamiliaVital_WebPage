<?php

     require ("../app/conectarBD.php");

     $asesor=$_POST ['idAsesor'];
     $pass=$_POST ['idPassword'];

     $sql="SELECT * FROM asesores WHERE asesor='$asesor' ";
     $result=$conn->query($sql);

     if($f=mysqli_fetch_array($result)){
          if($pass==$f['password']){
               header("Location: ../formularios/FormularioInscripcion.php");
          }
          else{
               echo '<script>alert("Contraseña incorrecta")</script>';
               echo "<script>location:href='../secciones/asesores.php'</script>";
          }
     }
     else{
          echo '<script>alert("No existe")</script>';
          echo "<script>location:href='../secciones/asesores.php'</script>";
     }

 ?>
