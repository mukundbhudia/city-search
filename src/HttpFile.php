<?php

class HttpFile {

    protected $url;

    public function __construct($url) {
        $this->url = $url;
    }

    public function getContent() {
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $this->url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 3);
        curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($curl, CURLOPT_MAXREDIRS, 3);
        $doc = curl_exec($curl);
        curl_close($curl);

        return $doc;
    }
}

 ?>
