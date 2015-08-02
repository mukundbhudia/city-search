<?php

class CityBuilder {

    protected $content;

    public function __construct($content) {
        $this->content = $content;
    }

    public function getCities() {
        $lines = explode(PHP_EOL, $this->content);
        foreach($lines as $line) {
            //TODO:explode each line
        }
        return count($lines);
    }

}
