<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Campeonato{
    
    private $id;
    private $codigo;
    private $nombre;
    private $fechainicio;
    private $fechatermino;
    private $cantidadPartidos;
    function __construct($id, $codigo, $nombre, $fechainicio, $fechatermino, $cantidadPartidos) {
        $this->id = $id;
        $this->codigo = $codigo;
        $this->nombre = $nombre;
        $this->fechainicio = $fechainicio;
        $this->fechatermino = $fechatermino;
        $this->cantidadPartidos = $cantidadPartidos;
    }
    function getId() {
        return $this->id;
    }

    function getCodigo() {
        return $this->codigo;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getFechainicio() {
        return $this->fechainicio;
    }

    function getFechatermino() {
        return $this->fechatermino;
    }

    function getCantidadPartidos() {
        return $this->cantidadPartidos;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setCodigo($codigo) {
        $this->codigo = $codigo;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setFechainicio($fechainicio) {
        $this->fechainicio = $fechainicio;
    }

    function setFechatermino($fechatermino) {
        $this->fechatermino = $fechatermino;
    }

    function setCantidadPartidos($cantidadPartidos) {
        $this->cantidadPartidos = $cantidadPartidos;
    }

        function ActualizarCampeonato(){
        /*Verficamos la existencia*/
        $db= new DBConnect();
        $dblink=$db->conexion();
        
        if (!isset($dblink)){
            return false;
        }
        
        $PDOst=$dblink->prepare('update campeonato
                                 set codigo=?,nombre=?,fechainicio=?,fechatermino=?,cantidadPartidos=?
                                 where id=?');
        echo $this->id;
        $PDOst->execute(array($this->codigo,$this->nombre,$this->fechainicio,$this->fechatermino,$this->id));

      /*  if ( $row=$PDOst->fetch(PDO::FETCH_OBJ)){
            return true;
        }
        else{
             return false;   
        }
        */
    }
        function InsertarCampeonato(){
        /*Verficamos la existencia*/
        $db= new DBConnect();
        $dblink=$db->conexion();
        
        if (!isset($dblink)){
            return false;
        }
        
        $PDOst=$dblink->prepare('INSERT INTO campeonato (codigo, nombre, fechainicio,fechatermino,cantidadpartidos) VALUES (?,?,?,?,?)');
        echo $this->id;
        $PDOst->execute(array($this->codigo,$this->nombre,$this->fechainicio,$this->fechatermino,$this->cantidadPartidos));

      /*  if ( $row=$PDOst->fetch(PDO::FETCH_OBJ)){
            return true;
        }
        else{
             return false;   
        }
        */
    }
    function EliminarCampeonato(){
        /*Verficamos la existencia*/
        $db= new DBConnect();
        $dblink=$db->conexion();
        
        if (!isset($dblink)){
            return false;
        }
        
        $PDOst=$dblink->prepare('INSERT INTO campeonato (codigo, nombre, fechainicio,fechatermino,cantidadpartidos) VALUES (?,?,?,?,?)');
        echo $this->id;
        $PDOst->execute(array($this->codigo,$this->nombre,$this->fechainicio,$this->fechatermino,$this->cantidadPartidos));

      /*  if ( $row=$PDOst->fetch(PDO::FETCH_OBJ)){
            return true;
        }
        else{
             return false;   
        }
        */
    }



}