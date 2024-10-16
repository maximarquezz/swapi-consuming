<?php

class SerpApiService {
    private $apiKey;

    public function __construct() {
        $this->apiKey = '70bc754bb7356afbd0633807fff0e10458d4d621be862d6a1bf13febdc022208';
    }

    public function getImageForQuery($query) {
        $query = urlencode($query);
        $url = "https://serpapi.com/search.json?q={$query}&tbm=isch&api_key={$this->apiKey}";
        $response = file_get_contents($url);
        $data = json_decode($response, true);

        return $data['images_results'][0]['thumbnail'] ?? null;
    }
}

?>