<?php

require_once("clasess/Animal.php");

$animal = new Animal($_POST["nombre"],$_POST["edad"],$_POST["especie"],$_POST["fechaNacimiento"]);
$animal->Guardar();

header("Location: index.php");
die();