<?php
// Functions extension

class YellowJollyfunctions {
    const VERSION = "0.1";
    public $yellow;         // access to API

    public function featuredImage($yellow, $page) {
      $pathImages = $yellow->yellow->lookup->findMediaDirectory("coreImageLocation");
      if( $page->getHtml("photo") ) {
        return "<img src=/" . $pathImages.$page->getHtml("photo") . " />";
      }
      else return null;
    }
}
