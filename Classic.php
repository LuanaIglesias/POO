<?php

require_once('Cuenta.php');

class Classic extends Cuenta{

   public function debitar(int $monto){
    if($origen == 'banelco'){
      $montoDebito = $monto * 1.05;

    }
    if($origen == 'link'){
      $montoDebito = $monto * 1.10;

    } else{
      $montoDebito = $monto;

    }
    $this->balance = $balance - $montoDebito;
    $this->fechaUltimoMovimiento = date(d-m-Y);
  }

    public function acreditar(int $monto){
      $montoNuevo = $monto * 0.95;
      parent::acreditar($montoNuevo);
    }

    public function cobrar(int $cargoCuenta){
        $cargoCuenta = 100;
        $this->balance= $balance - $cargoCuenta;
    }




   }
