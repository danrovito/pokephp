<?php

namespace PokePHP;

final readonly class PokeApi
{
    public function __construct(private Query $query)
    {
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
