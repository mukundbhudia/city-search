<?php
require_once "src/CityBuilder.php";

class CityBuilderTest extends PHPUnit_Framework_TestCase {

    public function testBasic() {
        $this->assertEquals(2, 1 + 1);
    }

    public function testItCanHandleBlankCityData() {
        $cityData = 'id	nm	lat	lon	countryCode
        819827	Razvilka	55.591667	37.740833	RU
        524901	Moscow	55.752220	37.615555	RU
        895417	Banket	-17.383329	30.400000	ZW
';

        $cities = new CityBuilder($cityData);

        $this->assertEquals(3, count($cities->getCitiesDetails()));
    }

    public function testItcanGetNumberOfCities() {
        //TODO: Need to move to a test setup
        $cityData = 'id	nm	lat	lon	countryCode
        819827	Razvilka	55.591667	37.740833	RU
        524901	Moscow	55.752220	37.615555	RU
        1271881	Firozpur Jhirka	27.799999	76.949997	IN
        1283240	Kathmandu	27.716667	85.316666	NP
        703448	Kiev	50.433334	30.516666	UA
        1282898	Pokhara	28.233334	83.983330	NP
        3632308	Merida	8.598333	-71.144997	VE
        1273294	Delhi	28.666668	77.216667	IN
        502069	Reshetnikovo	56.450001	36.566666	RU
        3645532	Ciudad Bolivar	8.122222	-63.549721	VE';

        $cities = new CityBuilder($cityData);

        $this->assertEquals(10, count($cities->getCitiesDetails()));
    }

    public function testItCanIgnoreHeaderData() {
        //TODO: Need to move to a test setup
        $cityData = 'id	nm	lat	lon	countryCode
        819827	Razvilka	55.591667	37.740833	RU
        524901	Moscow	55.752220	37.615555	RU';

        $cities = new CityBuilder($cityData);

        $this->assertEquals(2, count($cities->getCitiesDetails()));
    }

    public function testItCanDiscountHeaderData() {
        //TODO: Need to move to a test setup
        $cityData = '819827	Razvilka	55.591667	37.740833	RU
        524901	Moscow	55.752220	37.615555	RU';

        $cities = new CityBuilder($cityData);

        $this->assertEquals(2, count($cities->getCitiesDetails()));
    }

    public function testItCanGetCorrectID() {
        $cityData = '819827	Razvilka	55.591667	37.740833	RU
        524901	Moscow	55.752220	37.615555	RU';

        $testCityBuilder = new CityBuilder($cityData);
        $cities = $testCityBuilder->getCitiesDetails();

        $this->assertEquals("819827", $cities[0]->cityID);
        $this->assertEquals("Razvilka", $cities[0]->name);
        $this->assertEquals("55.591667", $cities[0]->latitude);
        $this->assertEquals("37.740833", $cities[0]->longitude);
        $this->assertEquals("RU", $cities[0]->countryCode);
    }

}
