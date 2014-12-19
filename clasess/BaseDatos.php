<?php
/**
 * Created by PhpStorm.
 * User: saul
 * Date: 19/12/2014
 * Time: 1:08
 */

class BaseDatos {

    public static function Conexion(){
        $con = new mysqli("localhost","root","root","sizo");

        if($con->connect_error){

            echo "fallo" + $con->error;
        }
            return $con;
    }

    public static function EjecutarQuery($query){
        $con = BaseDatos::Conexion();
        if($con->query($query) === TRUE) {

        }else{
            echo "fallo";
            echo $query;

            die();
        }


        $con->close();

    }

    public static  function QuerySelect($query){
        $con = BaseDatos::Conexion();
        $result = $con->query($query);
        $arreglo = array();

       if ($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                $arreglo[] = $row;
            }
       }
        $con->close();
        return $arreglo;
    }
}