<?php

#----------------------------
# Modo atual
#----------------------------

require __DIR__ . '/autoload_psr4.php';

#Comentado na aula 25
// function autoload($class){
//    // require __DIR__ . '/class/'. $class.'.php';
//    // print $class;
   
//    $baseFolder =  __DIR__ . '/src/';
//    $class = str_replace('\\','/', $class);
//    require $baseFolder . $class . '.php';
// }
//spl_autoload_register('autoload');

if($_GET['export'] == 'xml'){
   #Instanciação dentro dos parênteses e execução do método
   print (new Ramont\Export\XmlExport())->doExport();
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
use Ramont\Export\JsonExport;

if($_GET['export'] == 'json'){
   #Instanciação dentro dos parênteses e execução do método
   print (new JsonExport())->doExport();
}

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