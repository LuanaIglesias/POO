<?php

requiere_once('cliente.php');
abstract class Cuenta{
  private $cbu;
  private $balance;
  private $fechaUltimoMovimiento;

  public function __construct($cbu){
    $this->cbu = $cbu;
  }
  public function setCbu($cbu){
  $this->cbu = $cbu;
  }
  public function getCbu(){
  return $this->cbu;
  }

  public function setBalance($balance){
  $this->balance = $balance;
  }
  public function getBalance(){
  return $this->balance;
  }
  public function setFechaUltimoMovimiento($fechaUltimoMovimiento){
  $this->fechaUltimoMovimiento= $fechaUltimoMovimiento;
  }
  public function getFechaUltimoMovimiento(){
  return $this->fechaUltimoMovimiento;
  }

  public abstract function debitar(int $monto, string $origen);

  public function acreditar(int $monto, int $fechaUltimoMovimiento){
    $this->balance = $this->$balance + $monto;
    $this->fechaUltimoMovimiento = date(d-m-Y);
  }

  public abstract function cobrar(int $cargoCuenta);
}
