<?php

#----------------------------
# Modo atual
#----------------------------
 require __DIR__ . '/vendor/autoload.php';

// require __DIR__ . '/autoload_psr4.php';

use Ramont\Export\{
   JsonExport, 
   XmlExport
};



if($_GET['export'] == 'xml'){
   #Instanciação dentro dos parênteses e execução do método
   print (new XmlExport())->doExport();
}

/**Posso usar a palavra reservada "use" para evitar a repetição do namespace
 * quando se tratar de uma classe específica
 * 
 * Pode chamar várias classes usando o "use" assim:
 * 
 * use Export\{JsonExport, XmlExport};
 * 
 * podendo usar até quebra de linhas para melhorar a leitura
 * 
*/
//use Ramont\Export\JsonExport;

if($_GET['export'] == 'json'){
   #Instanciação dentro dos parênteses e execução do método
   print (new JsonExport())->doExport();
}

#Comentado na aula 25
// function autoload($class){
//    // require __DIR__ . '/class/'. $class.'.php';
//    // print $class;
   
//    $baseFolder =  __DIR__ . '/src/';
//    $class = str_replace('\\','/', $class);
//    require $baseFolder . $class . '.php';
// }
//spl_autoload_register('autoload');

// #----------------------------
// # Modo depreciado
// #----------------------------
//  function __autoload($class){
//    require __DIR__ . '/class/'. $class.'.php';
// }
// if($_GET['export'] == 'xml'){
//    #Instanciação dentro dos parênteses e execução do método
//    print (new XmlExport())->doExport();
// }
// if($_GET['export'] == 'json'){
//    #Instanciação dentro dos parênteses e execução do método
//    print (new JsonExport())->doExport();
// }
#----------------------------
# Modo manual
#----------------------------
// require __DIR__ . '/class/XmlExport.php';
// require __DIR__ . '/class/JsonExport.php';
// if($_GET['export'] == 'xml'){
//    #Instanciação dentro dos parênteses e execução do método
//    print (new XmlExport())->doExport();
// }
// if($_GET['export'] == 'json'){
//    #Instanciação dentro dos parênteses e execução do método
//    print (new JsonExport())->doExport();
// }