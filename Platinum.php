<?php

require_once('Cuenta.php');

class Platinum extends Cuenta{
  public function debitar(int $monto){

   if($balance>=5000){
     $montoNuevo = $monto ;

   } else{
     $montoNuevo = $monto * 1.05;

   }
   $this->balance = $balance - $montoDebito;
   $this->fechaUltimoMovimiento = date(d-m-Y);
  }
  public function acreditar(int $monto){

    $montoNuevo = $monto;
    parent::acreditar($montoNuevo);

}
public function cobrar(int $cargoCuenta){
    $cargoCuenta = $this->balance*0.10;
    $this->balance= $balance - $cargoCuenta;
}

}
