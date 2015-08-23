<?php

require_once "src/City.php";
define("headerLine", 1);

class CityBuilder {

    protected $content;
    protected $cityArray = array();

    public function __construct($content) {
        $this->content = $content;
    }

    public function getCities() {
        // $lines = explode(PHP_EOL, $this->content);
        //Ignore first line as it's data header info
        return count($this->cityArray) - headerLine;
    }

    public function getCitiesDetails() {
        $lines = explode(PHP_EOL, $this->content);
        foreach($lines as $line) {
            //Make sure we ignore the header of the file
            if ($line != "id	nm	lat	lon	countryCode" && $line != "") {
                $this->cityArray[] = new City($line);
            }
        }
        return $this->cityArray;
    }

}
