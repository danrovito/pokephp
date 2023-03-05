<?php

declare(strict_types=1);

namespace PokePHP;

final class Query implements \Stringable
{
  private string $filter = '';

  private ?string $limit = null, $offset = null;

  public function __construct(
    private string $base
  ) {
  }

  public function filter(string $filter, string $id): self
  {
    $this->base .= $filter . '/' . $id;

    return $this;
  }

  public function limit(?string $limit = null, ?string $offset = null): self
  {
    $this->limit = $limit;

    $this->offset = $offset;

    return $this;
  }

  public function getQuery(): string
  {
    if (false === isset($this->filter)) {
      throw new \LogicException();
    }

    if (isset($this->limit) && isset($this->offset)) {
      $this->base .= '?limit=' . $this->limit . '&offset' . $this->offset;
    }

    return $this->base;
  }

  public function __toString(): string
  {
    return $this->getQuery();
  }
}
