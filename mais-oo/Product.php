<?php

declare(strict_types=1); #Essa opção usa-se para que o PHP não fique tentando converter dinamicamente as variaveis tipadas

/**
 * Type Hiting serve para foçar tipos na passagem de parâmetros 
 */

class Product{

   private $name;
   private $price;
   
   
   public function getName(){
      return $this->name;
   }

   public function setName(string $name){ #Aqui tem um Type Hitnig
      $this->name = $name;

      return $this;
   }


   public function getPrice(){
      return $this->price;
   }

   public function setPrice(float $price){ #Aqui tem um Type Hitnig
      $this->price = $price;
      return $this;
   }

}

class Cart{
   
   private $items =[];

   public function addProduct(Product $product){ #Aqui tem um Type Hitnig
      $this->items[] = $product;
   }
   
   #É possivel definir o tipo de saída de uma método
   #basta usar o operador ":" dois pontos e o tipo de saída desejada
   public function getItems(): array{
      return $this->items;
   }
}


$product = new Product();

$product->setName("Curso PHP");
$product->setPrice(20);

$product2 = new Product();

$product2->setName("Curso PHP");
$product2->setPrice(20);

$cart = new Cart();

$cart->addProduct($product);
$cart->addProduct($product2);

print "Produto: " . $product->getName() . " custa R$" . $product->getPrice() . "\n\n\n";

var_dump($cart->getItems());