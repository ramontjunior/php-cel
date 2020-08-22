<?php

class Person{
   public $name;
   private $age = 30;

   public function showName(){
      return $this->name;
   }
   
   public function showAge(){
      return$this->age;
   }

   public function __toString(){
      return "My name is $this->name, and I am $this->age Years old.";
   }
}

class Woman extends Person{

}


$person = new Person();
$person->name = "Ramont Junior";
// $person->age  = 24;

print $person->name;

print $person;


print "\n";
print "\n";
print "\n";

$woman = new Woman();

print $woman->showAge();
