<?php
include ("../clases/Campeonato.php");
include ("../lib/db.php");
include("../lib/constantes.php");


$db= new DBConnect();
        $dblink=$db->conexion();
        
        if (!isset($dblink)){
            return false;
        }
        
         $stmt = $dblink->prepare("INSERT INTO campeonato (codigo, nombre, fechainicio,fechatermino,cantidadPartidos)
        VALUES (:codigo, :nombre, :fechainicio, :fechatermino, :cantidadPartidos)");
        $stmt->bindParam(':codigo', $codigo);
        $stmt->bindParam(':nombre', $nombre);
        $stmt->bindParam(':fechainicio', $fechainicio);
        $stmt->bindParam(':fechatermino', $fechatermino);
        $stmt->bindParam(':cantidadPartidos', $cantidadPartidos);
        
        // insert a row
        
        $codigo=$_POST["codigo"];
        $nombre=$_POST["nombre"];
        $fechainicio=$_POST["fechainicio"];
        $fechatermino=$_POST["fechatermino"];
        $cantidadPartidos=$_POST["cantidadPartidos"];

        $stmt->execute();
        echo "Se agrego Correctamente ";
          
       