<?php

require_once('cliente.php');

class Multinacional extends Cliente{
  private $cuit;
  private $razonSocial;

  public function __construct($cuit, $razonSocial){
    $this->cuit = $cuit;
    $this->razonSocial = $razonSocial;

  }
  public function setCuit($cuit){
  $this->cuit = $cuit;
}
  public function getCuit(){
  return $this->cuit;
}
  public function setRazonSocial($razonSocial){
  $this->razonSocial = $razonSocial;
}
  public function getRazonSocial(){
  return $this->razonSocial;
}
}
