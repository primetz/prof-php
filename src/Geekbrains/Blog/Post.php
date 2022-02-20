<?php

namespace Geekbrains\Blog;

use Geekbrains\Person\Person;

class Post
{
    public function __construct(
        private Person $author,
        private string $text,
    )
    {
    }

    public function __toString(): string
    {
        return $this->author . ' пишет: ' . $this->text;
    }
}
