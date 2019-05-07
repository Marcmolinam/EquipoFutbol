<?php
include ("../clases/Campeonato.php");
include ("../lib/db.php");
include("../lib/constantes.php");


$codigo=$_POST["codigo"];
$nombre=$_POST["nombre"];
$fechainicio=$_POST["fechainicio"];
$fechatermino=$_POST["fechatermino"];
$cantidadPartidos=$_POST["cantidadPartidos"];

$oCamp = new Campeonato(null, $codigo, $nombre, $fechainicio, $fechatermino, $cantidadPartidos);
   
 
$oCamp->InsertarCampeonato();