<!DOCTYPE html>
<html lang="en">

<head>
     <!-- meta's Etiquetas -->
     <?php require ("../librerias/librerias.php") ?>
     <!-- Livechat -->
     <?php require ("../librerias/livechat.php") ?>
     <!-- Etiqueta tittle -->
     <title>Contacto</title>
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
               <h2 class="tittle">Contactanos</h2>
          </div>
          <div class="container">
               <div class="row">
                    <div class="col-12 col-lg-6 mb-3 order-2 order-lg-1 ">
                         <div class="embed-responsive embed-responsive-1by1">
                              <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d416.18526297950444!2d-73.16920252141662!3d7.074433075893737!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e683e8f6c7b4d35%3A0x44347a0730a2349e!2sCra.+26+%2344-13%2C+Gir%C3%B3n%2C+Santander!5e0!3m2!1ses-419!2sco!4v1530834567140"
                              frameborder="1" style="border:0" allowfullscreen>
                              </iframe>
                         </div>
                    </div>
                    <div class="col-12 col-lg-6  order-1 order-lg-2">
                         <form>
                              <div class="form-group">
                                   <label class="labelPre" for="campoName">Nombre y apellidos:</label>
                                   <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                             <span class="input-group-text backgroundPre" id="basicCampoName"><i class="material-icons">face</i></span>
                                        </div>
                                        <input id="campoName" name="campoName" class="form-control" type="text" placeholder="Escribe tu nombre completo" aria-label="campoName" aria-describedby="basicCampoName">
                                   </div>
                              </div>
                              <div class="form-group">
                                   <label class="labelPre" for="campoName">Correo electrónico:</label>
                                   <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                             <span class="input-group-text backgroundPre" id="basicCampoEmail"><i class="material-icons">email</i></span>
                                        </div>
                                        <input id="campoEmail" name="campoEmail" class="form-control" type="email" placeholder="Escribe tu correo" aria-label="campoEmail" aria-describedby="basicCampoEmail">
                                   </div>
                              </div>
                              <div class="form-group">
                                   <label class="labelPre" for="campoName">Teléfono:</label>
                                   <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                             <span class="input-group-text backgroundPre" id="basicCampoPhone"><i class="material-icons">phone</i></span>
                                        </div>
                                        <input id="CampoPhone" name="CampoPhone" class="form-control" type="tel" placeholder="Escribe tu nombre completo" aria-label="CampoPhone" aria-describedby="basicCampoPhone" maxlength="10">
                                   </div>
                              </div>
                              <div class="form-group pt-2">
                                   <textarea id="basicTextarea" class="form-control" rows="7"></textarea>
                              </div>
                              <div class="form-group">
                                   <button type="submit" class="btn btn-lg btn-block btnSend ">Enviar</button>
                              </div>
                         </form>
                    </div>
          </div>
     </main>
     <!-- Section footer -->
     <?php require ("../dashboard/footer.php") ?>
     <?php require ("../dashboard/copyright.php") ?>
</body>
</html>
