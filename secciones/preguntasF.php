<!DOCTYPE html>
<html lang="en">

<head>
     <!-- meta's Etiquetas -->
     <?php require ("../librerias/librerias.php") ?>
     <!-- Livechat -->
     <?php require ("../librerias/livechat.php") ?>
     <!-- Etiqueta tittle -->
     <title>Preguntas Frecuentes</title>
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
               <h2 class="tittle">Preguntas frecuentes</h2>
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
                              <img class="d-block sizeCarrusel w-100" src="../resources/img/carruseles/carruselPreguntas/img_1.jpg" alt="First slide">
                         </div>
                         <div class="carousel-item">
                              <img class="d-block sizeCarrusel w-100" src="../resources/img/carruseles/carruselPreguntas/img_1.jpg" alt="Second slide">
                         </div>
                         <div class="carousel-item">
                              <img class="d-block sizeCarrusel w-100" src="../resources/img/carruseles/carruselPreguntas/img_1.jpg" alt="Third slide">
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
          <div class="container">
               <div class="component">
                    <div class="row">
                         <div class="col-12 col-md-6">
                              <div class="accordion" id="accordion1">
                                   <div class="card">
                                        <div class="card-header" id="q1">
                                             <h5 class="mb-0">
                                                  <button class="btn btn-link link collapsed" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                       ¿Cómo adquiero la membresía de club familia vital?
                                                  </button>
                                             </h5>
                                        </div>
                                        <div id="collapseOne" class="collapse " aria-labelledby="q1" data-parent="#accordion1">
                                             <div class="card-body text">
                                                  Puedes ponerte en contacto con nosotros por medio de nuestras líneas de atención al cliente 300-7664989, 300-7664633, 301-3887759 o (7) 6466001, a los correos gerencia@clubfamiliavital.com, coordinacionredservicios@clubfamiliavital.com o coordinacióncomercial@clubfamiliavital.com.
                                                  <br/><br/> También podrás diligenciar el siguiente formulario de<a href="../formularios/FormularioInscripcion.php"> inscripción </a>y un asesor se comunicará contigo.
                                             </div>
                                        </div>
                                   </div>
                                   <div class="card">
                                        <div class="card-header" id="q2">
                                             <h5 class="mb-0">
                                                  <button class="btn btn-link link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                       ¿Qué beneficios adquiero con mi membresía del club familia vital?
                                                  </button>
                                             </h5>
                                        </div>
                                        <div id="collapseTwo" class="collapse" aria-labelledby="q2" data-parent="#accordion1">
                                             <div class="card-body text">
                                                  Dentro de tu membresía tendrás acceso a servicios de salud contando con un acompañamiento y asesoría médica, psicológica y veterinaria virtual, además tendrás servicios preferenciales con nuestros asociados.
                                                  <br/><br/> Contaras con canales de chat virtual, call center y redes sociales con atención personalizada por profesionales idóneos, quienes realizaran auditoria, evolución y seguimiento a tu proceso de
                                                  atención.
                                             </div>
                                        </div>
                                   </div>
                                   <div class="card">
                                        <div class="card-header" id="q3">
                                             <h5 class="mb-0">
                                                  <button class="btn btn-link link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                       ¿Cuántas personas puedo inscribir?
                                                  </button>
                                             </h5>
                                        </div>
                                        <div id="collapseThree" class="collapse" aria-labelledby="q3" data-parent="#accordion1">
                                             <div class="card-body text">
                                                  Nuestro modelo de inscripción se conforma por núcleos de uno (1) a diez (10) personas incluyendo al suscriptor principal, estas pueden o no tener un vínculo familiar, además de máximo dos (2) mascotas domésticas, cada integrante tiene acceso a los beneficios
                                                  en el servicio que requiera, ya sea en salud, veterinaria, educación, asesoría legal, turismo, restaurantes, cuidado del hogar, adquisición de productos, entre otros, todos estos a tarifas preferenciales.
                                             </div>
                                        </div>
                                   </div>
                              </div>
                         </div>
                         <div class="col-12 col-md-6">
                              <div class="accordion" id="accordion2">
                                   <div class="card">
                                        <div class="card-header" id="q4">
                                             <h5 class="mb-0">
                                                  <button class="btn btn-link link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                                                       ¿En qué ciudades del país puedo adquirir los servicios?
                                                  </button>
                                             </h5>
                                        </div>
                                        <div id="collapseFour" class="collapse" aria-labelledby="q4" data-parent="#accordion2">
                                             <div class="card-body text">
                                                  Los beneficios de familia vital pueden ser disfrutados en todas nuestras sedes a nivel nacional así no sea la ciudad en donde se realizó la suscripción.
                                             </div>
                                        </div>
                                   </div>
                                   <div class="card">
                                        <div class="card-header" id="q5">
                                             <h5 class="mb-0">
                                                  <button class="btn btn-link link collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                                       ¿cómo puedo vincularme al club como independiente, persona natural o jurídica?
                                                  </button>
                                             </h5>
                                        </div>
                                        <div id="collapseFive" class="collapse" aria-labelledby="q5" data-parent="#accordion2">
                                             <div class="card-body text">
                                                  Si eres una profesional dinámico y te gusta el trabajo en equipo, eres un candidato perfecto para conformar nuestra gran familia, accediendo al siguiente<a href="../secciones/trabaje.php"> Enlace </a>podrás cargar tus documentos, estos serán analizados por nuestro equipo y recibirás una pronta respuesta.
                                             </div>
                                        </div>
                                   </div>
                                   <div class="card">
                                        <div class="card-header" id="q6">
                                             <h5 class="mb-0">
                                                  <button class="btn btn-link link collapsed" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                                       ¿Cómo puedo vincularme como empresa a la lista de aliados a familia vital?
                                                  </button>
                                             </h5>
                                        </div>
                                        <div id="collapseSix" class="collapse" aria-labelledby="q6" data-parent="#accordion2">
                                             <div class="card-body text">
                                                  Si quieres que tu empresa sea parte de un nuevo club de beneficios preferenciales para todos, solo necesitas enviarnos Cámara de comercio, Rut de la empresa, copia de cédula del representante legal y si eres empresa de salud copia de certificado de habilitación,
                                                  en el siguiente<a href="../secciones/trabaje.php"> Enlace </a>podrás cargar tus documentos y nuestro equipo te responderá prontamente.
                                             </div>
                                        </div>
                                   </div>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
     </main>
     <!-- Section footer -->
     <?php require ("../dashboard/footer.php") ?>
     <?php require ("../dashboard/copyright.php") ?>
</body>
</html>
