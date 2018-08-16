<!DOCTYPE html>
<html lang="en">

<head>
     <!-- meta's Etiquetas -->
     <?php require ("librerias/librerias.php") ?>
     <!-- Livechat -->
     <?php require ("librerias/livechat.php") ?>
     <!-- Etiqueta tittle -->
     <title>Home</title>
</head>

<body>

     <!-- loadPage -->
     <!-- <?php require ("dashboard/loadPage.php");  ?> -->
     <!-- Section header -->
     <?php require ("dashboard/header.php");  ?>
     <!-- section nav -->
     <?php require ("dashboard/navbar.php"); ?>
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
                         <div class="d-none d-sm-block">
                              <img class="d-block w-100" src="../resources/img/carruseles/carruselPrincipal/img_1.jpg" alt="First slide">
                         </div>
                         <div class=" d-block d-sm-none">
                              <img class="d-block w-100" src="../resources/img/carruseles/carruselPrincipal/img_1mobil.jpg" alt="First slide">
                         </div>
                    </div>
                    <div class="carousel-item">
                         <div class="d-none d-sm-block">
                              <img class="d-block w-100" src="../resources/img/carruseles/carruselPrincipal/img_1.jpg" alt="Second slide">
                         </div>
                         <div class=" d-block d-sm-none">
                              <img class="d-block w-100" src="../resources/img/carruseles/carruselPrincipal/img_1mobil.jpg" alt="Second slide">
                         </div>
                    </div>
                    <div class="carousel-item">
                         <div class="d-none d-sm-block">
                              <img class="d-block w-100" src="../resources/img/carruseles/carruselPrincipal/img_1.jpg" alt="Third slide">
                         </div>
                         <div class=" d-block d-sm-none">
                              <img class="d-block w-100" src="../resources/img/carruseles/carruselPrincipal/img_1mobil.jpg" alt="Third slide">
                         </div>
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
     </main>
     <!-- Section footer -->
     <?php require ("dashboard/footer.php"); ?>
     <?php require ("dashboard/copyright.php"); ?>
</body>
</html>
