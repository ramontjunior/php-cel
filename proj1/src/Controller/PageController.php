<?php

namespace Ramont\Controller;

use Ramont\View\View;

class PageController{


    public function index(){
        $view = new View('site/index.phtml');
        print $view->render();
        return $view->render();
   }


   // public function index($param){
   //    return "Método PageController.index() chamado";
   // }
}

