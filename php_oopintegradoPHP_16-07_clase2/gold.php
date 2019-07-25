<?php
class Gold extends Cuenta{


  public function debitar($monto,$cajero){
    //.se puede setear ultimo movimiento , en vez de hace getter
    if($monto < 5000){
      return $this->balance = $monto - $monto / 100 * 5 . $this->ultimoMovimiento;
    } else {
      return $this->balance = $this->balance + $monto;
    }
  }

}
