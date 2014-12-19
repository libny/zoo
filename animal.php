<?php
require_once("clasess/Especie.php");
?>
<!DOCTYPE html>
<html lang="en"">
<head>
    <meta charset="utf-8">
    <title>Sistema Zoologico</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="assets/bootstrap-3.1.1-dist/css/bootstrap.min.css" rel="stylesheet" media="screen"/>
    <link href="assets/bootswatch.min.css" rel="stylesheet" media="screen">
</head>
<body>

<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <a href="../" class="navbar-brand">Sistema de Zoologico</a>
            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>

        <div class="navbar-collapse collapse" id="navbar-main">
            <ul class="nav navbar-nav">
                <li >
                    <a class="dropdown-toggle" data-toggle="dropdown" href="javascript:" >Venta de Boleto<span class="caret"></span></a>
                    <ul class="dropdown-menu" aria-labelledby="themes">
                        <li>
                            <a href="">Venta de Boleto</a>
                            <a href="tipoboleto.php">Crear  Tipo de Boleto </a>
                            <a href="">Listar  Tipo de Boleto </a>
                        </li>
                    </ul>
                </li>
            </ul>
            <ul class="nav navbar-nav">
                <li>
                    <a class="dropdown-toggle" data-toggle="dropdown" href="javascript:" >Animales<span class="caret"></span></a>
                    <ul class="dropdown-menu" aria-labelledby="themes">
                        <li>
                            <a href="animal.php">Crear Animal</a>
                            <a href="especie.php">Crear Especies</a>
                            <a href="listaranimales.php">Listar Animales</a>
                            <a href="listarespecies.php">Listar Especies</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <ul class="nav navbar-nav">
                <li >
                    <a class="dropdown-toggle" data-toggle="dropdown" href="javascript:" >Usuario<span class="caret"></span></a>
                    <ul class="dropdown-menu" aria-labelledby="themes">
                        <li>
                            <a href="">Crear Usuario</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>

    </div>
</div>

<div style="height: 70px;"></div>

<div class="container">

    <div class="row" >
        <div class="page-header">
            <h1> Crear Animal</h1>
            <small>
                Ingrese los datos del animal
            </small>

        </div>
        <form  name="crearAnimal" class="form-horizontal col-sm-8" role="form" action="crearAnimal.php" method="post">

            <div class="form-group">
                <label for="nombre" class="col-sm-2 control-label">Nombre</label>
                <div class="col-sm-6">
                    <input id="nombre" name="nombre" type="text" class="form-control"  required="">
                </div>
            </div>

            <div class="form-group">
                <label for="edad" class="col-sm-2 control-label">Edad</label>
                <div class="col-sm-6">
                    <input name="edad" min="0" id="edad" type="number" class="form-control"  required="">
                </div>
            </div>

            <div class="form-group">
                <label for="especie" class="col-sm-2 control-label">Especie</label>
                <div class="col-sm-6">
                  <select id="especie" name="especie" class="form-control">
                      <?php
                      $especies = Especie::Obtener();

                      $count = count($especies);
                      for($x = 0; $x < $count; $x++) {
                          $especie = $especies[$x];
                          $id =$especie->getId();
                          $nombre = $especie->getNombre();
                          echo "<option value='$id'>$nombre</option>";
                      }
                      ?>

                  </select>
                </div>
            </div>

            <div class="form-group">
                <label for="fechaNacimiento" class="col-sm-2 control-label">Fecha de Nacimiento</label>
                <div class="col-sm-6">
                    <input name="fechaNacimiento" id="fechaNacimiento" type="date" class="form-control"  required="">
                </div>
            </div>
            <button type="submit" class="btn btn-primary col-sm-2" >Crear</button>
        </form>
    </div>

    <div style="height: 70px;"></div>


</div>

<script src="assets/jquery-1.10.2.min.js" > </script>
<script src="assets/bootstrap-3.1.1-dist/js/bootstrap.min.js"> </script>
<link href="assets/bootstrap-multiselect/bootstrap-multiselect.css" rel="stylesheet" />
<script src="assets/bootstrap-multiselect/bootstrap-multiselect.js"></script>



<script src="https://apis.google.com/js/client.js?onload=handleClientLoad"></script>

<script type="text/javascript">

    window.onerror = function(msg, url, line) {
        LE.error({ message: msg, url: url, line: line });
        var suppressErrorAlert = true;
        return suppressErrorAlert;
    };

</script>

</body>
</html>