<?php

class City {
    //Constructs City object taking in a string provided by OWM text file
    public function __construct($cityString) {
        //The string is tab separated so we explode over a tab
        $cityValueArray = explode("\t" ,$cityString);
        //OWM text data only has 5 vales per line
        if (isset($cityString)) {
            if (sizeof($cityValueArray) === 5) {
                $this->cityID = $cityValueArray[0];
                $this->name = $cityValueArray[1];
                $this->latitude = $cityValueArray[2];
                $this->longitude = $cityValueArray[3];
                $this->countryCode = $cityValueArray[4];
            } else {
                throw new Exception("IncorrectNumberOfValues", 1);
            }
        } else {
            throw new Exception("EmptyConstructor", 1);
        }
    }
}
