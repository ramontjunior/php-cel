<?php

namespace Ramont\Export;

use \Ramont\Export\Contract\Export;

class XmlExport implements Export{

   public function doExport(){
      return "XML exported";
   }
}

