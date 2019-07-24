<?php

require_once("cliente.php");
class Multinacional extends Cliente {
  Private $cuit;
  Private $razonSocial;

  public function construct__($cuit){
    $this->cuit = $cuit;
  }

  public function getRazonSocial() {
    return $this->razonSocial;
  }
  public function setRazonSocial($razonSocial) {
    $this->razonSocial = $razonSocial;
  }

  public function getCuit() {
    return $this->cuit;
  }
  public function setCuit() {
    $this->cuit = $cuit;
  }

}
