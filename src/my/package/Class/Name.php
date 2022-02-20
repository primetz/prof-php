<?php

namespace my\package\Class;

class Name
{
    public function __construct(
        private string $name,
    )
    {
    }

    public function __toString(): string
    {
        return $this->name;
    }
}
