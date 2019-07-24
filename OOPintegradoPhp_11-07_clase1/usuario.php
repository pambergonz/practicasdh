<?php

require_once("celular.php");
require_once("habilidad.php");

class Usuario{
  private $nombre;
  private $mail;
  private $contraseña;
  private $celular;
  private $habilidades = [];//[hablidad]
  private $id;

  function __construct(string $nombre, string $mail, int $contraseña) {
    $this->nombre = $nombre;
    $this->mail = $mail;
    $this->contraseña = $contraseña;
    //24- Usuario::$id++;
  }


  public function getId(){
    return $this->id;
  }

  public function setId($id){
    return $this->id= $id;
  }

  public function getNombre(){
     $this->nombre;
   }


  public function getHabilidades(){
    return $this->habilidades;
  }


  //22-array habilidades,adentro array asociativo habilidad con valores en posicion $nombre, $expertise

  public function addHabilidad($habilidad){
   $this->habilidades[] = $habilidad;
  }

  /*23
  public function sabeHacer($nombreHabilidad,$puntajeExpertise){
    foreach ($habilidades as $habilidad){
    }
  }
  */


  public function getProveedorLinea(){
    return $this->getCelular()->getProveedorLinea();
  }

  public function llamar($usuario,$duracionLlamada){
    if($this->getProveedorLinea() == $usuario->getProveedorLinea()){
      return "La llamada es gratis";
    } else {
      return "La llamada sale $" . $duracionLlamada * 10;
    }
  }



  public function getCelular(){
    return $this->celular;
  }

  public function setCelular($celular){
    return $this->celular = $celular;
  }

  public function getMarca(){
    return $this->marca;
  }
  public function getModelo(){
    return $this->modelo;
  }

  public function getMarcaCelular(){
    if ($this->getCelular()->getMarca()=="iphone"){
      return "La marca del celular es: " . $this->getCelular()->getMarca(). ", el modelo del celular es: ". $this->getCelular()->getModelo()
  ." y yo amo iphone";
    }
    else {
      return $this->getCelular()->getMarca(). " " .$this->getCelular()->getModelo();
  };
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
  public function setContraseña($unaContraseña) {
     $this->contraseña = $this->encriptarPass($unaContraseña);
   }
 public function encriptarPass($contraseña){
   return password_hash($contraseña, PASSWORD_DEFAULT);
 }


  public function saludar(){
    return "hola" . $this->nombre;         //getNombre();
  }

  function guardar($usuario){
  file_put_contents("users.json",json_encode($usuario));
   }
}
