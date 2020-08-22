<?php

interface Animal{

   public function sound();
   public function run();

}

class Dog implements Animal{
   
   public function sound(){
      return "Au au";
   }

   public function sleep(){
      return "Dog $this->name is sleeping";
   }

   public function run(){
      return "Dog $this->name is running";
   }

}

$dog = new Dog();

print $dog instanceof Dog;
print $dog instanceof Animal;

$dog->name = "Bender";
print $dog->sleep();