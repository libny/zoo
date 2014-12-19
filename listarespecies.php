<?php
require_once("clasess/Especie.php")
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
       <div class="panel panel-primary">
           <div class="panel-heading"> Especies</div>
           <div class="panel-body">A continuacion se listan las especies disponibles en el sistema</div>
           <table class="table">
               <thead>
               <th>Id</th>
               <th>Nombre</th>
               <th>Nombre Cientifico</th>
               <th>Descripcon</th>
               </thead>
               <tbody>
               <?php
                 $especies = Especie::Obtener();

               $count = count($especies);


               for($x = 0; $x < $count; $x++) {
                   $especie = $especies[$x];
                   $id =$especie->getId();
                   $nombre = $especie->getNombre();
                   $nombreCientifico = $especie->getNombreCientifico();
                   $descripcion = $especie->getDescripcion();


                   echo "<tr>";
                   echo "<td>$id</td>";
                   echo "<td>$nombre</td>";
                   echo "<td>$nombreCientifico</td>";
                   echo "<td>$descripcion</td>";
                   echo "</tr>";
               }
               ?>

               </tbody>
           </table>


       </div>
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