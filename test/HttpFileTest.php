<?php
require_once "vendor/Autoload.php";
require_once "src/HttpFile.php";
class HttpFileTest extends PHPUnit_Framework_TestCase {

    public function testBasic() {
        $this->assertEquals(2, 1 + 1);
    }

    public function testItcanAccessHTTP_URL() {
        //Our test URL should give us a robots.txt file
        $testURL = "https://httpbin.org/robots.txt";

        $testHttpFile = new HttpFile($testURL);

        $this->assertEquals("User-agent: *\nDisallow: /deny\n", $testHttpFile->getContent());
    }

}
