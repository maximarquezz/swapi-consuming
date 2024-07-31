<?php

$script_name = $_SERVER['SCRIPT_NAME'];
$base_path = basename(dirname($script_name));

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once BASE_PATH . '/lib/router.php';
require_once BASE_PATH . '/app/models/people.php';

$router = new Router();

$routes = [

    //Rutas base
    '' => function(){
    },
    'people' => function(){
        require_once 'app/controllers/people_controller.php';
    },
    'films' => function(){
        require_once 'app/controllers/films_controller.php';
    },
    'starships' => function(){
        echo "Route: Starships";
        //require_once 'app/controllers/starships_controller.php';
    },
    'vehicles' => function(){
        echo "Route: Vehicles";
        //require_once 'app/controllers/vehicles_controller.php';
    },
    'species' => function(){
        echo "Route: Species";
        //require_once 'app/controllers/species_controller.php';
    },
    'planets' => function(){
        echo "Route: Planets";
        //require_once 'app/controllers/planets_controller.php';
    },

    //Rutas con page
    'people/page/:id' => function($page) {
        echo "Page: $page";
        require_once 'app/controllers/people_controller.php';
    },

    //Rutas con id
    'people/:id' => function($id){
        echo "Route: People with ID: $id";
        require_once 'app/controllers/people_controller.php';
    },
    'films/:id' => function($id){
        echo "Route: Films with ID: $id";
        require_once 'app/controllers/films_controller.php';
    },
    'starships/:id' => function($id){
        echo "Route: Starships with ID: $id";
        //require_once 'app/controllers/starships_controller.php';
    },
    'vehicles/:id' => function($id){
        echo "Route: Vehicles with ID: $id";
        //require_once 'app/controllers/vehicles_controller.php';
    },
    'species/:id' => function($id){
        echo "Route: Species with ID: $id";
        //require_once 'app/controllers/species_controller.php';
    },
    'planets/:id' => function($id){
        echo "Route: Planets with ID: $id";
        //require_once 'app/controllers/planets_controller.php';
    },
];

$router->set_routes($routes);
$current_uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$current_uri = trim(str_replace($base_path, '', $current_uri), '/');
$router->handle_request(trim($current_uri, '/'));

?>
