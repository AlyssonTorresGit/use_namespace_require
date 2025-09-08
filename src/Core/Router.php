<?php

namespace App\Core;

class Router
{
    private array $routes = [];
    public function add(string $path, callable $callback): void
    {
        $this->routes[$path] = $callback;
    }
    public function dispatch(string $uri): void
    {
        $path = parse_url($uri, PHP_URL_PATH);

        if (isset($this->routes[$path])) {
            call_user_func($this->routes[$path]);
        } else {
            http_response_code(404);
            echo "<h2>404 - Página não encontrada</h2>";
        }
    }
}
