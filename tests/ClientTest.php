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

        //json files to match
        $berryJson = json_decode('/responses/berry.json');
        $responseJson = json_decode($responseJson);

        $this->assertTrue(json_match($responseJson, $berryJson));

        //$this->assertJson($response, 'message');
    }

    //Check for matching json
    public function json_match($a, $b)
    {
        if (count(array_diff_assoc($a, $b))) {
            return false;
        }
        // we know that the indexes, but maybe not values, match.
        // compare the values between the two arrays
        foreach ($a as $k => $v) {
            if ($v !== $b[$k]) {
                return false;
            }
        }
        // we have identical indexes, and no unequal values
        return true;
    }
}
