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

    /**
     * @return mixed
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * @return mixed
     */
    public function getNombreCientifico()
    {
        return $this->nombreCientifico;
    }

    /**
     * @return mixed
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }
    private $nombreCientifico;
    private $descripcion;
    private $id;

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

    public static function Obtener(){

        $query = "SELECT * FROM especie;";

        $result =BaseDatos::QuerySelect($query);

        $arreglo = array();

        $count = count($result);



        for($x = 0; $x < $count; $x++) {

            $nombre = $result[$x]["Nombre"];
            $nombreCientifico = $result[$x]["NombreCientifico"];
            $descripcion= $result[$x]["Descripcion"];

            $id= $result[$x]["Id"];

            $especie = new Especie($nombre, $nombreCientifico, $descripcion);
            $especie->id =$id;

            $arreglo[] = $especie;

        }

        return $arreglo;
    }
}