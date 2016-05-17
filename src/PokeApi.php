<?php

class PokeApi
{
    public function __construct()
    {
        $this->baseUrl = 'https://pokeapi.co/api/v2/';
    }
    
    public function resourceList($endpoint, $limit = null, $offset = null)
    {
        $url = $this->baseUrl.$endpoint.'/?limit='.$limit.'&offset='.$offset;
        
        return $this->sendRequest($url);
    }
    
    public function berry($lookUp)
    {
        $url = $this->baseUrl.'berry/'.$lookUp;
        
        return $this->sendRequest($url);
    }

    public function sendRequest($url)
    {
        //return $uri;
        $ch = curl_init();

        $timeout = 5;

        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
        $data = curl_exec($ch);

        $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);

        curl_close($ch);

        if ($http_code != 200) {
            return json_encode('An error has occured. Check that your API key is correct');
        }

        return $data;
    }
}
