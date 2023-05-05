<?php

use PokePHP\Filter;
use PokePHP\PokeApi;

final class ClientTest extends \PHPUnit\Framework\TestCase
{
    private PokeApi $client;
    
    public function setUp(): void
    {
        $query = new Query('../responses/berry.json');
        
        $this->client = new PokeApi($query);
    }
    
    public function testResourceList()
    {
        $response = $this->client->search(Filter::EVOLUTION_CHAIN)->limit(20)->request();

        $this->assertJson($response, 'message');
    }

    public function testBerry()
    {
        $response = $this->client->search(Filter::BERRY, 1)->request();

        $this->assertJson($response, 'message');
    }
}
