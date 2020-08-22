<?php
class Animal{
   public $name;

   public function sleep(){
      return $this->name. " is sleeping";
   } 

}

class Dog extends Animal{
   
   public function sleep(){
      // return parent::sleep();
      return "Dog $this->name is sleeping";
   }

}

$dog = new Dog();

$dog->name = "Bender";
print $dog->sleep();
