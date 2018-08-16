<?php

function Conectar(){
  //parametros de conxion
  $puerto = "mysql.hostinger.co";
  $usuario = "u871898049_root";
  $contraseña = "familiavital2018";
  $dbname ="u871898049_divip";
  $con = new mysqli($puerto, $usuario, $contraseña, $dbname );

  // Check connection
  if ($con->connect_error) {
      die("Connection fallida: " . $con->connect_error);
  }

  return $con;
}

?>
