<?php

namespace Ramont\Controller;

class ProductController{

   public function index($id){
      return $id;
   }

   public function show($id){
      return "\"" . $id . "\"" . " em Show()";
   }
}

