<?php

declare(strict_types=1);

namespace PokePHP;

final class Query implements \Stringable
{
    private ?string $filter;

    private int $limit  = 20;

    private int $offset = 20;

    private int $page   = 1;

    private string $base;

    public function __construct($base) 
    {
        $this->base = $base;
    }

    public function filter(string $filter, mixed $value = ''): self
    {
        $this->base .= $filter.'/'.$value.'/?';

        $this->filter = $filter;

        return $this;
    }

    public function limit(int $limit = 20): self
    {
        $this->limit = $limit;

        return $this;
    }

    /**
     * this function is to set the offset
     */
    public function offset(int $offset = 20)
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * this function is to simplify the 'offset' as page
     */
    public function page(int $page = 1)
    {
        $this->page = $page;

        return $this;
    }

    public function build()
    {
        if (false === isset($this->filter)) {
            throw new \LogicException('Invalid filter');
        }

        if (isset($this->limit)) {
            $this->base .= '&limit=' . $this->limit;
        }

        /**
         * if offset has setted, so offset will be priority
         * page is second priority
         */
        if (isset($this->offset)) {

            $this->base .= '&offset=' . $this->offset;
        
        }elseif (isset($this->page)) {

            $offset = $this->limit * $this->page;

            $this->base .= '&offset=' . $offset;
        }
    }

    public function clear()
    {
        $this->filter = null;
        $this->limit  = 20;
        $this->offset = 20;
        $this->page   = 1;
    }

    public function __toString(): string
    {
        $this->build();
        
        $finalUrl = $this->base;
        $this->clear();

        return $finalUrl;
    }
}
