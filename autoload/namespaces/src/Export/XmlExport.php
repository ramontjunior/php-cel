<?php

namespace Ramont\Export;

use Export\Contract\Export;

class XmlExport implements Export{

   public function doExport(){
      return "XML exported";
   }
}

