<?php



class YellowMasonry {
    const VERSION = "0.1";
    public $yellow;         // access to API

    // Handle initialisation
    public function onLoad($yellow) {
        $this->yellow = $yellow;
    }

    // Handle page extra data
    public function onParsePageExtra($page, $name) {
        $output = null;
        if ($name=="footer") {
            $extensionLocation = $this->yellow->system->get("coreServerBase").$this->yellow->system->get("coreExtensionLocation");
            $output = "<script type=\"text/javascript\" src=\"{$extensionLocation}/masonry.js\"></script>\n";

            $output .= "<script type=\"text/javascript\" src=\"{$extensionLocation}/masonry-load.js\"></script>\n";
        }
        return $output;
    }
}
