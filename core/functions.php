<?php

declare(strict_types = 1);

use Core\Request;

function base_path(string $path = ''): string
{
    return dirname(__DIR__) . DIRECTORY_SEPARATOR . $path;
}

function dd(mixed ...$dump): void
{
    echo "<pre class='bg-gray-900 text-white p-4 rounded-lg z-50 relative'>";
    var_dump($dump);
    echo "</pre>";

    die();
}

function request(): Request
{
    return new Request();
}

function view(string $view, array $data = []): void {
    foreach ($data as $key => $value) {
        $$key = $value;
    }

    require base_path("views/{$view}.view.php");
}