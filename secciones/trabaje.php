<!DOCTYPE html>
<html lang="en">

<head>
     <!-- meta's Etiquetas -->
     <?php require ("../librerias/librerias.php") ?>
     <!-- Livechat -->
     <?php require ("../librerias/livechat.php") ?>
     <!-- Etiqueta tittle -->
     <title>Trabaje con nosotros</title>
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
          <section>
               <div class="container">
                    <h2 class="tittle">Trabaja con nosotros</h2>
               </div>
               <div class="container">
                    <div id="trabaje">
                         <div class=" component">
                              <div class="col-12">
                                   <h2>haz parte como indipendiente, persona natural o jurídica</h2>
                                   <div class="row  component ">
                                        <div class="col-lg-8 d-none d-sm-none d-md-none d-lg-block ">
                                             <img src="../resources/img/equipo/completo.png" class="rounded mx-auto d-block" alt="Img/trabaje" width="100%">
                                        </div>
                                        <div class="col-12 col-md-12 col-lg-4">
                                             <div class="listaJob">
                                                  <ul class="list-group list-group-flush">
                                                       <li class="listaJob">Tarjeta profesional</li>
                                                       <li class="listaJob">Hoja de vida actualizada</li>
                                                       <li class="listaJob">Soportes de experiencia</li>
                                                  </ul>
                                                  <form action="" method="post" enctype="multipart/form-data" target="_blank">
                                                       <div class="form-group form-cargue">
                                                            <label for="addDocument">Adiciona tus documentos en formato PDF y comprimidos en un ZIP</label>
                                                            <div class="input-group mb-3">
                                                                   <div class="custom-file">
                                                                          <input type="file" class="custom-file-input" id="addDocument1" aria-describedby="addDocument1" accept="application/zip" lang="es">
                                                                          <label class="custom-file-label" for="addDocument1">Elige el archivo</label>
                                                                   </div>
                                                            </div>
                                                       </div>
                                                       <div class="form-group  row justify-content-center">
                                                            <input type="submit" class="btn btnCargue" name="submit" value="Enviar documentos">
                                                       </div>
                                                  </form>
                                             </div>
                                        </div>
                                   </div>
                              </div>
                         </div>
                         <div class="component">
                              <div class="col-12">
                                   <h2>Vincula tu empresa a la lista de afiliados</h2>
                                   <div class="row  component">
                                        <div class="col-12 col-md-12 col-lg-4">
                                             <div class="listaJob">
                                                  <ul class="list-group list-group-flush">
                                                       <li class="listaJob">Cámara de comercio</li>
                                                       <li class="listaJob">Rut de la empresa</li>
                                                       <li class="listaJob">Copia de la cédula del representante legal</li>
                                                       <p><strong>Si eres empresa de salud</strong></p>
                                                       <li class="listaJob">Copia de certificado de habilitación</li>
                                                  </ul>
                                                  <form action="" method="post" enctype="multipart/form-data" target="_blank">
                                                       <div class="form-group form-cargue">
                                                            <label for="addDocument">Adiciona tus documentos en formato PDF y comprimidos en un ZIP</label>
                                                            <div class="input-group mb-3">
                                                                   <div class="custom-file">
                                                                          <input type="file" class="custom-file-input" id="addDocument2" aria-describedby="addDocument2" accept="application/zip" lang="es">
                                                                          <label class="custom-file-label" for="addDocument2">Elige el archivo</label>
                                                                   </div>
                                                            </div>
                                                       </div>
                                                       <div class="form-group  row justify-content-center">
                                                            <input type="submit" class="btn btnCargue" name="submit" value="Enviar documentos">
                                                       </div>
                                                  </form>
                                             </div>
                                        </div>
                                        <div class="col-lg-8 d-none d-sm-none d-md-none d-lg-block  ">
                                             <img src="../resources/img/equipo/completoempresa.png" class="rounded mx-auto d-block" alt="Img/trabaje" width="100%">
                                        </div>
                                   </div>
                              </div>
                         </div>
                         </div>
                    </div>
               </div>
          </section>
     </main>
     <!-- Section footer -->
     <?php require ("../dashboard/footer.php") ?>
     <?php require ("../dashboard/copyright.php") ?>
</body>

</html>
