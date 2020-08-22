<?php
class Printter{

   public function toPrint(){
      return "Imprimindo\n";
   }
}

class HpPrintter extends Printter{

   public function toPrint(){
      return "HP está imprimindo\n";
   }
}

class EpsonPrintter extends Printter{

   public function toPrint(){
      return "Epson está imprimindo\n";
   }
}

$printter = new Printter();
$printter2 = new HpPrintter();
$printter3 = new EpsonPrintter();

print $printter->toPrint();
print $printter2->toPrint();
print $printter3->toPrint();