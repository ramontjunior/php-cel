<?php

class Produto{
   private $name;
   private $price;
   private $description;
   private $category;


   public function getName(){
      return $this->name;
   }
   
   public function setName($name){
      $this->name = $name;
      return $this;
   }


   public function getPrice(){
      return $this->price;
   }

   public function setPrice($price){
      $this->price = $price;

      return $this;
   }

   
   public function getDescription(){
      return $this->description;
   }

   public function setDescription($description){
      $this->description = $description;

      return $this;
   }


   public function getCategory(){
      return $this->category;
   }

   public function setCategory($category){
      $this->category = $category;

      return $this;
   }
}