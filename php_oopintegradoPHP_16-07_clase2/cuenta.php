<?php
abstract class Cuenta{
  Protected $cbu;
  Protected $balance;
  Protected $ultimoMovimiento;


public function construct__($cbu){
  $this->cbu = $cbu;
}

abstract public function debitar($monto, $cajero);

public function acreditar($monto,$ultimoMovimiento) {
  $this->balance = $this->balance + $monto;
  $this->setUltimoMovimiento($ultimoMovimiento);
}

public function modificarFechaMovimiento($ultimoMovimiento){
  $this->ultimoMovimiento = $ultimoMovimiento;
}

 public function getCbu(){
   return $this->cbu;
 }
 public function setCbu($cbu){
   return $this->cbu = $cbu;
 }

 public function getBalance(){
   return $this->balance;
 }
 public function setBalance($balance){
   return $this->balance = $balance;
 }

  public function getUltimoMovimiento(){
    return $this->ultimoMovimiento;
  }
  public function setUltimoMovimiento($ultimoMovimiento){
    return $this->ultimoMovimiento = $ultimoMovimiento;
  }
}
