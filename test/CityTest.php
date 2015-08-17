<?php
require_once "src/City.php";

class CityTest extends PHPUnit_Framework_TestCase {

    public function testItCanGetCityName() {
        $testCity = new City("819827", "Razvilka", "55.591667", "37.740833", "RU");

        $this->assertEquals(819827, $testCity->cityID);
    }

}
