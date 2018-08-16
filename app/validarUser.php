<?php

     require ("../app/conectarBD.php");

     $username=$_POST ['loginUser'];
     $pass=$_POST ['loginPassword'];

     $sql="SELECT * FROM login WHERE user='$username' ";
     $result=$conn->query($sql);

     if($f=mysqli_fetch_array($result)){
          if($pass==$f['password']){
               header("Location: ../secciones/asesores.php");
          }
          else{
               echo '<script>alert("Contraseña incorrecta")</script>';
               echo "<script>location:href='../formularios/login.php'</script>";
          }
     }
     else{
          echo '<script>alert("No existe")</script>';
          echo "<script>location:href='../formularios/login.php'</script>";
     }

 ?>
