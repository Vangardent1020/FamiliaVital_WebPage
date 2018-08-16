<?php
     include ("../app/conectarBD.php")

     //recuperacion de parametros
     $value = $_POST['nameofelementoid'];


     //insertar Datos
     $sql = "INSERT INTO MyGuests (firstname, lastname, email)
     VALUES ('$value', )";


     //transmitir
     if (mysqli_query($conn, $sql)) {
         echo "New record created successfully";
     } else {
         echo "Error: " . $sql . "<br>" . mysqli_error($conn);
     }

     //cerrar
     mysql_close($conn);

     // //return
     // header('Location: ../index.html');
 ?>
