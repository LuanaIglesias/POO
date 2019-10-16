<?php

require_once('Cuenta.php');

class Black extends Cuenta{

  public function debitar(int $monto){
    $montoDebito = $monto;
    $this->balance = $balance - $montoDebito;
    $this->fechaUltimoMovimiento = date(d-m-Y);
  }

  public function acreditar(int $monto){
    if($monto>=1000000){
      $montoNuevo = $monto * 0,96;

    } else{
      $montoNuevo = $monto;
    }
    parent::acreditar($montoNuevo);
  }

  public function cobrar(int $cargoCuenta)
  {
    $date = $this->fechaUltimoMovimiento;
    $weekday = date('w', strtotime($date));
    $cargoCuenta = 500 + 100 * $weekday;
    $this->balance= $balance - $cargoCuenta;
  }

}
