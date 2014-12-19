<?php
/**
 * Created by PhpStorm.
 * User: saul
 * Date: 19/12/2014
 * Time: 1:17
 */
require_once("BaseDatos.php");

class Especie {

    private $nombre;
    private $nombreCientifico;
    private $descripcion;

    public function __construct($nom, $nombreCientifico,$descripcion){

        $this->nombre = $nom;
        $this->nombreCientifico = $nombreCientifico;
        $this->descripcion = $descripcion;
    }

    public function Guardar(){
        $query = "
                INSERT INTO especie VALUES
                (
                NULL ,
                '$this->nombre',
                 '$this->nombreCientifico',
                  '$this->descripcion');";
        BaseDatos::EjecutarQuery($query);
    }
}