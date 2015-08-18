<?php
require_once "src/City.php";

class CityTest extends PHPUnit_Framework_TestCase {

    public function testItCanGetCityName() {
        $testCity = new City("819827	Razvilka	55.591667	37.740833	RU");

        $this->assertEquals(819827, $testCity->cityID);
        $this->assertEquals("Razvilka", $testCity->name);
        $this->assertEquals(55.591667, $testCity->latitude);
        $this->assertEquals(37.740833, $testCity->longitude);
        $this->assertEquals("RU", $testCity->countryCode);
    }

    public function testItThrowsErrorForTooManyVariables() {
        try {
            $testCity = new City("819827	Razvilka	55.591667	37.740833	RU	1234");
        } catch (Exception $e) {
            $this->assertEquals('Exception', get_class($e));
            $this->assertEquals('IncorrectNumberOfValues', $e->getMessage());
        }
    }

    public function testItThrowsErrorForTooFewVariables() {
        try {
            $testCity = new City("819827	Razvilka");
        } catch (Exception $e) {
            $this->assertEquals('Exception', get_class($e));
            $this->assertEquals('IncorrectNumberOfValues', $e->getMessage());
        }
    }

    public function testItDoesNotAcceptNoVariables() {
        try {
            $testCity = new City("");
        } catch (Exception $e) {
            $this->assertEquals('Exception', get_class($e));
            $this->assertEquals('IncorrectNumberOfValues', $e->getMessage());
        }
    }

}
