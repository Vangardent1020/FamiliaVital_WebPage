<?php
//recuperacion de parametros
$id = $_POST['id'];
$nombre = $_POST['Name'];
$apellido = $_POST['LastName'];
$tipodoc = $_POST['TipoDoc'];
$doc = $_POST['Doc'];
$fecha = $_POST['DateBirthday'];
$lugar = $_POST['PlaceBorn'];
$genero = $_POST['Genero'];
$dept = $_POST['Departamento'];
$ciudad = $_POST['Ciudad'];
$direccion = $_POST['Direction'];
$fijo = $_POST['LocalPhone'];
$Cel = $_POST['CellPhone'];
$correo = $_POST['Email'];

//parametros de conxion
$puerto = "	mysql.hostinger.co";
$usuario = "u871898049_ancc";
$contraseña = "familiavital2018";
$dbname ="u871898049_user";
$conexion = new mysqli($puerto, $usuario, $contraseña, $dbname );

// Check connection
if ($conexion->connect_error) {
    die("Connection fallida: " . $conexion->connect_error);
}

//insertar Datos
$sql = "INSERT INTO datos(id,Name, LastName, TipoDoc, Doc, DateBirthday, PlaceBorn, Genero, Departamento, Ciudad, Direction, LocalPhone, CellPhone, Email)
values ('$id','$nombre', '$apellido', '$tipodoc', '$doc', '$fecha', '$lugar', '$genero', '$dept', '$ciudad', '$direccion', '$fijo', '$Cel', '$correo')";

//transmitir
$conexion ->query($sql);

//cerrar
$conexion -> close();

//return
header('Location: ../index.html');
 ?>
