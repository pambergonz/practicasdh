<?php
class Celular {
  private $marca;
  private $modelo;
  private $proveedorLinea;
  private $nroTelefono;

  public function __construct($modelo,$proveedorLinea){
    $this->modelo = $modelo;
    $this->proveedorLinea = $proveedorLinea;
  }

  public function getMarca(){
    return $this->marca;
  }
  public function setMarca($marca){
    return $this->marca= $marca;
  }

  public function getModelo(){
    return $this->modelo;
  }
  public function setModelo($modelo){
    return $this->modelo = $modelo;
  }

  public function getProveedorLinea(){
    return $this->proveedorLinea;
  }
  public function setProveedorLinea($proveedorLinea){
    return $this->proveedorLinea = $proveedorLinea;
  }

  public function getNroTelefono(){
    return $this->nroTelefono;
  }
  public function setNroTelefono($nroTelefono){
    return $this->nroTelefono;
  }
}

 ?>
