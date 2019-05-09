<?php
include ("../clases/Campeonato.php");
include ("../lib/db.php");
include("../lib/constantes.php");

$db= new DBConnect();
        $dblink=$db->conexion();
        
        if (!isset($dblink)){
            return false;
        }
 $sql = "DELETE FROM campeonato WHERE nombre = :nombre";
     $stmt = $dblink->prepare($sql);
    $nombre=$_POST["nombre"];
        $stmt->execute([':nombre' =>$nombre ]);
 
        return $stmt->rowCount();
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "Record deleted successfully";
    
   
