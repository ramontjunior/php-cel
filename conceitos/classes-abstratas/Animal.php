<?php
abstract class Animal{
   public $name;

   public function run(){
      return $this->name. " is running";
   } 

}

class Dog extends Animal{
   
   public function sleep(){
      // return parent::sleep();
      return "Dog $this->name is sleeping";
   }

}


$animal = new Dog();

$animal->name = "Bender";
print $animal->run();
