<nav class="navbar sticky-top navbar-expand-lg bg-blue ">
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"><i class="material-icons icoStyle">menu</i></span>
     </button>
     <div class="search d-inline d-sm-inline d-md-inline d-lg-none">
          <div class="input-group">
               <div class="input-group-prepend">
                    <button class="btn btn-search" type="submit"><i class="material-icons iconsSearch">search</i></button>
               </div>
               <input type="search" class="form-control inputSearch" placeholder="¿Qué buscas?" aria-label="Search" aria-describedby="basic-addon1">
          </div>
     </div>
     <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav" align="center">
               <li class="nav-item itemNavPrincipal">
                    <a class="nav-link active " href="../index.php"><h1>Home</h1><span class="sr-only">(current)</span></a>
               </li>
               <li class="nav-item itemNavPrincipal">
                    <a class="nav-link " href="../secciones/quienesSomos.php"><h1>Quienes somos</h1></a>
               </li>
               <li class="nav-item itemNavPrincipal">
                    <a class="nav-link" href="../secciones/servicios.php"><h1>Servicios</h1></a>
               </li>
               <li class="nav-item itemNavPrincipal">
                    <a class="nav-link" href="../secciones/asesores.php"><h1>Asesores</h1></a>
               </li>
               <li class="nav-item itemNavPrincipal">
                    <a class="nav-link " href="../secciones/preguntasF.php"><h1>Preguntas frecuentes</h1></a>
               </li>
               <li class="nav-item itemNavPrincipal">
                    <a class="nav-link " href="../secciones/trabaje.php"  aria-disabled="true"><h1>Trabaje con nosotros</h1></a>
                    <!-- <a class="nav-link " href="../formularios/FormularioInscripcion.php"  aria-disabled="true"><h1>FormularioInscripcion</h1></a> -->
               </li>
               <li class="nav-item itemNavPrincipal">
                    <a class="nav-link " href="../secciones/contacto.php"><h1>Contacto</h1></a>
               </li>
               <div class="dropdown-divider"></div>
               <li class="nav-item itemNavPrincipal d-inline d-sm-inline d-md-inline d-lg-none">
                    <a class="nav-link " href="#"><h1>Login</h1></a>
               </li>
          </ul>
          <div class="search d-none d-sm-none d-md-none d-lg-block ">
               <div class="input-group">
                    <div class="input-group-prepend">
                         <button class="btn btn-search" type="submit"><i class="material-icons">search</i></button>
                    </div>
                    <input type="search" class="form-control" placeholder="¿Qué buscas?" aria-label="Search" aria-describedby="basic-addon1">
               </div>
          </div>
          <!-- Boton login -->
          <div class="login d-none d-sm-none d-md-none d-lg-block">
               <button type="button" class="btn btn-login" data-toggle="modal" data-target="#modalLogin"><i class="material-icons">account_circle</i></button>
          </div>
     </div>
</nav>
<!-- Modal  login-->
<div class="modal fade" id="modalLogin" tabindex="-1" role="dialog" aria-labelledby="modalLogin" aria-hidden="true">
 <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body">
           <div>
                <form class="loginForm" action="../app/validarUser.php" method="post">
                     <div class="form-group">
                          <label for="loginUser">Usuario</label>
                          <input type="text" class="form-control" id="loginUser" name="loginUser" aria-describedby="loginUser" placeholder="Ingresa tu usuario">
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
