<?php

class Car{
      public $color;
      public $year;
      public $model;
      
      public function __construct($color, $year, $model){
            $this->color = $color;
         $this->year  = $year;
         $this->model = $model;
         
      }

      public function __destruct(){
         print "Removing object " . __CLASS__ . "\n";
      }

      public function run(){
         return $this->model . " is running...";
      }
      public function stop(){
         return $this->model . " is stopped...";
      }
}

$car = new Car("White", 1990, "Celta");

// $car->color = "White";
// $car->year = '1990';
// $car->model = "Celta";

// print $car->run();
// print $car->stop();


$car2 = new Car("Black", 2020, "S10");

// $car2->color = "Black";
// $car2->year = '2020';
// $car->model = "S10";

print $car2->model;

print $car2->run();
print $car2->stop();