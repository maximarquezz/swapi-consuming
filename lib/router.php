<?php

class router{

    private $routes = [];

    public function set_routes(array $routes){
        $this->routes = $routes;
    }

    public function handle_request(string $current_uri) {
        $current_uri = trim($current_uri, '/');
        
        //Ruta exacta
        if (array_key_exists($current_uri, $this->routes)) {
            $this->routes[$current_uri]();
            return;
        }
        
        //Ruta con id
        foreach ($this->routes as $route => $callback) {
            $pattern = str_replace(':id', '(\d+)', $route);
            $pattern = str_replace('/', '\/', $pattern);
            $pattern = "/^$pattern$/";

            if (preg_match($pattern, $current_uri, $matches)) {
                array_shift($matches);

                if(strpos($route, 'page/:id') !== false){
                    $page = $matches[0];
                    call_user_func($callback, $page);
                } else {
                    foreach ($matches as $match) {
                        if (!preg_match('/^\d+$/', $match)) {
                            header('HTTP/1.0 404 Not Found');
                            echo '404 - Parámetro no válido.';
                            return;
                        }
                    }
                }
    
                call_user_func_array($callback, $matches);
                return;
            }
        }

        //Ruta no encontrada
        header('Location: 404.php');
    }
    
}
