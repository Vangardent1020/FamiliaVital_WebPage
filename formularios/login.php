<!DOCTYPE html>
<html lang="en">

<head>
     <!-- meta's Etiquetas -->
     <?php require ("../librerias/librerias.php") ?>
     <!-- Etiqueta tittle -->
     <title>Administrador</title>
</head>

<body>
     <div class="container">
          <div class="centerLogin">
               <div class="row align-items-center">
                    <div class="col-12 col-lg-8">
                         <img src="../resources/img/logo/logo_2018.png" alt="" class="img-rounded center-block">
                    </div>
                    <div class="col-12 col-lg-4">
                         <div class="loginContainer">
                              <form class="loginForm" action="../app/loginAdmin.php" method="post">
                                   <div class="form-group">
                                        <label for="loginUser">Usuario</label>
                                        <input type="text" class="form-control" id="loginAdmin" name="loginAdmin" aria-describedby="loginAdmin" placeholder="Ingresa tu usuario">
                                   </div>
                                   <div class="form-group">
                                        <label for="loginPassword">Contraseña</label>
                                        <input type="password" class="form-control" id="loginPassword" name="loginPassword" aria-describedby="loginPassword" placeholder="Ingresa tu contraseña">
                                   </div>
                                   <div class="form-group component ">
                                        <div class="row justify-content-center">
                                             <button type="submit" class="btn btnCargue">Aceptar</button>
                                        </div>
                                   </div>
                              </form>
                         </div>
                    </div>
               </div>
          </div>
     </div>

</body>
</html>
