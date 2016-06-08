<?php

use PokePHP\PokeApi;

class ClientTest extends \PHPUnit_Framework_TestCase
{
    public function testResourceList()
    {
        $poke = new PokeApi();

        $response = $poke->resourceList('evolution-chain', '20', '20');

        $this->assertJson($response, 'message');
    }

    public function testBerry()
    {
        $poke = new PokeApi();

        $response = $poke->berry('1');

        $this->assertJson($response, 'message');
    }
}
