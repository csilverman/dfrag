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


    public function ThePageClasses($yellow, $page) {
      $thisPageTitle = $page->getHtml("titleContent");
      $otherPageClasses = $page->getHtml("pageClasses");

      $fileLocation = $yellow->lookup->isFileLocation($yellow->page->location);
      $pageType = htmlspecialchars($fileLocation? "file" : "directory");
      $pageLayout = $page->getHtml("layout");


      $thisPageTitle = $page->getHtml("titleContent");

      //  Are we on the home page?
      if( $thisPageTitle == "Blog") // $theTopPage->getHtml("titleContent"))
        $onHomePage = true;
      else $onHomePage = false;

      $pageClasses = [
        "layout-".$pageLayout,
        "pageType-".$pageType,
        ($onHomePage) ? ("isHomePage") : ("isntHomePage"),
        $otherPageClasses
      ];

      $thePageClasses = '';

      foreach ($pageClasses as &$class) {
        $thePageClasses .= ' '.$class;
      }
      return $thePageClasses;
    }
}
