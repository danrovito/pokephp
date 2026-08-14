<?php

namespace PokePHP;

use BadMethodCallException;

final readonly class PokeApi
{
    private Query $query;

    public const DEFAULT = 1;

    public const OBJECT  = 2;

    public const ARRAY   = 3;

    public function __construct()
    {
        $this->query = new Query('https://pokeapi.co/api/v2/');
    }

    public function search(string $filter, mixed $value = ''): self
    {
        $this->query->filter($filter, $value);

        return $this;
    }

    public function limit(int $limit = 20): self
    {
        $this->query->limit( $limit);

        return $this;
    }

    public function offset(int $offset = 20)
    {
        $this->query->offset( $offset);

        return $this;
    }

    /**
     * this function is to simplify the 'offset' as page
     */
    public function page(int $page = 1)
    {
        $this->query->page($page);

        return $this;
    }

    public function request($type = self::DEFAULT)
    {
        $response = (new HttpClient($this->query))->request();

        if ($type == self::ARRAY) {

            return json_decode($response, true);
        
        } elseif ($type == self::OBJECT) {
        
            return json_decode($response);
        
        } else {

            return $response;
        }
    }

}
