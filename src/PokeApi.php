<?php

namespace PokePHP;

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

    public function berryFirmness($lookUp)
    {
        $url = $this->baseUrl.'berry-firmness/'.$lookUp;

        return $this->sendRequest($url);
    }

    public function berryFlavor($lookUp)
    {
        $url = $this->baseUrl.'berry-flavor/'.$lookUp;

        return $this->sendRequest($url);
    }

    public function contestType($lookUp)
    {
        $url = $this->baseUrl.'contest-type/'.$lookUp;

        return $this->sendRequest($url);
    }

    public function contestEffect($id)
    {
        $url = $this->baseUrl.'contest-effect/'.$id;

        return $this->sendRequest($url);
    }

    public function superContestEffect($id)
    {
        $url = $this->baseUrl.'super-contest-effect/'.$id;

        return $this->sendRequest($url);
    }

    public function encounterMethod($lookUp)
    {
        $url = $this->baseUrl.'encounter-method/'.$lookUp;

        return $this->sendRequest($url);
    }

    public function encounterCondition($lookUp)
    {
        $url = $this->baseUrl.'encounter-condition/'.$lookUp;

        return $this->sendRequest($url);
    }

    public function encounterConditionValue($lookUp)
    {
        $url = $this->baseUrl.'encounter-condition-value/'.$lookUp;

        return $this->sendRequest($url);
    }

    public function evolutionChain($id)
    {
        $url = $this->baseUrl.'evolution-chain/'.$id;

        return $this->sendRequest($url);
    }

    public function evolutionTrigger($lookUp)
    {
        $url = $this->baseUrl.'evolution-trigger/'.$lookUp;

        return $this->sendRequest($url);
    }

    public function gameGeneration($lookUp)
    {
        $url = $this->baseUrl.'generation/'.$lookUp;

        return $this->sendRequest($url);
    }

    public function pokedex($lookUp)
    {
        $url = $this->baseUrl.'pokedex/'.$lookUp;

        return $this->sendRequest($url);
    }

    public function version($lookUp)
    {
        $url = $this->baseUrl.'version/'.$lookUp;

        return $this->sendRequest($url);
    }

    public function versionGroup($lookUp)
    {
        $url = $this->baseUrl.'version-group/'.$lookUp;

        return $this->sendRequest($url);
    }

    public function item($lookUp)
    {
        $url = $this->baseUrl.'item/'.$lookUp;

        return $this->sendRequest($url);
    }

    public function itemAttribute($lookUp)
    {
        $url = $this->baseUrl.'item-attribute/'.$lookUp;

        return $this->sendRequest($url);
    }

    public function itemCategory($lookUp)
    {
        $url = $this->baseUrl.'item-category/'.$lookUp;

        return $this->sendRequest($url);
    }

    public function itemFlingEffect($lookUp)
    {
        $url = $this->baseUrl.'item-fling-effect/'.$lookUp;

        return $this->sendRequest($url);
    }

    public function itemPocket($lookUp)
    {
        $url = $this->baseUrl.'item-pocket/'.$lookUp;

        return $this->sendRequest($url);
    }

    public function move($lookUp)
    {
        $url = $this->baseUrl.'move/'.$lookUp;

        return $this->sendRequest($url);
    }

    public function moveAilment($lookUp)
    {
        $url = $this->baseUrl.'move-ailment/'.$lookUp;

        return $this->sendRequest($url);
    }

    public function moveBattleStyle($lookUp)
    {
        $url = $this->baseUrl.'move-battle-style/'.$lookUp;

        return $this->sendRequest($url);
    }

    public function moveCategory($lookUp)
    {
        $url = $this->baseUrl.'move-category/'.$lookUp;

        return $this->sendRequest($url);
    }

    public function moveDamageClass($lookUp)
    {
        $url = $this->baseUrl.'move-damage-class/'.$lookUp;

        return $this->sendRequest($url);
    }

    public function moveLearnMethod($lookUp)
    {
        $url = $this->baseUrl.'move-learn-method/'.$lookUp;

        return $this->sendRequest($url);
    }

    public function moveTarget($lookUp)
    {
        $url = $this->baseUrl.'move-target/'.$lookUp;

        return $this->sendRequest($url);
    }

    public function location($id)
    {
        $url = $this->baseUrl.'location/'.$id;

        return $this->sendRequest($url);
    }

    public function locationArea($id)
    {
        $url = $this->baseUrl.'location-area/'.$id;

        return $this->sendRequest($url);
    }

    public function palParkArea($lookUp)
    {
        $url = $this->baseUrl.'pal-park-area/'.$lookUp;

        return $this->sendRequest($url);
    }

    public function region($lookUp)
    {
        $url = $this->baseUrl.'region/'.$lookUp;

        return $this->sendRequest($url);
    }

    public function ability($lookUp)
    {
        $url = $this->baseUrl.'ability/'.$lookUp;

        return $this->sendRequest($url);
    }

    public function characteristic($id)
    {
        $url = $this->baseUrl.'characteristic/'.$id;

        return $this->sendRequest($url);
    }

    public function eggGroup($lookUp)
    {
        $url = $this->baseUrl.'egg-group/'.$lookUp;

        return $this->sendRequest($url);
    }

    public function gender($lookUp)
    {
        $url = $this->baseUrl.'gender/'.$lookUp;

        return $this->sendRequest($url);
    }

    public function growthRate($lookUp)
    {
        $url = $this->baseUrl.'growth-rate/'.$lookUp;

        return $this->sendRequest($url);
    }

    public function nature($lookUp)
    {
        $url = $this->baseUrl.'nature/'.$lookUp;

        return $this->sendRequest($url);
    }

    public function pokeathlonStat($lookUp)
    {
        $url = $this->baseUrl.'pokeathlon-stat/'.$lookUp;

        return $this->sendRequest($url);
    }

    public function pokemon($lookUp)
    {
        $url = $this->baseUrl.'pokemon/'.$lookUp;

        return $this->sendRequest($url);
    }

    public function pokemonColor($lookUp)
    {
        $url = $this->baseUrl.'pokemon-color/'.$lookUp;

        return $this->sendRequest($url);
    }

    public function pokemonForm($lookUp)
    {
        $url = $this->baseUrl.'pokemon-form/'.$lookUp;

        return $this->sendRequest($url);
    }

    public function pokemonHabitat($lookUp)
    {
        $url = $this->baseUrl.'pokemon-habitat/'.$lookUp;

        return $this->sendRequest($url);
    }

    public function pokemonShape($lookUp)
    {
        $url = $this->baseUrl.'pokemon-shape/'.$lookUp;

        return $this->sendRequest($url);
    }

    public function pokemonSpecies($lookUp)
    {
        $url = $this->baseUrl.'pokemon-species/'.$lookUp;

        return $this->sendRequest($url);
    }

    public function pokemonStat($lookUp)
    {
        $url = $this->baseUrl.'stat/'.$lookUp;

        return $this->sendRequest($url);
    }

    public function pokemonType($lookUp)
    {
        $url = $this->baseUrl.'type/'.$lookUp;

        return $this->sendRequest($url);
    }

    public function language($lookUp)
    {
        $url = $this->baseUrl.'language/'.$lookUp;

        return $this->sendRequest($url);
    }

    /**
     * @param string $url
     */
    public function sendRequest($url)
    {
        $ch = curl_init();

        $timeout = 5;

        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
        $data = curl_exec($ch);

        $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);

        curl_close($ch);

        if ($http_code != 200) {
            return json_encode('An error has occured.');
        }

        return $data;
    }
}
