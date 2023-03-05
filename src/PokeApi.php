<?php

namespace PokePHP;

final class PokeApi
{
    private readonly Query $query;

    public function __construct()
    {
        $this->query = new Query('https://pokeapi.co/api/v2/');
    }

    public function search(string $filter, mixed $value = null): self
    {
        $this->query->filter($filter, $value);

        return $this;
    }

    public function limit(int $limit): self
    {
        $this->query->limit($limit);

        return $this;
    }

    public function request(): string|bool
    {
        return (new HttpClient($this->query))->request();
    }
}
