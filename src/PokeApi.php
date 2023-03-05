<?php

namespace PokePHP;

class PokeApi
{
    private const URL = 'https://pokeapi.co/api/v2/';

    public function resourceList($endpoint, $limit = null, $offset = null)
    {
        $url = self::URL . $endpoint . '/?limit=' . $limit . '&offset=' . $offset;

        return $this->sendRequest($url);
    }

    public function berry($lookUp)
    {
        $url = self::URL . 'berry/' . $lookUp;

        return $this->sendRequest($url);
    }

    public function berryFirmness($lookUp)
    {
        $url = self::URL . 'berry-firmness/' . $lookUp;

        return $this->sendRequest($url);
    }

    public function berryFlavor($lookUp)
    {
        $url = self::URL . 'berry-flavor/' . $lookUp;

        return $this->sendRequest($url);
    }

    public function contestType($lookUp)
    {
        $url = self::URL . 'contest-type/' . $lookUp;

        return $this->sendRequest($url);
    }

    public function contestEffect($id)
    {
        $url = self::URL . 'contest-effect/' . $id;

        return $this->sendRequest($url);
    }

    public function superContestEffect($id)
    {
        $url = self::URL . 'super-contest-effect/' . $id;

        return $this->sendRequest($url);
    }

    public function encounterMethod($lookUp)
    {
        $url = self::URL . 'encounter-method/' . $lookUp;

        return $this->sendRequest($url);
    }

    public function encounterCondition($lookUp)
    {
        $url = self::URL . 'encounter-condition/' . $lookUp;

        return $this->sendRequest($url);
    }

    public function encounterConditionValue($lookUp)
    {
        $url = self::URL . 'encounter-condition-value/' . $lookUp;

        return $this->sendRequest($url);
    }

    public function evolutionChain($id)
    {
        $url = self::URL . 'evolution-chain/' . $id;

        return $this->sendRequest($url);
    }

    public function evolutionTrigger($lookUp)
    {
        $url = self::URL . 'evolution-trigger/' . $lookUp;

        return $this->sendRequest($url);
    }

    public function gameGeneration($lookUp)
    {
        $url = self::URL . 'generation/' . $lookUp;

        return $this->sendRequest($url);
    }

    public function pokedex($lookUp)
    {
        $url = self::URL . 'pokedex/' . $lookUp;

        return $this->sendRequest($url);
    }

    public function version($lookUp)
    {
        $url = self::URL . 'version/' . $lookUp;

        return $this->sendRequest($url);
    }

    public function versionGroup($lookUp)
    {
        $url = self::URL . 'version-group/' . $lookUp;

        return $this->sendRequest($url);
    }

    public function item($lookUp)
    {
        $url = self::URL . 'item/' . $lookUp;

        return $this->sendRequest($url);
    }

    public function itemAttribute($lookUp)
    {
        $url = self::URL . 'item-attribute/' . $lookUp;

        return $this->sendRequest($url);
    }

    public function itemCategory($lookUp)
    {
        $url = self::URL . 'item-category/' . $lookUp;

        return $this->sendRequest($url);
    }

    public function itemFlingEffect($lookUp)
    {
        $url = self::URL . 'item-fling-effect/' . $lookUp;

        return $this->sendRequest($url);
    }

    public function itemPocket($lookUp)
    {
        $url = self::URL . 'item-pocket/' . $lookUp;

        return $this->sendRequest($url);
    }

    public function move($lookUp)
    {
        $url = self::URL . 'move/' . $lookUp;

        return $this->sendRequest($url);
    }

    public function moveAilment($lookUp)
    {
        $url = self::URL . 'move-ailment/' . $lookUp;

        return $this->sendRequest($url);
    }

    public function moveBattleStyle($lookUp)
    {
        $url = self::URL . 'move-battle-style/' . $lookUp;

        return $this->sendRequest($url);
    }

    public function moveCategory($lookUp)
    {
        $url = self::URL . 'move-category/' . $lookUp;

        return $this->sendRequest($url);
    }

    public function moveDamageClass($lookUp)
    {
        $url = self::URL . 'move-damage-class/' . $lookUp;

        return $this->sendRequest($url);
    }

    public function moveLearnMethod($lookUp)
    {
        $url = self::URL . 'move-learn-method/' . $lookUp;

        return $this->sendRequest($url);
    }

    public function moveTarget($lookUp)
    {
        $url = self::URL . 'move-target/' . $lookUp;

        return $this->sendRequest($url);
    }

    public function location($id)
    {
        $url = self::URL . 'location/' . $id;

        return $this->sendRequest($url);
    }

    public function locationArea($id)
    {
        $url = self::URL . 'location-area/' . $id;

        return $this->sendRequest($url);
    }

    public function palParkArea($lookUp)
    {
        $url = self::URL . 'pal-park-area/' . $lookUp;

        return $this->sendRequest($url);
    }

    public function region($lookUp)
    {
        $url = self::URL . 'region/' . $lookUp;

        return $this->sendRequest($url);
    }

    public function ability($lookUp)
    {
        $url = self::URL . 'ability/' . $lookUp;

        return $this->sendRequest($url);
    }

    public function characteristic($id)
    {
        $url = self::URL . 'characteristic/' . $id;

        return $this->sendRequest($url);
    }

    public function eggGroup($lookUp)
    {
        $url = self::URL . 'egg-group/' . $lookUp;

        return $this->sendRequest($url);
    }

    public function gender($lookUp)
    {
        $url = self::URL . 'gender/' . $lookUp;

        return $this->sendRequest($url);
    }

    public function growthRate($lookUp)
    {
        $url = self::URL . 'growth-rate/' . $lookUp;

        return $this->sendRequest($url);
    }

    public function nature($lookUp)
    {
        $url = self::URL . 'nature/' . $lookUp;

        return $this->sendRequest($url);
    }

    public function pokeathlonStat($lookUp)
    {
        $url = self::URL . 'pokeathlon-stat/' . $lookUp;

        return $this->sendRequest($url);
    }

    public function pokemon($lookUp)
    {
        $url = self::URL . 'pokemon/' . $lookUp;

        return $this->sendRequest($url);
    }

    public function pokemonColor($lookUp)
    {
        $url = self::URL . 'pokemon-color/' . $lookUp;

        return $this->sendRequest($url);
    }

    public function pokemonForm($lookUp)
    {
        $url = self::URL . 'pokemon-form/' . $lookUp;

        return $this->sendRequest($url);
    }

    public function pokemonHabitat($lookUp)
    {
        $url = self::URL . 'pokemon-habitat/' . $lookUp;

        return $this->sendRequest($url);
    }

    public function pokemonShape($lookUp)
    {
        $url = self::URL . 'pokemon-shape/' . $lookUp;

        return $this->sendRequest($url);
    }

    public function pokemonSpecies($lookUp)
    {
        $url = self::URL . 'pokemon-species/' . $lookUp;

        return $this->sendRequest($url);
    }

    public function pokemonStat($lookUp)
    {
        $url = self::URL . 'stat/' . $lookUp;

        return $this->sendRequest($url);
    }

    public function pokemonType($lookUp)
    {
        $url = self::URL . 'type/' . $lookUp;

        return $this->sendRequest($url);
    }

    public function language($lookUp)
    {
        $url = self::URL . 'language/' . $lookUp;

        return $this->sendRequest($url);
    }

    public function sendRequest(string $url): string|bool
    {
        return (new HttpClient($url))->request();
    }
}
