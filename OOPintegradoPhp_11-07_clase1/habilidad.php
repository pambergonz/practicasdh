<?php

class Habilidad{
  private $nombre;
  private $expertise;

  //ˆ[0-9]$

  public function __construct(string $nombre, int $expertise){
  $this->nombre = $nombre;
  $this->expertise = $expertise;
  }

public function getNombre(){
   $this->nombre;
 }
public function setNombre($nombre){
$this->nombre = $nombre;
}

public function getExpertise(){
   $this->expertise;
 }
public function setExpertise($expertise){
$this->expertise = $expertise;
}




}
