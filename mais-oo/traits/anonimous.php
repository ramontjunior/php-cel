<?php

// $classAnonymous = '';
$classAnonymous = new class{
   public function log($message){
      return $message;
   }
};

class BankAccount{

   public function withdraw($value, $classAnonymous){
      return $classAnonymous->log('Logging withdraw');
   }
}

$bk = new BankAccount();

// print $classAnonymous->log('Logging withdraw');

/**
 * Classe anônima sendo passada como parãmetro de uma função em forma de variável previammente definida
 */
// print $bk->withdraw(10, $classAnonymous);



/**
 * Classe anônima sendo passada diretamente no parãmetro de uma função
 */

print $bk->withdraw(50, new class{
   public function log($message){
      return $message;
   }
});