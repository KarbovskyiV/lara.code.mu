<?php

namespace App\Test;

class Test
{
    public function __construct(protected array $config)
    {
    }

    public function config(string $key)
    {
        return $this->config[$key] ?? null;
    }
}
