<!DOCTYPE html>
<html lang="en">

<head>
     <!-- meta's Etiquetas -->
     <?php require ("../librerias/librerias.php") ?>
     <!-- Livechat -->
     <?php require ("../librerias/livechat.php") ?>
     <!-- Etiqueta tittle -->
     <title>Asesores</title>
</head>

<body>
     <!-- Section header -->
     <?php require ("../dashboard/header.php"); ?>
     <!-- section nav -->
     <?php require ("../dashboard/navbar.php"); ?>
     <!-- Section main -->
     <main>
          <aside>
               <div class="banner_1 d-none d-sm-none d-md-none d-lg-block">
                    <a href="https://api.whatsapp.com/send?phone=573007664989"><img src="../resources/img/varias/bannerChat2.jpg" alt="chatWhatsapp" class="rounded"></a>
               </div>
               <div class="banner_2 d-block d-sm-block d-md-block d-lg-none">
                    <a href="https://api.whatsapp.com/send?phone=573007664989"><img src="../resources/img/varias/bannerChatH2.jpg" alt="chatWhatsapp" class=""></a>
               </div>
          </aside>
          <div class="container">
               <h2 class="tittle">Asesores</h2>
          </div>
          <div class="container d-none d-sm-none d-md-block">
               <!-- section carrusel -->
               <div id="carouselInicio" class="carousel slide" data-ride="carousel">
                    <!-- indicators -->
                    <ol class="carousel-indicators">
                         <li data-target="#carouselInicio" data-slide-to="0" class="active"></li>
                         <li data-target="#carouselInicio" data-slide-to="1"></li>
                         <li data-target="#carouselInicio" data-slide-to="2"></li>
                    </ol>
                    <!-- The slideahow-->
                    <div class="carousel-inner">
                         <div class="carousel-item active">
                              <img class="d-block sizeCarruse w-100 " src="../resources/img/carruseles/carruselAsesores/img_1.jpg" alt="First slide">
                         </div>
                         <div class="carousel-item">
                              <img class="d-block sizeCarrusel w-100" src="../resources/img/carruseles/carruselAsesores/img_1.jpg" alt="Second slide">
                         </div>
                         <div class="carousel-item">
                              <img class="d-block sizeCarrusel w-100" src="../resources/img/carruseles/carruselAsesores/img_1.jpg" alt="Third slide">
                         </div>
                    </div>
                    <!-- Left and right controls -->
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                      </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                      </a>
               </div>
          </div>
          <div class="container-fluid">
               <div class="row justify-content-center component">
                    <div class="col-12 col-sm-6">
                         <h2>Valida aqui a tu asesor:</h2>
                         <form action="../app/validarAsesor.php" method="post">
                              <div class="backgroundContainer">
                                   <div class="form-group row justify-content-cente ">
                                        <input class="form-control" id="validId" type="text" name="validId" placeholder="Id del asesor">
                                   </div>
                                   <div class="form-group  row justify-content-center">
                                        <input type="submit" class="btn btnCargue" name="submit" value="Validar">
                                   </div>
                              </div>
                         </form>
                    </div>
                    <div class="col-12 col-sm-6">
                         <h2>Diligencia el formulario de afiliación</h2>
                         <form action="../app/loginAsesor.php"method="post">
                              <div class="backgroundContainer">
                                   <div class="form-group row justify-content-center ">
                                        <input class="form-control" id="idAsesor" type="text" name="idAsesor" placeholder="Id del asesor">
                                   </div>
                                   <div class="form-group row justify-content-center ">
                                        <input class="form-control" id="idPassword" type="text" name="idPassword" placeholder="Contraseña">
                                   </div>
                                   <div class="form-group  row justify-content-center">
                                        <input type="submit" class="btn btnCargue" name="submit" value="Ingresar">
                                   </div>
                              </div>
                         </form>
                    </div>
               </div>
          </div>
     </main>
     <!-- Section footer -->
     <?php require ("../dashboard/footer.php") ?>
     <?php require ("../dashboard/copyright.php") ?>
</body>

</html>
