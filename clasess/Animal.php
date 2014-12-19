<?php
require_once("BaseDatos.php");

/**
 * Created by PhpStorm.
 * User: saul
 * Date: 19/12/2014
 * Time: 1:07
 */

class Animal {

    private $nombre;
    private $edad;
    private $especie_id;
    private $fechaNacimiento;
    private $id;
    private $fechaIngreso;

    /**
     * @return mixed
     */
    public function getFechaIngreso()
    {
        return $this->fechaIngreso;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

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
    public function getEdad()
    {
        return $this->edad;
    }

    /**
     * @return mixed
     */
    public function getEspecieId()
    {
        return $this->especie_id;
    }

    /**
     * @return mixed
     */
    public function getFechaNacimiento()
    {
        return $this->fechaNacimiento;
    }

    public function __construct($nombre,$edad, $especie_id,$fechaNacimiento){

        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->especie_id = $especie_id;
        $this->fechaNacimiento = $fechaNacimiento;
    }


    public function Guardar(){
        $query = "INSERT INTO animal
                        VALUES
                        (NULL ,
                        '$this->nombre',
                        '$this->edad',
                        now(),
                        '$this->fechaNacimiento',
                        '$this->especie_id',
                        NULL);
                      ";

        BaseDatos::EjecutarQuery($query);
    }

    public function  Obtener(){
        $query = "SELECT * FROM animal;";

        $result =BaseDatos::QuerySelect($query);

        $arreglo = array();

        $count = count($result);



        for($x = 0; $x < $count; $x++) {

            $nombre = $result[$x]["Nombre"];
            $edad = $result[$x]["Edad"];
            $fechaIngreso= $result[$x]["FechaIngreso"];
            $fechaNacimiento= $result[$x]["FechaNacimiento"];
            $especie_id= $result[$x]["Especie_id"];

            $id= $result[$x]["Id"];

            $animal = new Animal($nombre,$edad,$especie_id, $fechaNacimiento);


            $animal->id =$id;
            $animal->fechaIngreso =$fechaIngreso;

            $arreglo[] = $animal;

        }

        return $arreglo;

    }
}