<?php

use Geekbrains\Blog\Post;
use Geekbrains\Person\Name;
use Geekbrains\Person\Person;

spl_autoload_register(function ($class) {
    $file = sprintf('src/%s.php', str_replace('\\', DIRECTORY_SEPARATOR, $class));

    if (file_exists($file)) {
        require $file;
    }
});



$post = new Post(
    new Person(
        new Name('Иван', 'Никитин'),
        new DateTimeImmutable(),
    ),
    'Всем привет',
);

echo $post;

echo '<br>';
