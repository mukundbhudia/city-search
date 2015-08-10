<?php

class CityBuilder {

    protected $content;

    public function __construct($content) {
        $this->content = $content;
    }

    public function getCities() {
        $lines = explode(PHP_EOL, $this->content);
        //Ignore first line as it's data header info
        return count($lines) - 1;
    }

    public function getCitiesDetails() {
        $lines = explode(PHP_EOL, $this->content);
        foreach($lines as $line) {
            //TODO:explode each line
            // print_r(explode(' ', $line));
        }
        return count($lines);
    }

}
