<?php

require_once('Cuenta.php');

class Gold extends Cuenta{

  public function debitar(int $monto){

   if($origen == 'link'){
     $montoDebito = $monto * 0.95;

   } else{
     $montoDebito = $monto;

   }
   $this->balance = $balance - $montoDebito;
   $this->fechaUltimoMovimiento = date(d-m-Y);
}
  public function acreditar(int $monto){
    if($monto>=25000){
      $montoNuevo = $monto;

    } else{
      $montoNuevo = $monto * 0.97;
    }
    parent::acreditar($montoNuevo);

}
public function cobrar(int $cargoCuenta){
    $cargoCuenta = strlen($this->$apellido)*10 || strlen($this->$razonSocial)*5;
    $this->balance= $balance - $cargoCuenta;
}
}
