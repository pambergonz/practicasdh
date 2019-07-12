<?php

class Usuario {
  private $nombre;
  private $mail;
  private $contraseña;

  function __construct(string $nombre, string $mail, int $contraseña) {
    $this->nombre = $nombre;
    $this->mail = $mail;
    $this->contraseña = $contraseña;

  }



public function getNombre():string {
  return $this->nombre;
}

public function setNombre(string $unNombre) {
  $this->nombre = $unNombre;
}

public function getMail(){
  return $this->mail;
}
public function setMail(string $unMail) {
  $this->mail = $unMail;
}

public function getContraseña(){
return $this->contraseña;
 }
public function setContraseña(int $unaContraseña) {
   $this->contraseña = $unaContraseña;
 }
}



 ?>
