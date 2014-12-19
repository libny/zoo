<?php

require_once("clasess/Especie.php");

$especie = new Especie($_POST["nombre"],$_POST["nombreCientifico"],$_POST["descripcion"]);
$especie->Guardar();

header("Location: index.php");
die();