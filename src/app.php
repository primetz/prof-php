<?php

use Geekbrains\Blog\Post;
use Geekbrains\Person\Name;
use Geekbrains\Person\Person;

spl_autoload_register(function ($class) {
    $arr = explode('\\', $class);

    $className = array_pop($arr);

    $className = str_replace('_', DIRECTORY_SEPARATOR, $className);

    $arr[] = $className;


    $file = sprintf('src/%s.php', implode(DIRECTORY_SEPARATOR, $arr));

    if (file_exists($file)) {
        var_dump($file);
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

echo new \my\package_name\Class_Name('John');

echo new \my\package\Class_Name('John');
