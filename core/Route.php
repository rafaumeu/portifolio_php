<?php

declare(strict_types = 1);

namespace Core;

class Route
{
    protected array $routes = [];

    public function get(string $uri, array $controller): void
    {
        $this->routes['GET'][$uri] = $controller;
    }

    public function run(): void
    {
        $uri    = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $method = $_SERVER['REQUEST_METHOD'];

        if (! isset($this->routes[$method][$uri])) {
            http_response_code(404);
            echo "Error 404";

            exit;
        }
        $routeData        = $this->routes[$method][$uri];
        $controllerClass  = $routeData[0];
        $controllerMethod = $routeData[1];
        $controller       = new $controllerClass();
        $controller->$controllerMethod();
    }
}
