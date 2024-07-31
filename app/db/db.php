<?php

class db{
    
    private $api_url = "https://swapi.dev/api/";

    public function set_connection(string $endpoint = "") : array{
        $url = $this->api_url . $endpoint;
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        curl_close($ch);
        $data = json_decode($response, true);
        return $data;
    }

}

?>