<?php

class BD {

    private $host = "localhost";
    private $user = "root";
    private $pass = "";
    private $bd = "anfp";
    private $cone;

    function __construct() {
        try {
            $this->cone = mysqli_connect($this->host, $this->user, $this->pass, $this->bd);
        } catch (Exception $ex) {
            echo $ex->getTraceAsString();
        }
    }

    //Insertar-Eliminar-Actualizar
    function sqlOperacion($sql) {
        try {
            $resp = mysqli_query($this->cone, $sql);
            return mysql_affected_rows($this->cone);
        } catch (Exception $ex) {
            echo $ex->getTraceAsString();
        }
    }

    //Listar y Buscar
    function sqlSeleccion($sql) {
        try {
            $resp = mysqli_query($this->cone, $sql);
            return $resp;
        } catch (Exception $ex) {
            echo $ex->getTraceAsString();
        }
    }

}