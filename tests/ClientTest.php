<?php

use PokePHP\PokeApi;

class ClientTest extends \PHPUnit_Framework_TestCase
{
    public function testResourceList()
    {
        $poke = new PokeApi();

        $response = $poke->resourceList('evolution-chain', '20', '20');

        //$this->assertJson($response, 'message');
        $data = json_decode($response->getBody(true), true);
        $this->assertArrayHasKey('count', $data);
    }
}
