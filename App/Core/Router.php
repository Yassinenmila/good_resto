<?php

namespace App\Core;

class Router
{
    private array $routes = [];

    public function get(string $uri, array $action): void
    {
        $this->routes['GET'][$uri] = $action;
    }

    public function post(string $uri, array $action): void
    {
        $this->routes['POST'][$uri] = $action;
    }

    public function dispatch(): void
    {
        $method = $_SERVER['REQUEST_METHOD'];
        $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

        if (isset($this->routes[$method][$uri])) {
            [$controller, $action] = $this->routes[$method][$uri];

            $controllerInstance = new $controller();

            $controllerInstance->$action();
            return;
        }

        http_response_code(404);
        echo "404 - Page introuvable";
    }
}
