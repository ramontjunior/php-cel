<?php

require __DIR__. '/vendor/autoload.php';

$sum = new \Ramont\Sum();

/**
 * Dando certo
 */
//print $sum->doSum(10,30);

/**
 * Lançando uma exception
 */

try {
   print $sum->doSum(10,40);
}catch(\Error $e){

   print $e->getMessage();
   // print $e->getCode();
   // print_r($e->getTrace());

}catch(\Exception $e){

   print $e->getMessage();
}finally{
   print "Aqui é o finally, ele é executado independente de ter dado erro ou não";
}