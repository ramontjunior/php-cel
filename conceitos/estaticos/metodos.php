<?php
class Html{

   public static $mainTag = '<html>';
   const END_TAG = '</html>';
   
   public static function openTagHtml(){
      return self::$mainTag;
   }

   public static function endTagHtml(){
      return self::END_TAG;
   }
}

$html = new Html();

print HTML::openTagHtml();

print HTML::endTagHtml();