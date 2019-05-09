<?php
include ("../clases/Campeonato.php");
include ("../lib/db.php");
include("../lib/constantes.php");


$db= new DBConnect();
        $dblink=$db->conexion();
        
        if (!isset($dblink)){
            return false;
        }
        $sql = "UPDATE campeonato SET codigo=?,nombre=?,fechainicio=?,fechatermino=?,cantidadPartidos=? WHERE nombre = ?<d";
        $dblink->prepare($sql)->execute([$_POST["codigo"],$_POST["nombre"],$_POST["fechainicio"],$_POST["fechatermino"], $_POST["cantidadPartidos"] ]);

        $stmt->execute();
        echo "Se agrego Correctamente ";
          