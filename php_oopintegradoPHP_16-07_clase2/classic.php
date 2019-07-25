<?php
class Classic extends Cuenta{


  public function debitar($monto,$cajero){
    if($cajero == "banelco"){
    return $this->balance = $monto - $monto / 100 * 5 . $this->ultimoMovimiento;
    //ver funcion adentro de funcion,instanceof
  } elseif($cajero == "link"){
    return $this->balance = $monto - $monto / 100 * 10 . $this->ultimoMovimiento;
    }
  }

}
