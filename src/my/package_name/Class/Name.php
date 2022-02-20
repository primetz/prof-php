<?php

namespace my\package_name\Class;

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
