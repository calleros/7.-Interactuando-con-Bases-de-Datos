<?php

    $host = "localhost";
    $user = 'c0examen';
    $password = 'C@113r0$';
    $Base = 'c0examen';
    $Conexion;
    function IniciarConexion(){
       try{
       $GLOBALS['Conexion']=mysqli_connect($GLOBALS['host'],$GLOBALS['user'],$GLOBALS['password'],$GLOBALS['Base']);
       }catch(PDOException $e){
       }

    }

    function  DesactivarConexion(){
        $GLOBALS['Conexion']->close();
    }
?>
