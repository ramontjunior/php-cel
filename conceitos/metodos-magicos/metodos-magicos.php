<?php
/**
 * Métodos mágicos 
 * 
 * __construct & __destruct
 * __set & __get
 * __call & __callStatic
 * __toStrinng
*/

#----------------------------

# Aula de __toStrinng

#----------------------------

class Produto{

   private $props = [];

   public function __get($name){

      return $this->props[$name];

   }

   public function __set($name, $value){
      
      #var_dump([$name,$value]);

      $this->props[$name] = $value;
   }

   public function __toString(){
      // return "Você printou a classe ". __CLASS__;

      return json_encode($this->props);
   }
}

$produto = new Produto();

$produto->name = "Nome do produto";
$produto->price = 20;

print $produto;

#----------------------------

# Aula de __call & __callstatic

#----------------------------

// class Produto{

//    public function __call($name, $params){
//       // print $name;
//       print_r($params); 

//    }

//    public function __callStatic($name, $params){
//       // print $name;
//       print_r($params); 

//    }
// }

// $produto = new Produto();

// print Produto::getConnection("Estatico");

// print $produto->save("Nome do produto", 20);

#------------------------------

# Aula de __get & __set

#------------------------------

// class Produto{

//    private $props = [];

//    public function __get($name){

//       return $this->props[$name];

//    }

//    public function __set($name, $value){
      
//       #var_dump([$name,$value]);

//       $this->props[$name] = $value;
//    }

// }

// $produto = new Produto();

// $produto->name = "Nome do produto";
// $produto->price = 20;

// print $produto->price;