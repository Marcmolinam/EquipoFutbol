<?php
include("/lib/constantes.php");
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.

SKIN: https://bootsnipp.com/snippets/2X0r
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <title></title>

    </head>
    <body>
        <h1>Campeonato</h1>
    <form role="form" method="POST" action="<?=URLBASE?>/controladores/Campeonato.php">
        <div class="form-group">
          <label for="input">ingresar Codigo</label>
          <input type="text" class="form-control" id="codigoCamp" placeholder="Codigo Campeonato">
        </div>
        <div class="form-group">
          <label for="input">ingresar Nombre</label>
          <input type="text" class="form-control" id="nombreCamp" placeholder="Nombre Campeonato">
        </div>
        <div class="form-group">
          <label for="input">Fecha Inicio</label>
          <input type="date" class="form-control" id="fechainicio">
        </div>
        <div class="form-group">
          <label for="input">Fecha Termino</label>
          <input type="date" class="form-control" id="fechatermino">
        </div>
        <div class="form-group">
          <label for="input">Cantidad de Partidos</label>
          <input type="text" class="form-control" id="cantPartidos">
        </div>

        <button type="submit" class="btn btn-primary">ingresar Campeonato</button>
      </form>
    </body>
    </html>
    