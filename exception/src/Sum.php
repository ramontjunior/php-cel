<?php
namespace Ramont;

use Exception;

class Sum{

   public function doSum($n1, $n2){

      if ($n2 > 10) {
         throw new \Exception("Parâmetro 2 deve ser menor ou igual a 10");
      }
      return $n1 + $n2;
   }
}

