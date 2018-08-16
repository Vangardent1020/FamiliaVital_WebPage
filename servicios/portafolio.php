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
               <h2 class="tittle">Portafolio de servicios</h2>
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
                              <a class="nav-link" href="../servicios/tarifaspreferenciales.php">Tarifas preferenciales</a>
                         </li>
                         <li class="nav-item subnarbarItem">
                              <a class="nav-link linkactive" href="../servicios/portafolio.php">Portafolio de servicios</a>
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
                              <img class="d-block sizeCarruse w-100 " src="../resources/img/carruseles/carruselPortafolio/bannerPrincipal.jpg" alt="First slide">
                         </div>
                         <div class="carousel-item">
                              <img class="d-block sizeCarrusel w-100" src="../resources/img/carruseles/carruselPortafolio/bannerPrincipal.jpg" alt="Second slide">
                         </div>
                         <div class="carousel-item">
                              <img class="d-block sizeCarrusel w-100" src="../resources/img/carruseles/carruselPortafolio/bannerPrincipal.jpg" alt="Third slide">
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
                    <div class="col-lg-3">
                         <div class="card component" >
                              <img class="card-img  img-card imgro img-rounded" src="../resources/img/portafolio/empresas/unecat_sander.jpg" alt="Card image cap">
                               <div class="card-body">
                                        <div class="row justify-content-center">
                                             <button type="button" class="btn btnCargue " data-toggle="modal" data-target="#modal1">Servicios que ofrecen</button>
                                        </div>
                               </div>
                         </div>
                    </div>
                    <div class="col-lg-3">
                         <div class="card component" >
                              <img class="card-img  img-card imgro img-rounded" src="../resources/img/portafolio/empresas/FVSF.jpg" alt="Card image cap">
                               <div class="card-body">
                                        <div class="row justify-content-center">
                                             <button type="button" class="btn btnCargue " data-toggle="modal" data-target="#modal2">Servicios que ofrecen</button>
                                        </div>
                               </div>
                         </div>
                    </div>
                    <div class="col-lg-3">
                         <div class="card component" >
                              <img class="card-img  img-card imgro img-rounded" src="../resources/img/portafolio/empresas/unusatips_bucaramanga.jpg" alt="Card image cap">
                               <div class="card-body">
                                        <div class="row justify-content-center">
                                             <button type="button" class="btn btnCargue " data-toggle="modal" data-target="#modal3">Servicios que ofrecen</button>
                                        </div>
                               </div>
                         </div>
                    </div>
                    <div class="col-lg-3">
                         <div class="card component" >
                              <img class="card-img  img-card imgro img-rounded" src="../resources/img/portafolio/empresas/projectionLife.jpg" alt="Card image cap">
                               <div class="card-body">
                                        <div class="row justify-content-center">
                                             <button type="button" class="btn btnCargue " data-toggle="modal" data-target="#modal4">Servicios que ofrecen</button>
                                        </div>
                               </div>
                         </div>
                    </div>
               </div>
               <div class="row justify-content-center component">
                    <h3 class="subtitle">Profesionales independientes</h3>
               </div>

               <div class="row justify-content-center component">
                    <div class="col-lg-3">
                         <div class="card component" >
                              <img class="card-img  img-card imgro img-rounded" src="../resources/img/portafolio/empresas/carlosalvarez.jpg" alt="Card image cap">
                               <div class="card-body">
                                        <div class="row justify-content-center">
                                             <button type="button" class="btn btnCargue " data-toggle="modal" data-target="#modal5">Servicios que ofrecen</button>
                                        </div>
                               </div>
                         </div>
                    </div>
                    <div class="col-lg-3">
                         <div class="card component" >
                              <img class="card-img  img-card imgro img-rounded" src="../resources/img/portafolio/empresas/victorquevedo.jpg" alt="Card image cap">
                               <div class="card-body">
                                        <div class="row justify-content-center">
                                             <button type="button" class="btn btnCargue " data-toggle="modal" data-target="#modal6">Servicios que ofrecen</button>
                                        </div>
                               </div>
                         </div>
                    </div>
                    <div class="col-lg-3">
                         <div class="card component" >
                              <img class="card-img  img-card imgro img-rounded" src="../resources/img/portafolio/empresas/adolfocorrales.jpg" alt="Card image cap">
                               <div class="card-body">
                                        <div class="row justify-content-center">
                                             <button type="button" class="btn btnCargue " data-toggle="modal" data-target="#modal7">Servicios que ofrecen</button>
                                        </div>
                               </div>
                         </div>
                    </div>
                    <div class="col-lg-3">
                         <div class="card component" >
                              <img class="card-img  img-card imgro img-rounded" src="../resources/img/portafolio/empresas/ivanfreire.jpg" alt="Card image cap">
                               <div class="card-body">
                                        <div class="row justify-content-center">
                                             <button type="button" class="btn btnCargue " data-toggle="modal" data-target="#modal8">Servicios que ofrecen</button>
                                        </div>
                               </div>
                         </div>
                    </div>
               </div>

               <div class="row justify-content-center component">
                    <div class="col-lg-3">
                         <div class="card component" >
                              <img class="card-img  img-card imgro img-rounded" src="../resources/img/portafolio/empresas/mariajimenez.jpg" alt="Card image cap">
                               <div class="card-body">
                                        <div class="row justify-content-center">
                                             <button type="button" class="btn btnCargue " data-toggle="modal" data-target="#modal9">Servicios que ofrecen</button>
                                        </div>
                               </div>
                         </div>
                    </div>
                    <div class="col-lg-3">
                         <div class="card component" >
                              <img class="card-img  img-card imgro img-rounded" src="../resources/img/portafolio/empresas/alexandravergel.jpg" alt="Card image cap">
                               <div class="card-body">
                                        <div class="row justify-content-center">
                                             <button type="button" class="btn btnCargue " data-toggle="modal" data-target="#modal10">Servicios que ofrecen</button>
                                        </div>
                               </div>
                         </div>
                    </div>
               </div>
          <!-- Modal -->
          <div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="Modallabel1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="Modallabel1">UNECAT SANDER</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                     <ul class="list-group">
                      <li class="list-group-item">Consulta de primera vez por especialista en demartologia</li>
                      <li class="list-group-item">Consulta de primera vez por especialista en otorrinolaringologia</li>
                      <li class="list-group-item">Consulta de control o de seguimiento por especialistaen endocrinologia</li>
                      <li class="list-group-item">Consulta de primera vez por especialistaen cirugia general</li>
                      <li class="list-group-item">Interconsulta por especialista en cirugia de cabeza y cuello</li>
                      <li class="list-group-item">Consulta de primera vez por especialista en cirugia de torax</li>
                    </ul>
                </div>
              </div>
            </div>
          </div>

          <div class="modal fade" id="modal2" tabindex="-1" role="dialog" aria-labelledby="Modallabel2" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="Modallabel2">FUNDACIÓN VER SIN FRONTERAS</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                     <ul class="list-group">
                      <li class="list-group-item">Consulta de primera vez por especialista en oftamologia</li>
                      <li class="list-group-item">Consulta de primera vez por medicina especializada de cornea y camara anterior</li>
                      <li class="list-group-item">Consulta de control por medicina especializada de cornea y camara anterior</li>
                      <li class="list-group-item">Consulta de primera vez por medician especializada de glaucoma</li>
                      <li class="list-group-item">Consulta de control por medicina especializadade glaucoma</li>
                      <li class="list-group-item">Consulta de primera vez or medicina especializada de plastia ocular</li>
                      <li class="list-group-item">Consulta de control por medicina especializada de plastia ocular</li>
                      <li class="list-group-item">Consulta de primera vez por medicina especializada de estrabismo</li>
                      <li class="list-group-item">Consulta de control por medicina especializada de estrabismo</li>
                      <li class="list-group-item">Consulta de primera vez por medicina especializada de oftamologia pediatrica</li>
                      <li class="list-group-item">Consulta de control por medicina especializada de oftamologia pediatrica</li>
                      <li class="list-group-item">Consulta de primera vez por medicina especializada de retina y vitreo</li>
                      <li class="list-group-item">Consulta de control por medicina especializada de retina y vitreo</li>
                      <li class="list-group-item">Consulta de primera vez por medicina especializada de neurooftamologia</li>
                      <li class="list-group-item">Consulta de control por medicina especializada de neurooftamologia</li>
                      <li class="list-group-item">Consulta de primera vez por medicina especializada de protesis ocular</li>
                      <li class="list-group-item">Consulta de control por medicina especializada de protesis ocular</li>
                    </ul>
                </div>
              </div>
            </div>
          </div>

          <div class="modal fade" id="modal3" tabindex="-1" role="dialog" aria-labelledby="Modallabel3" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="Modallabel3">UNESAT LTDA IPS</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                    <div class="accordion" id="accordionunesat">
                    <!-- bucaramanga -->
                      <div class="card">
                        <div class="card-header" id="bucaramanga">
                          <h5 class="mb-0">
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseBucaramanga" aria-expanded="true" aria-controls="collapseBucaramanga">
                              Bucaramanga
                            </button>
                          </h5>
                        </div>
                        <div id="collapseBucaramanga" class="collapse" aria-labelledby="bucaramanga" data-parent="#accordionunesat">
                          <div class="card-body">
                               <ul class="list-group">
                                     <li class="list-group-item">Consulta de primera vez por especialista en medicina interna</li>
                                     <li class="list-group-item">Consulta de primera vez por especialista en ortopedia y traumatología</li>
                                     <li class="list-group-item">Consulta de primera vez por especialista en pediatriía</li>
                                     <li class="list-group-item">Consulta de primera vez por otras especialidades de psicología</li>
                                     <li class="list-group-item">Consulta de primera vez por nutrición y dietetica</li>
                                     <li class="list-group-item">Consulta de primera vez por especialista en ginecología y obstetricia</li>
                                     <li class="list-group-item">Consulta de primera vez por medicina general</li>
                                     <li class="list-group-item">Consulta de primera vez por fonoaudiología</li>
                                     <li class="list-group-item">Consulta de primera vez por fisioterapia</li>
                                     <li class="list-group-item">Consulta de primera vez por terapia respiratoria</li>
                                     <li class="list-group-item">Consulta de primera vez por terapia ocupacional</li>
                                     <li class="list-group-item">Consulta de primera vez por psiquiatria</li>
                                     <li class="list-group-item">Consulta de primera vez por neurologiaria</li>
                                     <li class="list-group-item">Consulta de primera vez por fisiatria</li>
                                     <li class="list-group-item">Terapia ocupacional integral</li>
                                     <li class="list-group-item">Terapia respiratoria integral</li>
                                     <li class="list-group-item">Terapia física integral</li>
                                     <li class="list-group-item">Consulta de primera vez por neumologia</li>
                                     <li class="list-group-item">Atención domiciliaria paciente cronico sin ventilador</li>
                                     <li class="list-group-item">Toma de muestras de laboratorio presencial y a domicilio</li>
                              </ul>
                          </div>
                        </div>
                      </div>
                      <!-- Barrancabermeja -->
                      <div class="card">
                        <div class="card-header" id="Barrancabermeja">
                          <h5 class="mb-0">
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseBarrancabermeja" aria-expanded="true" aria-controls="collapseBarrancabermeja">
                              Barrancabermeja
                            </button>
                          </h5>
                        </div>
                        <div id="collapseBarrancabermeja" class="collapse" aria-labelledby="Barrancabermeja" data-parent="#accordionunesat">
                          <div class="card-body">
                               <ul class="list-group">
                                     <li class="list-group-item">Consulta de primera vez por especialista en medicina interna</li>
                                     <li class="list-group-item">Consulta de primera vez por especialista en ortopedia y traumatología</li>
                                     <li class="list-group-item">Consulta de primera vez por especialista en pediatriía</li>
                                     <li class="list-group-item">Consulta de primera vez por otras especialidades de psicología</li>
                                     <li class="list-group-item">Consulta de primera vez por nutrición y dietetica</li>
                                     <li class="list-group-item">Consulta de primera vez por optometria</li>
                                     <li class="list-group-item">Consulta de primera vez por medicina general</li>
                                     <li class="list-group-item">Toma de muestras de laboratorio presencial</li>
                                     <li class="list-group-item">Toma de muestras de laboratorio presencial</li>
                                     <li class="list-group-item">Consulta de primera vez por fonoaudiología</li>
                                     <li class="list-group-item">Consulta de primera vez por fisioterapia</li>
                                     <li class="list-group-item">Consulta de primera vez por terapia respiratoria</li>
                                     <li class="list-group-item">Consulta de primera vez por terapia ocupacional</li>
                                     <li class="list-group-item">Terapia ocupacional integral</li>
                                     <li class="list-group-item">Terapia respiratoria integral</li>
                              </ul>
                          </div>
                        </div>
                      </div>
                      <!-- Ocaña -->
                      <div class="card">
                        <div class="card-header" id="Ocaña">
                          <h5 class="mb-0">
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOcaña" aria-expanded="true" aria-controls="collapseOcaña">
                              Ocaña
                            </button>
                          </h5>
                        </div>
                        <div id="collapseOcaña" class="collapse" aria-labelledby="Ocaña" data-parent="#accordionunesat">
                          <div class="card-body">
                               <ul class="list-group">
                                     <li class="list-group-item">Consulta de primera vez por especialista en medicina interna</li>
                                     <li class="list-group-item">Consulta de primera vez por especialista en ortopedia y traumatología</li>
                                     <li class="list-group-item">Consulta de primera vez por especialista en pediatriía</li>
                                     <li class="list-group-item">Consulta de primera vez por otras especialidades de psicología</li>
                                     <li class="list-group-item">Consulta de primera vez por nutrición y dietetica</li>
                                     <li class="list-group-item">Consulta de primera vez por medicina general</li>
                                     <li class="list-group-item">Consulta de primera vez por fonoaudiología</li>
                                     <li class="list-group-item">Consulta de primera vez por fisioterapia</li>
                                     <li class="list-group-item">Consulta de primera vez por terapia respiratoria</li>
                                     <li class="list-group-item">Consulta de primera vez por terapia ocupacional</li>
                                     <li class="list-group-item">Terapia ocupacional integral</li>
                                     <li class="list-group-item">Terapia respiratoria integral</li>
                              </ul>
                          </div>
                        </div>
                      </div>
                      <!-- Aguachica -->
                      <div class="card">
                        <div class="card-header" id="Aguachica">
                          <h5 class="mb-0">
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseAguachica" aria-expanded="true" aria-controls="collapseAguachica">
                              Aguachica
                            </button>
                          </h5>
                        </div>
                        <div id="collapseAguachica" class="collapse" aria-labelledby="Aguachica" data-parent="#accordionunesat">
                          <div class="card-body">
                               <ul class="list-group">
                                     <li class="list-group-item">Consulta de primera vez por especialista en medicina interna</li>
                                     <li class="list-group-item">Consulta de primera vez por especialista en ortopedia y traumatología</li>
                                     <li class="list-group-item">Consulta de primera vez por especialista en pediatriía</li>
                                     <li class="list-group-item">Consulta de primera vez por otras especialidades de psicología</li>
                                     <li class="list-group-item">Consulta de primera vez por nutrición y dietetica</li>
                                     <li class="list-group-item">Consulta de primera vez por medicina general</li>
                                     <li class="list-group-item">Consulta de primera vez por fonoaudiología</li>
                                     <li class="list-group-item">Consulta de primera vez por fisioterapia</li>
                                     <li class="list-group-item">Consulta de primera vez por terapia respiratoria</li>
                                     <li class="list-group-item">Consulta de primera vez por terapia ocupacional</li>
                                     <li class="list-group-item">Terapia ocupacional integral</li>
                                     <li class="list-group-item">Terapia respiratoria integral</li>
                                     <li class="list-group-item">Toma de muestras de laboratorio presencial</li>
                              </ul>
                          </div>
                        </div>
                      </div>
                      <!-- Giron -->
                      <div class="card">
                        <div class="card-header" id="Giron">
                          <h5 class="mb-0">
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseGiron" aria-expanded="true" aria-controls="collapseGiron">
                              Giron
                            </button>
                          </h5>
                        </div>
                        <div id="collapseGiron" class="collapse" aria-labelledby="Giron" data-parent="#accordionunesat">
                          <div class="card-body">
                               <ul class="list-group">
                                     <li class="list-group-item">Consulta de primera vez por especialista en medicina interna</li>
                                     <li class="list-group-item">Consulta de primera vez por especialista en ortopedia y traumatología</li>
                                     <li class="list-group-item">Consulta de primera vez por especialista en pediatriía</li>
                                     <li class="list-group-item">Consulta de primera vez por otras especialidades de psicología</li>
                                     <li class="list-group-item">Consulta de primera vez por nutrición y dietetica</li>
                                     <li class="list-group-item">Consulta de primera vez por medicina general</li>
                                     <li class="list-group-item">Consulta de primera vez por odontologia</li>
                                     <li class="list-group-item">Consulta de primera vez por fisioterapia</li>
                                     <li class="list-group-item">Toma de muestras de laboratorio presencial y domiciliaria</li>
                                     <li class="list-group-item">Laboratorio clinico</li>
                              </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
              </div>
            </div>
          </div>

          <div class="modal fade" id="modal4" tabindex="-1" role="dialog" aria-labelledby="Modallabel4" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="Modallabel4">PROJECTION LIFE</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                     <ul class="list-group">
                      <li class="list-group-item">Enfermería</li>
                      <li class="list-group-item">Medicina general</li>
                      <li class="list-group-item">Medicina interna</li>
                      <li class="list-group-item">Nutrición y dietética</li>
                      <li class="list-group-item">Psicología</li>
                      <li class="list-group-item">Medicina del trabajo y medina labaral</li>
                      <li class="list-group-item">Transporte asistencial básico</li>
                      <li class="list-group-item">Terapia ocupacional</li>
                      <li class="list-group-item">Terapia respiratoria</li>
                      <li class="list-group-item">Fisioterapia</li>
                      <li class="list-group-item">Fonoaudiología y/o terapia del lenguaje</li>
                      <li class="list-group-item">Atención domiciliaria de paciente crónico sin ventilador</li>
                      <li class="list-group-item">Atención domiciliaria de paciente agudo</li>
                      <li class="list-group-item">Detención temprana alteraciones del desarrollo del joven (de 10 a 29 años)</li>
                      <li class="list-group-item">Detención temprana alteraciones en el adulto (mayor a 45 años)</li>
                    </ul>
                </div>
              </div>
            </div>
          </div>

          <div class="modal fade" id="modal5" tabindex="-1" role="dialog" aria-labelledby="Modallabel5" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="Modallabel5">Carlos Alvarez - Fisiatra</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                     <ul class="list-group">
                      <li class="list-group-item">Consulta por primera vez por fisiatria</li>
                      <li class="list-group-item">Consulta por control de fisiatria</li>
                      <li class="list-group-item">Electromiografia (por cada extremidad)</li>
                      <li class="list-group-item">Neurocondución (por cada extremidad)</li>
                      <li class="list-group-item">Electromiografia + Neuroconducción en 1 miembro</li>
                      <li class="list-group-item">Electromiografia + Neuroconducción en 2 miembro</li>
                      <li class="list-group-item">Electromiografia + Neuroconducción en 4 miembro</li>
                    </ul>
                </div>
              </div>
            </div>
          </div>

          <div class="modal fade" id="modal6" tabindex="-1" role="dialog" aria-labelledby="Modallabel6" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="Modallabel6">Victor Hugo Quevedo - Ginecologia y obstetricia</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                     <ul class="list-group">
                      <li class="list-group-item">Consulta por primera vez por ginecologia</li>
                      <li class="list-group-item">Consulta de control por ginecologia</li>
                      <li class="list-group-item">Ecografia obstetrica transvaginal</li>
                      <li class="list-group-item">Ecografia pelvica ginecologica transvaginal</li>
                      <li class="list-group-item">Ecografia con perfil biofisico</li>
                      <li class="list-group-item">Colposcopia+Biopsia</li>
                      <li class="list-group-item">Ecografia 4D</li>
                      <li class="list-group-item">Mamopastia</li>
                      <li class="list-group-item">Liceptomia</li>
                      <li class="list-group-item">Liposucción (Incluye 12 postquirurgicos, faja, medicamentos, poliza medica, medias)</li>
                      <li class="list-group-item">Labioplastia</li>
                      <li class="list-group-item">Vaginoplastia</li>
                    </ul>
                </div>
              </div>
            </div>
          </div>

          <div class="modal fade" id="modal7" tabindex="-1" role="dialog" aria-labelledby="Modallabel7" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="Modallabel7">Adolfo Corrales - Ginecologia y obstetricia</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                     <ul class="list-group">
                      <li class="list-group-item">Consulta por primera vez por ginecologia</li>
                      <li class="list-group-item">Consulta de control por ginecologia</li>
                      <li class="list-group-item">Ecografia obstetrica transvaginal</li>
                      <li class="list-group-item">Ecografia pelvica ginecologica transvaginal</li>
                      <li class="list-group-item">Ecografia de detalle anatomico</li>
                      <li class="list-group-item">Colposcopia+Biopsia</li>
                    </ul>
                </div>
              </div>
            </div>
          </div>

          <div class="modal fade" id="modal8" tabindex="-1" role="dialog" aria-labelledby="Modallabel8" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="Modallabel8">Ivan Freire - Neurocirujano</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                     <ul class="list-group">
                      <li class="list-group-item">Consulta por primera vez por Neurocirugia</li>
                    </ul>
                </div>
              </div>
            </div>
          </div>

          <div class="modal fade" id="modal9" tabindex="-1" role="dialog" aria-labelledby="Modallabel9" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="Modallabel9">Maria Lissete Jimenez Efres - Nutricionista</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                     <ul class="list-group">
                      <li class="list-group-item">Consulta por primera vez por nutrición</li>
                    </ul>
                </div>
              </div>
            </div>
          </div>

          <div class="modal fade" id="modal10" tabindex="-1" role="dialog" aria-labelledby="Modallabel10" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="Modallabel10">Alexandra Vergel Arenas - Pediatria</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                     <ul class="list-group">
                      <li class="list-group-item">Consulta por primera vez por pediatra</li>
                    </ul>
                </div>
              </div>
            </div>
          </div>


     </main>
     <!-- Section footer -->
     <?php require ("../dashboard/copyright.php") ?>
</body>

</html>
