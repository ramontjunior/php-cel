<?php

namespace Ramont\Controller;

class ProductController{
    public function index(){
        return '<h1>Teste ProductController</h1>';
    }
    
    public function show($id){
        return $id;
    }
}