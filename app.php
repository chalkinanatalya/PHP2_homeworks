<?php
use Blog_ns\Class_Post;

spl_autoload_register(function ($class) {
    $file = __DIR__ . '\\' . $class . '.php';
    $file = str_replace('\\', DIRECTORY_SEPARATOR, $file);
    $file = str_replace('/', DIRECTORY_SEPARATOR, $file);

    $className = substr($file, strripos($file, DIRECTORY_SEPARATOR) + 1);
    $pathClass = substr($file, 0, strripos($file, DIRECTORY_SEPARATOR) + 1);
    $className = str_replace('_', DIRECTORY_SEPARATOR, $className);
    $file = $pathClass . $className;

    if (file_exists($file)) {
        require $file;
    }
});

$post = new Class_Post(
    'Красный',
    'Всем привет!'
);

print $post;