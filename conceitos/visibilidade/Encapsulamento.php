<?php

class Conta{

   public $saldo;

   public function deposito($money){
      $this->saldo += $money;
   }

   public function sacar($money){
      if($money>$this->saldo){
         return false;
      }else{
         return $this->saldo -= $money;
      }
   }

   public function getSaldo(){
      return $this->saldo;
   }
   
   public function __construct(){
      $this->saldo += 30;
   }
}


$conta = new Conta();

$conta->deposito(10);

$conta->sacar(10);

print $conta->saldo;