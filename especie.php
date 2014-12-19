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
        <form  name="crearAnimal" class="form-horizontal col-sm-8" role="form" action="crearEspecie.php" method="post">

            <div class="form-group">
                <label for="nombre" class="col-sm-2 control-label">Nombre</label>
                <div class="col-sm-6">
                    <input id="nombre" name="nombre" type="text" class="form-control"  required="">
                </div>
            </div>

            <div class="form-group">
                <label for="nombreCientifico" class="col-sm-2 control-label">Nombre Cientifico</label>
                <div class="col-sm-6">
                    <input name="nombreCientifico" id="nombreCientifico" type="text" class="form-control"  required="">
                </div>
            </div>

            <div class="form-group">
                <label for="descripcion" class="col-sm-2 control-label">Descripcion</label>
                <div class="col-sm-6">
                    <input name="descripcion" id="descripcion" type="text" class="form-control"  required="">
                </div>
            </div>
            <button type="submit" class="btn btn-primary col-sm-2" >Update</button>
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