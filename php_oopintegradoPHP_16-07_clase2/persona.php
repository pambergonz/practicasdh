<?php

require_once("cliente.php");
require_once("cuenta.php");

class Persona extends Cliente {
  Private $nombre;
  Private $apellido;
  Private $documento;
  Private $nacimiento;
  Private $cuenta;

  public function acreditar($monto, $ultimoMovimiento) {
    $this->balance = $this->balance + $monto;
    $this->setUltimoMovimiento($ultimoMovimiento);
  }

  public function getUltimoMovimiento(){
    return $this->ultimoMovimiento;
  }
  public function setUltimoMovimiento($ultimoMovimiento){
    return $this->ultimoMovimiento = $ultimoMovimiento;
  }

  public function setNombre($nombre){
    $this->nombre = $nombre;
  }
  public function getNombre(){
    return $this->nombre;
  }
  public function setApellido($apellido){
    $this->apellido = $apellido;
  }
  public function getApellido(){
    return $this->apellido;
  }
  public function setDocumento($documento){
    $this->documento = $documento;
  }
  public function getDocumento(){
    return $this->documento;
  }
  public function setNacimiento($nacimiento){
    $this->nacimiento = $nacimiento;
  }
  public function getNacimiento(){
    return $this->nacimiento;
  }
  public function setEmail($email){
    $this->email = $email;
  }
  public function getEmail(){
    return $this->email;
  }
  public function setPass($pass){
    $this->pass = $pass;
  }
  public function getPass(){
    return $this->pass;
  }
}
