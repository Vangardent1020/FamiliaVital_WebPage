<!DOCTYPE html>
<html lang="en">

<head>
     <!-- meta's Etiquetas -->
     <?php require ("../librerias/librerias.php") ?>
     <!-- Etiqueta tittle -->
     <title>Home</title>
</head>

<body>
     <!-- Section header -->
     <?php require ("../dashboard/header.php");  ?>
     <!-- Section main -->
     <main>
          <div class="container">
              <h1 class="tittle text-center">Suscripción de membresia Club Familia Vital</h1>
              <form action="../app/guardar.php" method="post">
                <div class="row">
                  <div class="col-sm-8">
                    <p>El diligenciamiento del formulario debe ser en mayusculas, recuerde ingresar el numero de membresia del afiliado principal.</p>
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label for="id">Código Núcleo</label>
                      <input class="form-control" type="text" name="id" id="id" placeholder="00000000">
                    </div>
                  </div>
                </div>
                <!-- afiliado1 -->
                <h3 class="subtitleform">Afiliado principal</h3>
                <div class="form-row">
                  <div class="col-12 col-sm-6">
                    <div class="form-group">
                      <label for="nombres">Nombres completos</label>
                      <input type="text" class="form-control" name="Name" id="Name" placeholder="Escriba los nombres del afiliado">
                    </div>
                  </div>
                  <div class="col-12 col-sm-6">
                    <div class="form-group">
                      <label for="apellidos">Apellidos completos</label>
                      <input type="text" class="form-control" name="LastName" id="LastName" placeholder="Escriba los apellidos del afiliado">
                    </div>
                  </div>
                </div>
                <div class="form-row">
                  <div class="col-4- col-sm-4">
                    <div class="form-group">
                      <label for="tipo-documento">Tipo de documento</label>
                      <select class="custom-select" name="TipoDoc" id="TipoDoc">
                            <option selected>CC</option>
                            <option >CE</option>
                            <option >RC</option>
                            <option >TI</option>
                     </select>
                    </div>
                  </div>
                  <div class="col-8 col-sm-8">
                    <div class="form-group">
                      <label for="numero-documento">Número de documento</label>
                      <input type="tel" class="form-control" name="Doc" maxlength="10" id="Doc" placeholder="Escriba el numero de documento del afiliado sin puntos">
                    </div>
                  </div>
                </div>
                <div class="form-row">
                  <div class="col-6 col-sm-3">
                    <div class="form-group">
                      <label for="fecha-nacimiento">Fecha de nacimiento</label>
                      <input type="date" class="form-control" name="DateBirthday" id="DateBirthday">
                    </div>
                  </div>
                  <div class="col-6 col-sm-6">
                    <div class="form-group">
                      <label for="lugar-nacimiento">Lugar de nacimiento</label>
                      <input type="text" class="form-control" name="PlaceBorn" id="PlaceBorn" placeholder="Escriba el lugar de nacimiento del afiliado">
                    </div>
                  </div>
                  <div class="col-12 col-sm-3">
                    <div class="form-group">
                      <label for="genero">Genero</label>
                      <select class="custom-select" name="Genero" id="Genero">
                         <option value="MASCULINO" >MASCULINO</option>
                         <option value="FEMENINO">FEMENINO</option>
                  </select>
                    </div>
                  </div>
                </div>
                <div class="form-row">
                     <div class="col-sm-6">
                         <div class="form-group">
                              <label for="direccion">Dirección de correspondencia</label>
                              <input type="text" class="form-control" name="Direction" id="Direction" placeholder="KR 155 # 78B -48">
                         </div>
                    </div>
                    <div class="col-sm-3">
                         <div class="form-group">
                                <label for="ciudad">Ciudad</label>
                                 <input type="text" class="form-control" name="Ciudad" id="Ciudad" placeholder="Ciudad de residencia">
                         </div>
                    </div>
                    <div class="col-sm-3">
                         <div class="form-group">
                              <label for="departamento">Departamento</label>
                              <input type="text" class="form-control" name="Departamento" id="Departamento" placeholder="Departamento de residencia">
                         </div>
                    </div>
                </div>
                <div class="form-row">
                  <div class="col-sm">
                    <div class="form-group">
                      <label for="telefono">Numero telefónico</label>
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                         <span class="input-group-text" id="basic-addon1"><i class="material-icons">phone</i></span>
                        </div>
                        <input type="tel" maxlength="7" class="form-control" placeholder="Teléfono fijo" name="LocalPhone" id="LocalPhone" aria-label="telefono" aria-describedby="basic-addon1">
                      </div>
                    </div>
                  </div>
                  <div class="col-sm">
                    <div class="form-group">
                      <label for="telefonoCel">Numero de teléfono celular</label>
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                         <span class="input-group-text" id="basic-addon1"><i class="material-icons">smartphone</i></span>
                        </div>
                        <input type="tel" maxlength="10 "class="form-control" placeholder="Teléfono Celular"  name="CellPhone" id="CellPhone" aria-label="telefonoCel" aria-describedby="basic-addon1">
                      </div>
                    </div>
                  </div>
                  <div class="col-sm">
                    <div class="form-group">
                      <label for="correo">Correo electrónico</label>
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                         <span class="input-group-text" id="basic-addon1"><i class="material-icons">email</i></span>
                        </div>
                        <input type="email" class="form-control" placeholder="Correo electronico" name="Email" id="Email" aria-label="Username" aria-describedby="basic-addon1">
                      </div>
                    </div>
                  </div>
                </div>

                <!-- afiliado2 -->
                <h3 class="subtitleform">Afiliado 2</h3>
                <div class="form-row">
                  <div class="col-12 col-sm-6">
                    <div class="form-group">
                      <label for="nombres">Nombres completos</label>
                      <input type="text" class="form-control" name="Name" id="Name" placeholder="Escriba los nombres del afiliado">
                    </div>
                  </div>
                  <div class="col-12 col-sm-6">
                    <div class="form-group">
                      <label for="apellidos">Apellidos completos</label>
                      <input type="text" class="form-control" name="LastName" id="LastName" placeholder="Escriba los apellidos del afiliado">
                    </div>
                  </div>
                </div>
                <div class="form-row">
                  <div class="col-4- col-sm-4">
                    <div class="form-group">
                      <label for="tipo-documento">Tipo de documento</label>
                      <select class="custom-select" name="TipoDoc" id="TipoDoc">
                            <option selected>CC</option>
                            <option >CE</option>
                            <option >RC</option>
                            <option >TI</option>
                     </select>
                    </div>
                  </div>
                  <div class="col-8 col-sm-8">
                    <div class="form-group">
                      <label for="numero-documento">Número de documento</label>
                      <input type="tel" class="form-control" name="Doc" maxlength="10" id="Doc" placeholder="Escriba el numero de documento del afiliado sin puntos">
                    </div>
                  </div>
                </div>
                <div class="form-row">
                  <div class="col-6 col-sm-3">
                    <div class="form-group">
                      <label for="fecha-nacimiento">Fecha de nacimiento</label>
                      <input type="date" class="form-control" name="DateBirthday" id="DateBirthday">
                    </div>
                  </div>
                  <div class="col-6 col-sm-6">
                    <div class="form-group">
                      <label for="lugar-nacimiento">Lugar de nacimiento</label>
                      <input type="text" class="form-control" name="PlaceBorn" id="PlaceBorn" placeholder="Escriba el lugar de nacimiento del afiliado">
                    </div>
                  </div>
                  <div class="col-12 col-sm-3">
                    <div class="form-group">
                      <label for="genero">Genero</label>
                      <select class="custom-select" name="Genero" id="Genero">
                         <option value="MASCULINO" >MASCULINO</option>
                         <option value="FEMENINO">FEMENINO</option>
                  </select>
                    </div>
                  </div>
                </div>
                <div class="form-row">
                     <div class="col-sm-6">
                         <div class="form-group">
                              <label for="direccion">Dirección de correspondencia</label>
                              <input type="text" class="form-control" name="Direction" id="Direction" placeholder="KR 155 # 78B -48">
                         </div>
                    </div>
                    <div class="col-sm-3">
                         <div class="form-group">
                                <label for="ciudad">Ciudad</label>
                                 <input type="text" class="form-control" name="Ciudad" id="Ciudad" placeholder="Ciudad de residencia">
                         </div>
                    </div>
                    <div class="col-sm-3">
                         <div class="form-group">
                              <label for="departamento">Departamento</label>
                              <input type="text" class="form-control" name="Departamento" id="Departamento" placeholder="Departamento de residencia">
                         </div>
                    </div>
                </div>
                <div class="form-row">
                  <div class="col-sm">
                    <div class="form-group">
                      <label for="telefono">Numero telefónico</label>
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                         <span class="input-group-text" id="basic-addon1"><i class="material-icons">phone</i></span>
                        </div>
                        <input type="tel" maxlength="7" class="form-control" placeholder="Teléfono fijo" name="LocalPhone" id="LocalPhone" aria-label="telefono" aria-describedby="basic-addon1">
                      </div>
                    </div>
                  </div>
                  <div class="col-sm">
                    <div class="form-group">
                      <label for="telefonoCel">Numero de teléfono celular</label>
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                         <span class="input-group-text" id="basic-addon1"><i class="material-icons">smartphone</i></span>
                        </div>
                        <input type="tel" maxlength="10 "class="form-control" placeholder="Teléfono Celular"  name="CellPhone" id="CellPhone" aria-label="telefonoCel" aria-describedby="basic-addon1">
                      </div>
                    </div>
                  </div>
                  <div class="col-sm">
                    <div class="form-group">
                      <label for="correo">Correo electrónico</label>
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                         <span class="input-group-text" id="basic-addon1"><i class="material-icons">email</i></span>
                        </div>
                        <input type="email" class="form-control" placeholder="Correo electronico" name="Email" id="Email" aria-label="Username" aria-describedby="basic-addon1">
                      </div>
                    </div>
                  </div>
                </div>

                <!-- afiliado3-->
                <h3 class="subtitleform">Afiliado 3</h3>
                <div class="form-row">
                  <div class="col-12 col-sm-6">
                    <div class="form-group">
                      <label for="nombres">Nombres completos</label>
                      <input type="text" class="form-control" name="Name" id="Name" placeholder="Escriba los nombres del afiliado">
                    </div>
                  </div>
                  <div class="col-12 col-sm-6">
                    <div class="form-group">
                      <label for="apellidos">Apellidos completos</label>
                      <input type="text" class="form-control" name="LastName" id="LastName" placeholder="Escriba los apellidos del afiliado">
                    </div>
                  </div>
                </div>
                <div class="form-row">
                  <div class="col-4- col-sm-4">
                    <div class="form-group">
                      <label for="tipo-documento">Tipo de documento</label>
                      <select class="custom-select" name="TipoDoc" id="TipoDoc">
                            <option selected>CC</option>
                            <option >CE</option>
                            <option >RC</option>
                            <option >TI</option>
                     </select>
                    </div>
                  </div>
                  <div class="col-8 col-sm-8">
                    <div class="form-group">
                      <label for="numero-documento">Número de documento</label>
                      <input type="tel" class="form-control" name="Doc" maxlength="10" id="Doc" placeholder="Escriba el numero de documento del afiliado sin puntos">
                    </div>
                  </div>
                </div>
                <div class="form-row">
                  <div class="col-6 col-sm-3">
                    <div class="form-group">
                      <label for="fecha-nacimiento">Fecha de nacimiento</label>
                      <input type="date" class="form-control" name="DateBirthday" id="DateBirthday">
                    </div>
                  </div>
                  <div class="col-6 col-sm-6">
                    <div class="form-group">
                      <label for="lugar-nacimiento">Lugar de nacimiento</label>
                      <input type="text" class="form-control" name="PlaceBorn" id="PlaceBorn" placeholder="Escriba el lugar de nacimiento del afiliado">
                    </div>
                  </div>
                  <div class="col-12 col-sm-3">
                    <div class="form-group">
                      <label for="genero">Genero</label>
                      <select class="custom-select" name="Genero" id="Genero">
                         <option value="MASCULINO" >MASCULINO</option>
                         <option value="FEMENINO">FEMENINO</option>
                  </select>
                    </div>
                  </div>
                </div>
                <div class="form-row">
                     <div class="col-sm-6">
                         <div class="form-group">
                              <label for="direccion">Dirección de correspondencia</label>
                              <input type="text" class="form-control" name="Direction" id="Direction" placeholder="KR 155 # 78B -48">
                         </div>
                    </div>
                    <div class="col-sm-3">
                         <div class="form-group">
                                <label for="ciudad">Ciudad</label>
                                 <input type="text" class="form-control" name="Ciudad" id="Ciudad" placeholder="Ciudad de residencia">
                         </div>
                    </div>
                    <div class="col-sm-3">
                         <div class="form-group">
                              <label for="departamento">Departamento</label>
                              <input type="text" class="form-control" name="Departamento" id="Departamento" placeholder="Departamento de residencia">
                         </div>
                    </div>
                </div>
                <div class="form-row">
                  <div class="col-sm">
                    <div class="form-group">
                      <label for="telefono">Numero telefónico</label>
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                         <span class="input-group-text" id="basic-addon1"><i class="material-icons">phone</i></span>
                        </div>
                        <input type="tel" maxlength="7" class="form-control" placeholder="Teléfono fijo" name="LocalPhone" id="LocalPhone" aria-label="telefono" aria-describedby="basic-addon1">
                      </div>
                    </div>
                  </div>
                  <div class="col-sm">
                    <div class="form-group">
                      <label for="telefonoCel">Numero de teléfono celular</label>
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                         <span class="input-group-text" id="basic-addon1"><i class="material-icons">smartphone</i></span>
                        </div>
                        <input type="tel" maxlength="10 "class="form-control" placeholder="Teléfono Celular"  name="CellPhone" id="CellPhone" aria-label="telefonoCel" aria-describedby="basic-addon1">
                      </div>
                    </div>
                  </div>
                  <div class="col-sm">
                    <div class="form-group">
                      <label for="correo">Correo electrónico</label>
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                         <span class="input-group-text" id="basic-addon1"><i class="material-icons">email</i></span>
                        </div>
                        <input type="email" class="form-control" placeholder="Correo electronico" name="Email" id="Email" aria-label="Username" aria-describedby="basic-addon1">
                      </div>
                    </div>
                  </div>
                </div>
                <!-- afiliado4 -->
                <h3 class="subtitleform">Afiliado 4</h3>
                <div class="form-row">
                  <div class="col-12 col-sm-6">
                    <div class="form-group">
                      <label for="nombres">Nombres completos</label>
                      <input type="text" class="form-control" name="Name" id="Name" placeholder="Escriba los nombres del afiliado">
                    </div>
                  </div>
                  <div class="col-12 col-sm-6">
                    <div class="form-group">
                      <label for="apellidos">Apellidos completos</label>
                      <input type="text" class="form-control" name="LastName" id="LastName" placeholder="Escriba los apellidos del afiliado">
                    </div>
                  </div>
                </div>
                <div class="form-row">
                  <div class="col-4- col-sm-4">
                    <div class="form-group">
                      <label for="tipo-documento">Tipo de documento</label>
                      <select class="custom-select" name="TipoDoc" id="TipoDoc">
                            <option selected>CC</option>
                            <option >CE</option>
                            <option >RC</option>
                            <option >TI</option>
                     </select>
                    </div>
                  </div>
                  <div class="col-8 col-sm-8">
                    <div class="form-group">
                      <label for="numero-documento">Número de documento</label>
                      <input type="tel" class="form-control" name="Doc" maxlength="10" id="Doc" placeholder="Escriba el numero de documento del afiliado sin puntos">
                    </div>
                  </div>
                </div>
                <div class="form-row">
                  <div class="col-6 col-sm-3">
                    <div class="form-group">
                      <label for="fecha-nacimiento">Fecha de nacimiento</label>
                      <input type="date" class="form-control" name="DateBirthday" id="DateBirthday">
                    </div>
                  </div>
                  <div class="col-6 col-sm-6">
                    <div class="form-group">
                      <label for="lugar-nacimiento">Lugar de nacimiento</label>
                      <input type="text" class="form-control" name="PlaceBorn" id="PlaceBorn" placeholder="Escriba el lugar de nacimiento del afiliado">
                    </div>
                  </div>
                  <div class="col-12 col-sm-3">
                    <div class="form-group">
                      <label for="genero">Genero</label>
                      <select class="custom-select" name="Genero" id="Genero">
                         <option value="MASCULINO" >MASCULINO</option>
                         <option value="FEMENINO">FEMENINO</option>
                  </select>
                    </div>
                  </div>
                </div>
                <div class="form-row">
                     <div class="col-sm-6">
                         <div class="form-group">
                              <label for="direccion">Dirección de correspondencia</label>
                              <input type="text" class="form-control" name="Direction" id="Direction" placeholder="KR 155 # 78B -48">
                         </div>
                    </div>
                    <div class="col-sm-3">
                         <div class="form-group">
                                <label for="ciudad">Ciudad</label>
                                 <input type="text" class="form-control" name="Ciudad" id="Ciudad" placeholder="Ciudad de residencia">
                         </div>
                    </div>
                    <div class="col-sm-3">
                         <div class="form-group">
                              <label for="departamento">Departamento</label>
                              <input type="text" class="form-control" name="Departamento" id="Departamento" placeholder="Departamento de residencia">
                         </div>
                    </div>
                </div>
                <div class="form-row">
                  <div class="col-sm">
                    <div class="form-group">
                      <label for="telefono">Numero telefónico</label>
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                         <span class="input-group-text" id="basic-addon1"><i class="material-icons">phone</i></span>
                        </div>
                        <input type="tel" maxlength="7" class="form-control" placeholder="Teléfono fijo" name="LocalPhone" id="LocalPhone" aria-label="telefono" aria-describedby="basic-addon1">
                      </div>
                    </div>
                  </div>
                  <div class="col-sm">
                    <div class="form-group">
                      <label for="telefonoCel">Numero de teléfono celular</label>
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                         <span class="input-group-text" id="basic-addon1"><i class="material-icons">smartphone</i></span>
                        </div>
                        <input type="tel" maxlength="10 "class="form-control" placeholder="Teléfono Celular"  name="CellPhone" id="CellPhone" aria-label="telefonoCel" aria-describedby="basic-addon1">
                      </div>
                    </div>
                  </div>
                  <div class="col-sm">
                    <div class="form-group">
                      <label for="correo">Correo electrónico</label>
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                         <span class="input-group-text" id="basic-addon1"><i class="material-icons">email</i></span>
                        </div>
                        <input type="email" class="form-control" placeholder="Correo electronico" name="Email" id="Email" aria-label="Username" aria-describedby="basic-addon1">
                      </div>
                    </div>
                  </div>
                </div>
                <!-- afiliado5 -->
                <h3 class="subtitleform">Afiliado 5</h3>
                <div class="form-row">
                  <div class="col-12 col-sm-6">
                    <div class="form-group">
                      <label for="nombres">Nombres completos</label>
                      <input type="text" class="form-control" name="Name" id="Name" placeholder="Escriba los nombres del afiliado">
                    </div>
                  </div>
                  <div class="col-12 col-sm-6">
                    <div class="form-group">
                      <label for="apellidos">Apellidos completos</label>
                      <input type="text" class="form-control" name="LastName" id="LastName" placeholder="Escriba los apellidos del afiliado">
                    </div>
                  </div>
                </div>
                <div class="form-row">
                  <div class="col-4- col-sm-4">
                    <div class="form-group">
                      <label for="tipo-documento">Tipo de documento</label>
                      <select class="custom-select" name="TipoDoc" id="TipoDoc">
                            <option selected>CC</option>
                            <option >CE</option>
                            <option >RC</option>
                            <option >TI</option>
                     </select>
                    </div>
                  </div>
                  <div class="col-8 col-sm-8">
                    <div class="form-group">
                      <label for="numero-documento">Número de documento</label>
                      <input type="tel" class="form-control" name="Doc" maxlength="10" id="Doc" placeholder="Escriba el numero de documento del afiliado sin puntos">
                    </div>
                  </div>
                </div>
                <div class="form-row">
                  <div class="col-6 col-sm-3">
                    <div class="form-group">
                      <label for="fecha-nacimiento">Fecha de nacimiento</label>
                      <input type="date" class="form-control" name="DateBirthday" id="DateBirthday">
                    </div>
                  </div>
                  <div class="col-6 col-sm-6">
                    <div class="form-group">
                      <label for="lugar-nacimiento">Lugar de nacimiento</label>
                      <input type="text" class="form-control" name="PlaceBorn" id="PlaceBorn" placeholder="Escriba el lugar de nacimiento del afiliado">
                    </div>
                  </div>
                  <div class="col-12 col-sm-3">
                    <div class="form-group">
                      <label for="genero">Genero</label>
                      <select class="custom-select" name="Genero" id="Genero">
                         <option value="MASCULINO" >MASCULINO</option>
                         <option value="FEMENINO">FEMENINO</option>
                  </select>
                    </div>
                  </div>
                </div>
                <div class="form-row">
                     <div class="col-sm-6">
                         <div class="form-group">
                              <label for="direccion">Dirección de correspondencia</label>
                              <input type="text" class="form-control" name="Direction" id="Direction" placeholder="KR 155 # 78B -48">
                         </div>
                    </div>
                    <div class="col-sm-3">
                         <div class="form-group">
                                <label for="ciudad">Ciudad</label>
                                 <input type="text" class="form-control" name="Ciudad" id="Ciudad" placeholder="Ciudad de residencia">
                         </div>
                    </div>
                    <div class="col-sm-3">
                         <div class="form-group">
                              <label for="departamento">Departamento</label>
                              <input type="text" class="form-control" name="Departamento" id="Departamento" placeholder="Departamento de residencia">
                         </div>
                    </div>
                </div>
                <div class="form-row">
                  <div class="col-sm">
                    <div class="form-group">
                      <label for="telefono">Numero telefónico</label>
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                         <span class="input-group-text" id="basic-addon1"><i class="material-icons">phone</i></span>
                        </div>
                        <input type="tel" maxlength="7" class="form-control" placeholder="Teléfono fijo" name="LocalPhone" id="LocalPhone" aria-label="telefono" aria-describedby="basic-addon1">
                      </div>
                    </div>
                  </div>
                  <div class="col-sm">
                    <div class="form-group">
                      <label for="telefonoCel">Numero de teléfono celular</label>
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                         <span class="input-group-text" id="basic-addon1"><i class="material-icons">smartphone</i></span>
                        </div>
                        <input type="tel" maxlength="10 "class="form-control" placeholder="Teléfono Celular"  name="CellPhone" id="CellPhone" aria-label="telefonoCel" aria-describedby="basic-addon1">
                      </div>
                    </div>
                  </div>
                  <div class="col-sm">
                    <div class="form-group">
                      <label for="correo">Correo electrónico</label>
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                         <span class="input-group-text" id="basic-addon1"><i class="material-icons">email</i></span>
                        </div>
                        <input type="email" class="form-control" placeholder="Correo electronico" name="Email" id="Email" aria-label="Username" aria-describedby="basic-addon1">
                      </div>
                    </div>
                  </div>
                </div>
                <!-- afiliado6-->
                <h3 class="subtitleform">Afiliado 6</h3>
                <div class="form-row">
                  <div class="col-12 col-sm-6">
                    <div class="form-group">
                      <label for="nombres">Nombres completos</label>
                      <input type="text" class="form-control" name="Name" id="Name" placeholder="Escriba los nombres del afiliado">
                    </div>
                  </div>
                  <div class="col-12 col-sm-6">
                    <div class="form-group">
                      <label for="apellidos">Apellidos completos</label>
                      <input type="text" class="form-control" name="LastName" id="LastName" placeholder="Escriba los apellidos del afiliado">
                    </div>
                  </div>
                </div>
                <div class="form-row">
                  <div class="col-4- col-sm-4">
                    <div class="form-group">
                      <label for="tipo-documento">Tipo de documento</label>
                      <select class="custom-select" name="TipoDoc" id="TipoDoc">
                            <option selected>CC</option>
                            <option >CE</option>
                            <option >RC</option>
                            <option >TI</option>
                     </select>
                    </div>
                  </div>
                  <div class="col-8 col-sm-8">
                    <div class="form-group">
                      <label for="numero-documento">Número de documento</label>
                      <input type="tel" class="form-control" name="Doc" maxlength="10" id="Doc" placeholder="Escriba el numero de documento del afiliado sin puntos">
                    </div>
                  </div>
                </div>
                <div class="form-row">
                  <div class="col-6 col-sm-3">
                    <div class="form-group">
                      <label for="fecha-nacimiento">Fecha de nacimiento</label>
                      <input type="date" class="form-control" name="DateBirthday" id="DateBirthday">
                    </div>
                  </div>
                  <div class="col-6 col-sm-6">
                    <div class="form-group">
                      <label for="lugar-nacimiento">Lugar de nacimiento</label>
                      <input type="text" class="form-control" name="PlaceBorn" id="PlaceBorn" placeholder="Escriba el lugar de nacimiento del afiliado">
                    </div>
                  </div>
                  <div class="col-12 col-sm-3">
                    <div class="form-group">
                      <label for="genero">Genero</label>
                      <select class="custom-select" name="Genero" id="Genero">
                         <option value="MASCULINO" >MASCULINO</option>
                         <option value="FEMENINO">FEMENINO</option>
                  </select>
                    </div>
                  </div>
                </div>
                <div class="form-row">
                     <div class="col-sm-6">
                         <div class="form-group">
                              <label for="direccion">Dirección de correspondencia</label>
                              <input type="text" class="form-control" name="Direction" id="Direction" placeholder="KR 155 # 78B -48">
                         </div>
                    </div>
                    <div class="col-sm-3">
                         <div class="form-group">
                                <label for="ciudad">Ciudad</label>
                                 <input type="text" class="form-control" name="Ciudad" id="Ciudad" placeholder="Ciudad de residencia">
                         </div>
                    </div>
                    <div class="col-sm-3">
                         <div class="form-group">
                              <label for="departamento">Departamento</label>
                              <input type="text" class="form-control" name="Departamento" id="Departamento" placeholder="Departamento de residencia">
                         </div>
                    </div>
                </div>
                <div class="form-row">
                  <div class="col-sm">
                    <div class="form-group">
                      <label for="telefono">Numero telefónico</label>
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                         <span class="input-group-text" id="basic-addon1"><i class="material-icons">phone</i></span>
                        </div>
                        <input type="tel" maxlength="7" class="form-control" placeholder="Teléfono fijo" name="LocalPhone" id="LocalPhone" aria-label="telefono" aria-describedby="basic-addon1">
                      </div>
                    </div>
                  </div>
                  <div class="col-sm">
                    <div class="form-group">
                      <label for="telefonoCel">Numero de teléfono celular</label>
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                         <span class="input-group-text" id="basic-addon1"><i class="material-icons">smartphone</i></span>
                        </div>
                        <input type="tel" maxlength="10 "class="form-control" placeholder="Teléfono Celular"  name="CellPhone" id="CellPhone" aria-label="telefonoCel" aria-describedby="basic-addon1">
                      </div>
                    </div>
                  </div>
                  <div class="col-sm">
                    <div class="form-group">
                      <label for="correo">Correo electrónico</label>
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                         <span class="input-group-text" id="basic-addon1"><i class="material-icons">email</i></span>
                        </div>
                        <input type="email" class="form-control" placeholder="Correo electronico" name="Email" id="Email" aria-label="Username" aria-describedby="basic-addon1">
                      </div>
                    </div>
                  </div>
                </div>
                <!-- afiliado7 -->
                <h3 class="subtitleform">Afiliado 7</h3>
                <div class="form-row">
                  <div class="col-12 col-sm-6">
                    <div class="form-group">
                      <label for="nombres">Nombres completos</label>
                      <input type="text" class="form-control" name="Name" id="Name" placeholder="Escriba los nombres del afiliado">
                    </div>
                  </div>
                  <div class="col-12 col-sm-6">
                    <div class="form-group">
                      <label for="apellidos">Apellidos completos</label>
                      <input type="text" class="form-control" name="LastName" id="LastName" placeholder="Escriba los apellidos del afiliado">
                    </div>
                  </div>
                </div>
                <div class="form-row">
                  <div class="col-4- col-sm-4">
                    <div class="form-group">
                      <label for="tipo-documento">Tipo de documento</label>
                      <select class="custom-select" name="TipoDoc" id="TipoDoc">
                            <option selected>CC</option>
                            <option >CE</option>
                            <option >RC</option>
                            <option >TI</option>
                     </select>
                    </div>
                  </div>
                  <div class="col-8 col-sm-8">
                    <div class="form-group">
                      <label for="numero-documento">Número de documento</label>
                      <input type="tel" class="form-control" name="Doc" maxlength="10" id="Doc" placeholder="Escriba el numero de documento del afiliado sin puntos">
                    </div>
                  </div>
                </div>
                <div class="form-row">
                  <div class="col-6 col-sm-3">
                    <div class="form-group">
                      <label for="fecha-nacimiento">Fecha de nacimiento</label>
                      <input type="date" class="form-control" name="DateBirthday" id="DateBirthday">
                    </div>
                  </div>
                  <div class="col-6 col-sm-6">
                    <div class="form-group">
                      <label for="lugar-nacimiento">Lugar de nacimiento</label>
                      <input type="text" class="form-control" name="PlaceBorn" id="PlaceBorn" placeholder="Escriba el lugar de nacimiento del afiliado">
                    </div>
                  </div>
                  <div class="col-12 col-sm-3">
                    <div class="form-group">
                      <label for="genero">Genero</label>
                      <select class="custom-select" name="Genero" id="Genero">
                         <option value="MASCULINO" >MASCULINO</option>
                         <option value="FEMENINO">FEMENINO</option>
                  </select>
                    </div>
                  </div>
                </div>
                <div class="form-row">
                     <div class="col-sm-6">
                         <div class="form-group">
                              <label for="direccion">Dirección de correspondencia</label>
                              <input type="text" class="form-control" name="Direction" id="Direction" placeholder="KR 155 # 78B -48">
                         </div>
                    </div>
                    <div class="col-sm-3">
                         <div class="form-group">
                                <label for="ciudad">Ciudad</label>
                                 <input type="text" class="form-control" name="Ciudad" id="Ciudad" placeholder="Ciudad de residencia">
                         </div>
                    </div>
                    <div class="col-sm-3">
                         <div class="form-group">
                              <label for="departamento">Departamento</label>
                              <input type="text" class="form-control" name="Departamento" id="Departamento" placeholder="Departamento de residencia">
                         </div>
                    </div>
                </div>
                <div class="form-row">
                  <div class="col-sm">
                    <div class="form-group">
                      <label for="telefono">Numero telefónico</label>
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                         <span class="input-group-text" id="basic-addon1"><i class="material-icons">phone</i></span>
                        </div>
                        <input type="tel" maxlength="7" class="form-control" placeholder="Teléfono fijo" name="LocalPhone" id="LocalPhone" aria-label="telefono" aria-describedby="basic-addon1">
                      </div>
                    </div>
                  </div>
                  <div class="col-sm">
                    <div class="form-group">
                      <label for="telefonoCel">Numero de teléfono celular</label>
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                         <span class="input-group-text" id="basic-addon1"><i class="material-icons">smartphone</i></span>
                        </div>
                        <input type="tel" maxlength="10 "class="form-control" placeholder="Teléfono Celular"  name="CellPhone" id="CellPhone" aria-label="telefonoCel" aria-describedby="basic-addon1">
                      </div>
                    </div>
                  </div>
                  <div class="col-sm">
                    <div class="form-group">
                      <label for="correo">Correo electrónico</label>
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                         <span class="input-group-text" id="basic-addon1"><i class="material-icons">email</i></span>
                        </div>
                        <input type="email" class="form-control" placeholder="Correo electronico" name="Email" id="Email" aria-label="Username" aria-describedby="basic-addon1">
                      </div>
                    </div>
                  </div>
                </div>
                <!-- afiliado8 -->
                <h3 class="subtitleform">Afiliado 8</h3>
                <div class="form-row">
                  <div class="col-12 col-sm-6">
                    <div class="form-group">
                      <label for="nombres">Nombres completos</label>
                      <input type="text" class="form-control" name="Name" id="Name" placeholder="Escriba los nombres del afiliado">
                    </div>
                  </div>
                  <div class="col-12 col-sm-6">
                    <div class="form-group">
                      <label for="apellidos">Apellidos completos</label>
                      <input type="text" class="form-control" name="LastName" id="LastName" placeholder="Escriba los apellidos del afiliado">
                    </div>
                  </div>
                </div>
                <div class="form-row">
                  <div class="col-4- col-sm-4">
                    <div class="form-group">
                      <label for="tipo-documento">Tipo de documento</label>
                      <select class="custom-select" name="TipoDoc" id="TipoDoc">
                            <option selected>CC</option>
                            <option >CE</option>
                            <option >RC</option>
                            <option >TI</option>
                     </select>
                    </div>
                  </div>
                  <div class="col-8 col-sm-8">
                    <div class="form-group">
                      <label for="numero-documento">Número de documento</label>
                      <input type="tel" class="form-control" name="Doc" maxlength="10" id="Doc" placeholder="Escriba el numero de documento del afiliado sin puntos">
                    </div>
                  </div>
                </div>
                <div class="form-row">
                  <div class="col-6 col-sm-3">
                    <div class="form-group">
                      <label for="fecha-nacimiento">Fecha de nacimiento</label>
                      <input type="date" class="form-control" name="DateBirthday" id="DateBirthday">
                    </div>
                  </div>
                  <div class="col-6 col-sm-6">
                    <div class="form-group">
                      <label for="lugar-nacimiento">Lugar de nacimiento</label>
                      <input type="text" class="form-control" name="PlaceBorn" id="PlaceBorn" placeholder="Escriba el lugar de nacimiento del afiliado">
                    </div>
                  </div>
                  <div class="col-12 col-sm-3">
                    <div class="form-group">
                      <label for="genero">Genero</label>
                      <select class="custom-select" name="Genero" id="Genero">
                         <option value="MASCULINO" >MASCULINO</option>
                         <option value="FEMENINO">FEMENINO</option>
                  </select>
                    </div>
                  </div>
                </div>
                <div class="form-row">
                     <div class="col-sm-6">
                         <div class="form-group">
                              <label for="direccion">Dirección de correspondencia</label>
                              <input type="text" class="form-control" name="Direction" id="Direction" placeholder="KR 155 # 78B -48">
                         </div>
                    </div>
                    <div class="col-sm-3">
                         <div class="form-group">
                                <label for="ciudad">Ciudad</label>
                                 <input type="text" class="form-control" name="Ciudad" id="Ciudad" placeholder="Ciudad de residencia">
                         </div>
                    </div>
                    <div class="col-sm-3">
                         <div class="form-group">
                              <label for="departamento">Departamento</label>
                              <input type="text" class="form-control" name="Departamento" id="Departamento" placeholder="Departamento de residencia">
                         </div>
                    </div>
                </div>
                <div class="form-row">
                  <div class="col-sm">
                    <div class="form-group">
                      <label for="telefono">Numero telefónico</label>
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                         <span class="input-group-text" id="basic-addon1"><i class="material-icons">phone</i></span>
                        </div>
                        <input type="tel" maxlength="7" class="form-control" placeholder="Teléfono fijo" name="LocalPhone" id="LocalPhone" aria-label="telefono" aria-describedby="basic-addon1">
                      </div>
                    </div>
                  </div>
                  <div class="col-sm">
                    <div class="form-group">
                      <label for="telefonoCel">Numero de teléfono celular</label>
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                         <span class="input-group-text" id="basic-addon1"><i class="material-icons">smartphone</i></span>
                        </div>
                        <input type="tel" maxlength="10 "class="form-control" placeholder="Teléfono Celular"  name="CellPhone" id="CellPhone" aria-label="telefonoCel" aria-describedby="basic-addon1">
                      </div>
                    </div>
                  </div>
                  <div class="col-sm">
                    <div class="form-group">
                      <label for="correo">Correo electrónico</label>
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                         <span class="input-group-text" id="basic-addon1"><i class="material-icons">email</i></span>
                        </div>
                        <input type="email" class="form-control" placeholder="Correo electronico" name="Email" id="Email" aria-label="Username" aria-describedby="basic-addon1">
                      </div>
                    </div>
                  </div>
                </div>
                <!-- afiliado9 -->
                <h3 class="subtitleform">Afiliado 9</h3>
                <div class="form-row">
                  <div class="col-12 col-sm-6">
                    <div class="form-group">
                      <label for="nombres">Nombres completos</label>
                      <input type="text" class="form-control" name="Name" id="Name" placeholder="Escriba los nombres del afiliado">
                    </div>
                  </div>
                  <div class="col-12 col-sm-6">
                    <div class="form-group">
                      <label for="apellidos">Apellidos completos</label>
                      <input type="text" class="form-control" name="LastName" id="LastName" placeholder="Escriba los apellidos del afiliado">
                    </div>
                  </div>
                </div>
                <div class="form-row">
                  <div class="col-4- col-sm-4">
                    <div class="form-group">
                      <label for="tipo-documento">Tipo de documento</label>
                      <select class="custom-select" name="TipoDoc" id="TipoDoc">
                            <option selected>CC</option>
                            <option >CE</option>
                            <option >RC</option>
                            <option >TI</option>
                     </select>
                    </div>
                  </div>
                  <div class="col-8 col-sm-8">
                    <div class="form-group">
                      <label for="numero-documento">Número de documento</label>
                      <input type="tel" class="form-control" name="Doc" maxlength="10" id="Doc" placeholder="Escriba el numero de documento del afiliado sin puntos">
                    </div>
                  </div>
                </div>
                <div class="form-row">
                  <div class="col-6 col-sm-3">
                    <div class="form-group">
                      <label for="fecha-nacimiento">Fecha de nacimiento</label>
                      <input type="date" class="form-control" name="DateBirthday" id="DateBirthday">
                    </div>
                  </div>
                  <div class="col-6 col-sm-6">
                    <div class="form-group">
                      <label for="lugar-nacimiento">Lugar de nacimiento</label>
                      <input type="text" class="form-control" name="PlaceBorn" id="PlaceBorn" placeholder="Escriba el lugar de nacimiento del afiliado">
                    </div>
                  </div>
                  <div class="col-12 col-sm-3">
                    <div class="form-group">
                      <label for="genero">Genero</label>
                      <select class="custom-select" name="Genero" id="Genero">
                         <option value="MASCULINO" >MASCULINO</option>
                         <option value="FEMENINO">FEMENINO</option>
                  </select>
                    </div>
                  </div>
                </div>
                <div class="form-row">
                     <div class="col-sm-6">
                         <div class="form-group">
                              <label for="direccion">Dirección de correspondencia</label>
                              <input type="text" class="form-control" name="Direction" id="Direction" placeholder="KR 155 # 78B -48">
                         </div>
                    </div>
                    <div class="col-sm-3">
                         <div class="form-group">
                                <label for="ciudad">Ciudad</label>
                                 <input type="text" class="form-control" name="Ciudad" id="Ciudad" placeholder="Ciudad de residencia">
                         </div>
                    </div>
                    <div class="col-sm-3">
                         <div class="form-group">
                              <label for="departamento">Departamento</label>
                              <input type="text" class="form-control" name="Departamento" id="Departamento" placeholder="Departamento de residencia">
                         </div>
                    </div>
                </div>
                <div class="form-row">
                  <div class="col-sm">
                    <div class="form-group">
                      <label for="telefono">Numero telefónico</label>
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                         <span class="input-group-text" id="basic-addon1"><i class="material-icons">phone</i></span>
                        </div>
                        <input type="tel" maxlength="7" class="form-control" placeholder="Teléfono fijo" name="LocalPhone" id="LocalPhone" aria-label="telefono" aria-describedby="basic-addon1">
                      </div>
                    </div>
                  </div>
                  <div class="col-sm">
                    <div class="form-group">
                      <label for="telefonoCel">Numero de teléfono celular</label>
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                         <span class="input-group-text" id="basic-addon1"><i class="material-icons">smartphone</i></span>
                        </div>
                        <input type="tel" maxlength="10 "class="form-control" placeholder="Teléfono Celular"  name="CellPhone" id="CellPhone" aria-label="telefonoCel" aria-describedby="basic-addon1">
                      </div>
                    </div>
                  </div>
                  <div class="col-sm">
                    <div class="form-group">
                      <label for="correo">Correo electrónico</label>
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                         <span class="input-group-text" id="basic-addon1"><i class="material-icons">email</i></span>
                        </div>
                        <input type="email" class="form-control" placeholder="Correo electronico" name="Email" id="Email" aria-label="Username" aria-describedby="basic-addon1">
                      </div>
                    </div>
                  </div>
                </div>

                <!-- afiliado10 -->
                <h3 class="subtitleform">Afiliado 10</h3>
                <div class="form-row">
                  <div class="col-12 col-sm-6">
                    <div class="form-group">
                      <label for="nombres">Nombres completos</label>
                      <input type="text" class="form-control" name="Name" id="Name" placeholder="Escriba los nombres del afiliado">
                    </div>
                  </div>
                  <div class="col-12 col-sm-6">
                    <div class="form-group">
                      <label for="apellidos">Apellidos completos</label>
                      <input type="text" class="form-control" name="LastName" id="LastName" placeholder="Escriba los apellidos del afiliado">
                    </div>
                  </div>
                </div>
                <div class="form-row">
                  <div class="col-4- col-sm-4">
                    <div class="form-group">
                      <label for="tipo-documento">Tipo de documento</label>
                      <select class="custom-select" name="TipoDoc" id="TipoDoc">
                            <option selected>CC</option>
                            <option >CE</option>
                            <option >RC</option>
                            <option >TI</option>
                     </select>
                    </div>
                  </div>
                  <div class="col-8 col-sm-8">
                    <div class="form-group">
                      <label for="numero-documento">Número de documento</label>
                      <input type="tel" class="form-control" name="Doc" maxlength="10" id="Doc" placeholder="Escriba el numero de documento del afiliado sin puntos">
                    </div>
                  </div>
                </div>
                <div class="form-row">
                  <div class="col-6 col-sm-3">
                    <div class="form-group">
                      <label for="fecha-nacimiento">Fecha de nacimiento</label>
                      <input type="date" class="form-control" name="DateBirthday" id="DateBirthday">
                    </div>
                  </div>
                  <div class="col-6 col-sm-6">
                    <div class="form-group">
                      <label for="lugar-nacimiento">Lugar de nacimiento</label>
                      <input type="text" class="form-control" name="PlaceBorn" id="PlaceBorn" placeholder="Escriba el lugar de nacimiento del afiliado">
                    </div>
                  </div>
                  <div class="col-12 col-sm-3">
                    <div class="form-group">
                      <label for="genero">Genero</label>
                      <select class="custom-select" name="Genero" id="Genero">
                         <option value="MASCULINO" >MASCULINO</option>
                         <option value="FEMENINO">FEMENINO</option>
                  </select>
                    </div>
                  </div>
                </div>
                <div class="form-row">
                     <div class="col-sm-6">
                         <div class="form-group">
                              <label for="direccion">Dirección de correspondencia</label>
                              <input type="text" class="form-control" name="Direction" id="Direction" placeholder="KR 155 # 78B -48">
                         </div>
                    </div>
                    <div class="col-sm-3">
                         <div class="form-group">
                                <label for="ciudad">Ciudad</label>
                                 <input type="text" class="form-control" name="Ciudad" id="Ciudad" placeholder="Ciudad de residencia">
                         </div>
                    </div>
                    <div class="col-sm-3">
                         <div class="form-group">
                              <label for="departamento">Departamento</label>
                              <input type="text" class="form-control" name="Departamento" id="Departamento" placeholder="Departamento de residencia">
                         </div>
                    </div>
                </div>
                <div class="form-row">
                  <div class="col-sm">
                    <div class="form-group">
                      <label for="telefono">Numero telefónico</label>
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                         <span class="input-group-text" id="basic-addon1"><i class="material-icons">phone</i></span>
                        </div>
                        <input type="tel" maxlength="7" class="form-control" placeholder="Teléfono fijo" name="LocalPhone" id="LocalPhone" aria-label="telefono" aria-describedby="basic-addon1">
                      </div>
                    </div>
                  </div>
                  <div class="col-sm">
                    <div class="form-group">
                      <label for="telefonoCel">Numero de teléfono celular</label>
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                         <span class="input-group-text" id="basic-addon1"><i class="material-icons">smartphone</i></span>
                        </div>
                        <input type="tel" maxlength="10 "class="form-control" placeholder="Teléfono Celular"  name="CellPhone" id="CellPhone" aria-label="telefonoCel" aria-describedby="basic-addon1">
                      </div>
                    </div>
                  </div>
                  <div class="col-sm">
                    <div class="form-group">
                      <label for="correo">Correo electrónico</label>
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                         <span class="input-group-text" id="basic-addon1"><i class="material-icons">email</i></span>
                        </div>
                        <input type="email" class="form-control" placeholder="Correo electronico" name="Email" id="Email" aria-label="Username" aria-describedby="basic-addon1">
                      </div>
                    </div>
                  </div>
                </div>

                <!-- mascota1 -->
                <h3 class="subtitleform">Mascota No. 1</h3>
                <div class="form-row">
                  <div class="col-12 col-sm-6">
                    <div class="form-group">
                      <label for="nombres">Nombre</label>
                      <input type="text" class="form-control" name="Name" id="Name" placeholder="Escriba los nombres del afiliado">
                    </div>
                  </div>
                  <div class="col-12 col-sm-6">
                    <div class="form-group">
                      <label for="apellidos">Raza</label>
                      <input type="text" class="form-control" name="LastName" id="LastName" placeholder="Escriba los apellidos del afiliado">
                    </div>
                  </div>
                </div>
                <div class="form-row">
                  <div class="col-6 col-sm-6">
                    <div class="form-group">
                      <label for="fecha-nacimiento">Fecha de nacimiento</label>
                      <input type="date" class="form-control" name="DateBirthday" id="DateBirthday">
                    </div>
                  </div>
                  <div class="col-12 col-sm-6">
                    <div class="form-group">
                      <label for="genero">Genero</label>
                      <select class="custom-select" name="Genero" id="Genero">
                    <option value="MASCULINO" >MASCULINO</option>
                    <option value="FEMENINO">FEMENINO</option>
                  </select>
                    </div>
                  </div>
                </div>
                <div class="form-row">
                     <div class="col-12">
                          <div class="input-group mb-3">
                               <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                    <label class="custom-file-label" for="inputGroupFile01">Elige la foto</label>
                               </div>
                          </div>
                     </div>
                </div>

                <!-- mascota2 -->
                <h3 class="subtitleform">Mascota No. 2</h3>
                <div class="form-row">
                  <div class="col-12 col-sm-6">
                    <div class="form-group">
                      <label for="nombres">Nombre</label>
                      <input type="text" class="form-control" name="Name" id="Name" placeholder="Escriba los nombres del afiliado">
                    </div>
                  </div>
                  <div class="col-12 col-sm-6">
                    <div class="form-group">
                      <label for="apellidos">Raza</label>
                      <input type="text" class="form-control" name="LastName" id="LastName" placeholder="Escriba los apellidos del afiliado">
                    </div>
                  </div>
                </div>
                <div class="form-row">
                  <div class="col-6 col-sm-6">
                    <div class="form-group">
                      <label for="fecha-nacimiento">Fecha de nacimiento</label>
                      <input type="date" class="form-control" name="DateBirthday" id="DateBirthday">
                    </div>
                  </div>
                  <div class="col-12 col-sm-6">
                    <div class="form-group">
                      <label for="genero">Genero</label>
                      <select class="custom-select" name="Genero" id="Genero">
                    <option value="MASCULINO" >MASCULINO</option>
                    <option value="FEMENINO">FEMENINO</option>
                  </select>
                    </div>
                  </div>
                </div>
                <div class="form-row">
                     <div class="col-12">
                          <div class="input-group mb-3">
                               <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                    <label class="custom-file-label" for="inputGroupFile01">Elige la foto</label>
                               </div>
                          </div>
                     </div>
                </div>
                <h3 class="terminos">Terminos y condiciones</h3>
                <blockquote>
                     Como nuevo suscriptor a Familia Vital será un placer servirle a usted, su familia y sus mascotas, para que esté al tanto de todos los privilegios que usted recibe desde el momento de su suscripción, le solicitamos leer detenidamente nuestrss TERMINOS Y CONDICIONES DE MEMBRESIA. Con gusto nuestros asesores atenderán sus consultas.
                     </br>
                     <strong>Membresia</strong>
                     La membresía Familia Vital está disponible para toda la comunidad y sus mascotas domésticas. Familia Vital se reserva el derecho de negar o revocar la membresía a cualquier solicitante. Nuestra membresía está sujeta a cada una y todas las reglas adoptadas por Familia Vital y estas reglas podrán ser reformadas sin previo aviso.
                     </br>
                     <strong>Tarjetas de Membresia y su costo</strong>
                     El monto que usted cancela por su membresía cubre un período de 365 días contados a partir de la fecha de la inscripción del suscriptor principal. Todas las tarjetas adicionales tendrán la misma fecha de expiración que la tarjeta principal. Su tarjeta de Membresía es válida para acceder a las tarifas y servicios preferenciales en los diferentes establecimientos (restaurantes, centros educativos, centros de belleza, supermercados, veterinarias, farmacias, papelerías, gimnasios; etc.) que hacen parte del club familia vital a nivel nacional, debe ser presentada para pagar en la caja. Usted podrá verificar en nuestra página web www.clubfamiliavital.com y redes sociales como Facebook: familia vital, Instagram: @familia.vital, los establecimientos en los cuales usted tendrá beneficios y tarifas preferenciales. Las tarjetas perdidas o robadas deberán ser reportadas inmediatamente al Departamento de Membresía de familia vital. Las tarjetas de membresía no son transferibles.
                     </br>
                     Renovación, Adición o Cancelación de Tarjeta
                     El suscriptor principal tiene la potestad de autorizar la renovación o adición de miembros para completar el núcleo y es el responsable directo de esa cuenta. Anualmente se le notificará la fecha de su próxima renovación. Usted podrá pagar el costo de su renovación por la pagina web www.clubfamiliavital.com con los medios de pago alli presentados y por medio de recaudo en efectivo con un asesor autorizado.
                     La renovación de la membresía debe ser pagada para todos los miembros (tarjeta principal y adicionales) al momento del vencimiento de la misma, el pago corresponderá a la tarifa definida por familia vital para el año correspondiente. Familia Vital extenderá automáticamente su membresía por un periodo de 12 meses a partir de la fecha de pago. Su tarjeta no será reemplazada.
                     </br>
                     <strong>Satisfacción garantizada</strong>
                     Si usted no se encuentra satisfecho con los servicios prestados por Familia vital, podrá acudir a nuestro servicio contáctenos y reportar la insatisfacción, inmediatamente nuestros asesores resolverán su situación particular.
                     </br>
                      <strong>Pago</strong>
                     Los pagos pueden ser realizados en efectivo, tarjeta de débito o crédito por medio de la página web www.clubfamiliavital.com o por recaudo a domicilio con un asesor autorizado. El costo anual la membresía será de $ 150.000 tarifa válida para el año 2018 (este valor aplica para doce meses después del día de suscripción) este valor comprende un número de suscriptores de uno hasta diez y dos mascotas domésticas. Este valor será cancelado en una sola cuota.
                     </br>
                     <strong>Política de Devoluciones </strong>
                     Si usted decide realizar el pago de un servicio médico o veterinario y no le es posible acceder al servicio cancelado, este dinero no será devuelto en efectivo, quedará disponible para la reasignación la cita médica requerida inicialmente; dado el caso que usted decida cambiar el servicio y/o proveedor y la tarifa sea mayor a la inicialmente pagada, el suscriptor realizar el pago del excedente correspondiente para asignación del nuevo servicio requerido.
                     </br>
                     <strong>Política de Garantía </strong>
                     Familia Vital cuenta con una red de servicios habilitada por los entes de vigilancia y control, lo cual asegura que los servicios prestados cuentan con calidad y oportunidad.
                     </br>
                     <strong>Políticas Generales </strong>
                     Las asesorías virtuales, evolución y seguimiento serán única y exclusivamente recomendaciones teniendo como referencia una prestación de servicio de salud o veterinaria efectiva.
                     Posterior a la suscripción y siempre y cuando el número total de los suscriptores inicialmente no haya logrado el tope máximo de suscripción (10 personas 2 mascotas), Familia Vital permitirá la inclusión de nuevos suscriptores hasta llegar al tope máximo, teniendo en cuenta que los nuevos suscriptores tendrán la misma vigencia para la prestación de los servicios que los suscriptores inicialmente inscritos.
                     Los suscriptores no podrán ser modificables por ninguna razón ni circunstancia.
                     </br>
                     Solo se podrán suscribir mascotas domésticas.
                     </br>
                     Para la prestación del servicio a mascotas, su identificación corresponderá al código de suscripción de su Núcleo, junto con los datos entregados por su dueño en momento de la suscripción, estos datos serán constatados por el proveedor; así mismo el dueño de la mascota autoriza el uso de una fotografía del animal para fin de verificación de la prestación.
                </blockquote>

               <div class="form-group">
                    <div class="form-check">
                         <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                         <label class="form-check-label" for="invalidCheck">
                         Acepta los terminos y condiciones
                         </label>
                         <div class="invalid-feedback">
                         You must agree before submitting.
                         </div>
                    </div>
               </div>
               <div class="form-row ">
                 <div class="col-4 offset-md-4">
                   <button type="submit" class="text-center btn btnCargue btn-block ">Enviar</button>
                 </div>
               </div>
              </form>
            </div>
     </main>
     <!-- Section footer -->
     <?php require ("../dashboard/footer.php"); ?>
     <?php require ("../dashboard/copyright.php"); ?>
</body>
<!-- sdk_Facebook -->
</html>
