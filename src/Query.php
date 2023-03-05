<?php

declare(strict_types=1);

namespace PokePHP;

final class Query implements \Stringable
{
  private string $filter = '';

  private ?int $limit = null;

  public function __construct(
    private string $base
  ) {
  }

  public function filter(string $filter, mixed $value = null): self
  {
    $this->base .= $filter . '/' . $value . '/';

    return $this;
  }

  public function limit(int $limit): self
  {
    $this->limit = $limit;

    return $this;
  }

  public function __toString(): string
  {
    if (false === isset($this->filter)) {
      throw new \LogicException('Invalid filter');
    }

    if (isset($this->limit)) {
      $this->base .= '?limit=' . $this->limit;
    }

    return $this->base;
  }
}
