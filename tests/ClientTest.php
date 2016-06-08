<?php

use PokePHP;

class ClientTest extends \PHPUnit_Framework_TestCase
{
    public function testResourceList()
    {
        $poke = new PokeApi();

        $response = $poke->resourceList('evolution-chain', '20', '20');

        $this->assertJson($response, 'message');
    }
}
