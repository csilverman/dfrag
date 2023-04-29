<?php



class YellowFlickity {
    const VERSION = "0.1.3";
    public $yellow;         // access to API

    // Handle initialisation
    public function onLoad($yellow) {
        $this->yellow = $yellow;
    }

    // Handle page extra data
    public function onParsePageExtra($page, $name) {
        $output = null;
        if ($name=="header") {
            $extensionLocation = $this->yellow->system->get("coreServerBase").$this->yellow->system->get("coreExtensionLocation");
            $output = "<script src=\"{$extensionLocation}jquery-3.6.4.min.js\"></script>";

            $output .= "<script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js\"></script>\n";

            $output .= "<link rel=\"stylesheet\" type=\"text/css\" media=\"all\" href=\"{$extensionLocation}flickity.css\" />";
            $output .= "<script type=\"text/javascript\" src=\"{$extensionLocation}flickity.js\"></script>";
        }
        return $output;
    }
}
