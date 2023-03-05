<?php

use PokePHP\Filter;
use PokePHP\PokeApi;

final class ClientTest extends \PHPUnit\Framework\TestCase
{
    public function testResourceList()
    {
        $poke = new PokeApi;

        $response = $poke->search(Filter::EVOLUTION_CHAIN)->limit(20)->request();

        $this->assertJson($response, 'message');
    }

    public function testBerry()
    {
        $poke = new PokeApi;

        $response = $poke->search(Filter::BERRY, 1)->request();

        $this->assertJson($response, 'message');
    }
}
