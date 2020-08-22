<?php

/**
 * É usada para reutilizar código em linguagens que não permitem herança múltipla
 * Após referenciada, ela funciona como se estivesse sido definida na classe
 */
Trait UploadTrait{

   public function doUpload($file){
      return true;
   }

}

class Product{
   
   use UploadTrait;
}

class Profile{
   
   use UploadTrait;
}


$p = new Product();
print $p->doUpload("Arquivo");

print "<br>";

$person = new Product();
print $person->doUpload("Arquivo");