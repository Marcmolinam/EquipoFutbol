<?php
include ("../clases/Campeonato.php");
include ("../lib/db.php");
include("../lib/constantes.php");

$nombre=$_POST["nombre"];

if (isset($nombre)) {
      $sql = "DELETE from campeonato WHERE nombre='$nombre'"; 
}
   
 
