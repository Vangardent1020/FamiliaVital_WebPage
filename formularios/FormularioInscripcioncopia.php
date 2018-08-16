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
              <h1 class="title text-center">Formulario de suscripción de miembros</h1>
              <form action="../app/guardar.php" method="post">
                <div class="row">
                  <div class="col-sm-8">
                    <p>EL diligenciamiento del formulario debe ser en mayusculas, recuerde ingresar el numero de menbresia del afiliado principal.</p>
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label for="id">Número de membresía</label>
                      <input class="form-control" type="text" name="id" id="id" placeholder="00000000">
                    </div>
                  </div>
                </div>
                <h3>Datos de afiliado</h3>
                <div class="form-row">
                  <div class="col-xs-12 col-sm-6">
                    <div class="form-group">
                      <label for="nombres">Nombres</label>
                      <input type="text" class="form-control" name="Name" id="Name" placeholder="Escriba los nombres del afiliado">
                    </div>
                  </div>
                  <div class="col-xs-12 col-sm-6">
                    <div class="form-group">
                      <label for="apellidos">Apellidos</label>
                      <input type="text" class="form-control" name="LastName" id="LastName" placeholder="Escriba los apellidos del afiliado">
                    </div>
                  </div>
                </div>
                <div class="form-row">
                  <div class="col-xs-4- col-sm-4">
                    <div class="form-group">
                      <label for="tipo-documento">Tipo de documento</label>
                      <select class="form-control" name="TipoDoc" id="TipoDoc">
                  <option selected>CC</option>
                  <option >CE</option>
                  <option >RC</option>
                  <option >TI</option>
                </select>
                    </div>
                  </div>
                  <div class="col-xs-8 col-sm-8">
                    <div class="form-group">
                      <label for="numero-documento">Número de documento</label>
                      <input type="tel" class="form-control" name="Doc" maxlength="10" id="Doc" placeholder="Escriba el numero de documento del afiliado sin puntos">
                    </div>
                  </div>
                </div>
                <div class="form-row">
                  <div class="col-xs-6 col-sm-3">
                    <div class="form-group">
                      <label for="fecha-nacimiento">Fecha de nacimiento</label>
                      <input type="date" class="form-control" name="DateBirthday" id="DateBirthday">
                    </div>
                  </div>
                  <div class="col-xs-6 col-sm-6">
                    <div class="form-group">
                      <label for="lugar-nacimiento">Lugar de nacimiento</label>
                      <select class=" form-control selectpicker" data-live-search= "true"  name="PlaceBorn" id="PlaceBorn">
                        <?php
                        require("..app/database.php");
                        $conn = Conectar();
                        $sql=  "SELECT `codigociudad`, `nameciudad` FROM `divipola-ciudad`";
                        $result = $conn->query($sql);
                        //mostrar info
                        if ($result ->num_rows > 0) {
                         while ($row = $result ->fetch_assoc()){
                         ?>
                        <option value="<?php print($row["codigociudad"]); ?>"><?php print($row["nameciudad"]); ?></option>
                        <?php
                         }
                        }
                         ?>
                      </select>
                    </div>
                  </div>
                  <div class="col-xs-12 col-sm-3">
                    <div class="form-group">
                      <label for="genero">Genero</label>
                      <select class="custom-select" name="Genero" id="Genero">
                    <option value="MASCULINO" >MASCULINO</option>
                    <option value="FEMENINO">FEMENINO</option>
                  </select>
                    </div>
                  </div>
                </div>
                <h3>Datos de contacto</h3>
                <div class="form-row">
                  <div class="col-sm-2">
                    <div class="form-group">
                      <label for="departamento">Departamento</label>
                      <select class=" form-control selectpicker" data-live-search= "true"  name="Departamento" id="Departamento">
                        <?php
                        require("..app/database1.php");
                        $conn = Conectar1();
                        $sql=  "SELECT `codigo`, `deptname` FROM `divipola-dept`";
                        $result = $conn->query($sql);
                        //mostrar informacion
                        if ($result ->num_rows > 0) {
                         while ($row = $result ->fetch_assoc()){
                        ?>
                        <option value="<?php print($row["codigo"]); ?>"><?php print($row["deptname"]); ?></option>
                        <?php
                        }
                      }
                         ?>
                      </select>
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="form-group">
                      <label for="ciudad">Ciudad</label>
                      <select class=" form-control selectpicker" data-live-search= "true"  name="Ciudad" id="Ciudad">
                        <?php
                        require("..app/database2.php");
                        $conn = Conectar2();
                        $sql=  "SELECT `codigociudad`, `nameciudad` FROM `divipola-ciudad`";
                        $result = $conn->query($sql);
                        //mostrar info
                        if ($result ->num_rows > 0) {
                         while ($row = $result ->fetch_assoc()){
                         ?>
                        <option value="<?php print($row["codigociudad"]); ?>"><?php print($row["nameciudad"]); ?></option>
                        <?php
                         }
                        }
                         ?>
                      </select>
                    </div>
                  </div>
                  <div class="col-sm-7">
                    <div class="form-group">
                      <label for="direccion">Dirección</label>
                      <input type="text" class="form-control" name="Direction" id="Direction" placeholder="KR 155 # 78B -48">
                    </div>
                  </div>
                </div>
                <div class="form-row">
                  <div class="col-sm">
                    <div class="form-group">
                      <label for="telefono">Teléfono fijo</label>
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
                      <label for="telefonoCel">Teléfono celular</label>
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
                      <label for="correo">Correo electronico</label>
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                         <span class="input-group-text" id="basic-addon1"><i class="material-icons">email</i></span>
                        </div>
                        <input type="email" class="form-control" placeholder="Correo electronico" name="Email" id="Email" aria-label="Username" aria-describedby="basic-addon1">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-row ">
                  <div class="col-4 offset-md-4">
                    <button type="submit" class="text-center btn btn-primary btn-block ">Enviar</button>
                  </div>
                </div>
              </form>
            </div>
     </main>
     <!-- Section footer -->
     <?php require ("dashboard/footer.php"); ?>
     <?php require ("dashboard/copyright.php"); ?>
</body>
<!-- sdk_Facebook -->
</html>
