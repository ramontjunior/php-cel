<?php
class User{

   private $name;

   public function getName(){
      return $this->name;
   }

   public function setName($name){
      $this->name = $name;
   }
}

class Admin extends User{

}

$adm = new Admin();
$adm->setName("root");

print $adm->getName();