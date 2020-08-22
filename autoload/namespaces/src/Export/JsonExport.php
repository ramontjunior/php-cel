<?php

namespace Ramont\Export;

use Ramont\Export\Contract\Export;

class JsonExport implements Export{

   public function doExport(){
      return "JSON exported";
   }
}
