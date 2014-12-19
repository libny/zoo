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
}