<?php

require_once("cliente.php");
class Multinacional extends Cliente {
  Private $nombre;
  Private $cuit;
  Private $razonSocial;

  public function construct__($cuit){
    $this->cuit = $cuit;
  }

  public function getNombre() {
    return $this->nombre;
  }
  public function setNombre() {
    $this->nombre = $nombre;
  }

  public function getCuit() {
    return $this->cuit;
  }
  public function setCuit() {
    $this->cuit = $cuit;
  }

}
