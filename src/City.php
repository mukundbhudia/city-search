<?php

class City {
    
    public function __construct($cityID, $name, $latitude, $longitube, $countryCode) {
        $this->cityID = $cityID;
        $this->name = $name;
        $this->$latitude = $latitude;
        $this->$longitube = $longitube;
        $this->$countryCode = $countryCode;
    }
}
