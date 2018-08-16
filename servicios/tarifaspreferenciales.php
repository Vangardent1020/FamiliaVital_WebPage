<!DOCTYPE html>
<html lang="en">

<head>
     <!-- meta's Etiquetas -->
     <?php require ("../librerias/librerias.php") ?>
     <!-- Livechat -->
     <?php require ("../librerias/livechat.php") ?>
     <!-- Etiqueta tittle -->
     <title>Portafolio de servicios</title>
</head>

<body>
     <!-- Section header -->
     <?php require ("../dashboard/header.php"); ?>
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
          <div class="container-fluid">
               <h2 class="tittle">Tarifas preferenciales</h2>
          </div>
          <div class="container">
               <nav class="navbar navbar-expand-lg subnarbar ">
                    <ul class="navbar-nav mr-auto subnavarcenter">
                         <li class="nav-item subnarbarItem ">
                              <a class="nav-link" href="#">Empresas <span class="sr-only">(current)</span></a>
                         </li>
                         <li class="nav-item subnarbarItem">
                              <a class="nav-link" href="#">Afiliados</a>
                         </li>
                         <li class="nav-item subnarbarItem">
                              <a class="nav-link linkactive" href="../servicios/tarifaspreferenciales.php">Tarifas preferenciales</a>
                         </li>
                         <li class="nav-item subnarbarItem">
                              <a class="nav-link " href="../servicios/portafolio.php">Portafolio de servicios</a>
                         </li>
                    </ul>
               </nav>
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
                              <img class="d-block sizeCarruse w-100 " src="../resources/img/carruseles/carruselTarifas/bannerPrincipal.jpg" alt="First slide">
                         </div>
                         <div class="carousel-item">
                              <img class="d-block sizeCarrusel w-100" src="../resources/img/carruseles/carruselTarifas/bannerPrincipal.jpg" alt="Second slide">
                         </div>
                         <div class="carousel-item">
                              <img class="d-block sizeCarrusel w-100" src="../resources/img/carruseles/carruselTarifas/bannerPrincipal.jpg" alt="Third slide">
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
                    <div class="col-lg-6">
                         <div class="card component" >
                              <div class="card-body">
                                   <div class="row">
                                     <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                          <img class="card-img  img-card imgro img-rounded" src="../resources/img/portafolio/empresas/SanPedro.jpg" alt="Card image cap">
                                     </div>
                                     <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                         <p class="titletarifas"align="center"><strong>10% de descuento en</strong></p>
                                         <p class="subtitletarifas"align="center">Todos los servicios funebres a nivel nacional</p>
                                     </div>
                                   </div>
                               </div>
                         </div>
                    </div>
                    <div class="col-lg-6">
                         <div class="card component" >
                              <div class="card-body">
                                   <div class="row">
                                     <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                          <img class="card-img  img-card imgro img-rounded" src="../resources/img/portafolio/empresas/UNAD.jpg" alt="Card image cap">
                                     </div>
                                     <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                         <p class="titletarifas"align="center"><strong>15% de descuento en</strong></p>
                                         <p class="subtitletarifas"align="center">Todos la oferta educativa a nivel nacional</p>
                                     </div>
                                   </div>
                               </div>
                         </div>
                    </div>
               </div>
               <div class="row justify-content-center component">
                    <div class="col-lg-6">
                         <div class="card component" >
                              <div class="card-body">
                                   <div class="row">
                                     <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                          <img class="card-img  img-card imgro img-rounded" src="../resources/img/portafolio/empresas/candog.jpg" alt="Card image cap">
                                     </div>
                                     <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                         <p class="titletarifas"align="center"><strong>10% de descuento en</strong></p>
                                         <p class="subtitletarifas"align="center">Todos los procedimientos veterinarios</p>
                                     </div>
                                   </div>
                               </div>
                         </div>
                    </div>
                    <div class="col-lg-6">
                         <div class="card component" >
                              <div class="card-body">
                                   <div class="row">
                                     <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                          <img class="card-img  img-card imgro img-rounded" src="../resources/img/portafolio/empresas/imnpactoAnimal.jpg" alt="Card image cap">
                                     </div>
                                     <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                          <p class="titletarifas"align="center"><strong>10% de descuento en</strong></p>
                                         <p class="subtitletarifas"align="center">Todos los procedimientos veterinarios</p>
                                     </div>
                                   </div>
                               </div>
                         </div>
                    </div>
               </div>
               <div class="row justify-content-center component">
                    <div class="col-lg-6">
                         <div class="card component" >
                              <div class="card-body">
                                   <div class="row">
                                     <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                          <img class="card-img  img-card imgro img-rounded" src="../resources/img/portafolio/empresas/caras.jpg" alt="Card image cap">
                                     </div>
                                     <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                         <p class="titletarifas"align="center"><strong>10% de descuento en</strong></p>
                                         <p class="subtitletarifas"align="center">Procedimientos de estetica oral</p>
                                     </div>
                                   </div>
                               </div>
                         </div>
                    </div>
                    <div class="col-lg-6">
                         <div class="card component" >
                              <div class="card-body">
                                   <div class="row">
                                     <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                          <img class="card-img  img-card imgro img-rounded" src="../resources/img/portafolio/empresas/pinkLaser.jpg" alt="Card image cap">
                                     </div>
                                     <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                         <p class="titletarifas"align="center"><strong>10% de descuento en</strong></p>
                                         <p class="subtitletarifas"align="center">todos los procedimientos</p>
                                     </div>
                                   </div>
                               </div>
                         </div>
                    </div>
               </div>
               <div class="row justify-content-center component">
                    <div class="col-lg-6">
                         <div class="card component" >
                              <div class="card-body">
                                   <div class="row">
                                     <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                          <img class="card-img  img-card imgro img-rounded" src="../resources/img/portafolio/empresas/novatech.jpg" alt="Card image cap">
                                     </div>
                                     <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                         <p class="titletarifas"align="center"><strong>10% de descuento en</strong></p>
                                         <p class="subtitletarifas"align="center">Todos los servicios de mantenimiento y creación de paginas web</p>
                                     </div>
                                   </div>
                               </div>
                         </div>
                    </div>
                    <div class="col-lg-6">
                         <div class="card component" >
                              <div class="card-body">
                                   <div class="row">
                                     <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                          <img class="card-img  img-card imgro img-rounded" src="../resources/img/portafolio/empresas/CID.jpg" alt="Card image cap">
                                     </div>
                                     <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                         <p class="titletarifas"align="center"><strong>Tarifas preferenciales en</strong></p>
                                         <p class="subtitletarifas"align="center">Toma y procesamiento de muestras clinicas</p>
                                     </div>
                                   </div>
                               </div>
                         </div>
                    </div>
               </div>
     </main>
     <!-- Section footer -->
     <?php require ("../dashboard/copyright.php") ?>
</body>

</html>
