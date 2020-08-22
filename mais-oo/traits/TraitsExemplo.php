<?php

trait MyTrait{

   public function hello(){
      return "Hello World!";
   }

}

trait MyTrait2{

   public function ShowName($name){
      return "Hello, " . $name;
   }

   public function hello(){
      return "Hello World! Powered by Trait 2";
   }

}

class Client{

   /**
    * Quando duas ou mais traits tiverem o mesmo método, pode escolher  
    * qual delas vai ser usada na classe através da seguinte forma:
    */
   use MyTrait, MyTrait2{
      MyTrait::Hello insteadof MyTrait2;  #Está escrito pra usar a função Hello de MyTrait ao invés da de MyTrait2
      MyTrait2::Hello as HelloMy;         #Ou podemos renomear as funções
//    MyTrait2::Hello as protected;       #Aqui eu mudo a visibilidade do método Hello da MyTrait
      MyTrait2::Hello as protected HelloTrait2Protected;       #Aqui eu estou alterando o método da Trait, mas sem afetar a original( É como se eu tivesse criado um método novo)
   }
}

$c = new Client();
print $c->hello();
print "<br>";
print $c->helloMy();
print "<br>";
print $c->ShowName("Ramont");
