<?php

$script_name = $_SERVER['SCRIPT_NAME'];
$base_path = basename(dirname($script_name));

require_once BASE_PATH . '/lib/router.php';
require_once BASE_PATH . '/app/models/people.php';

$router = new Router();

$routes = [

    //Rutas base
    '' => function(){
    },
    'people' => function(){
        require_once BASE_PATH . '/app/controllers/people_controller.php';
    },
    'films' => function(){
        require_once BASE_PATH . '/app/controllers/films_controller.php';
    },
    'starships' => function(){
        require_once BASE_PATH . '/app/controllers/starships_controller.php';
    },
    'vehicles' => function(){
        require_once BASE_PATH . '/app/controllers/vehicles_controller.php';
    },
    'species' => function(){
        require_once BASE_PATH . '/app/controllers/species_controller.php';
    },
    'planets' => function(){
        require_once BASE_PATH . '/app/controllers/planets_controller.php';
    },

    //Rutas con page
    'people/page/:id' => function($page){
        require_once BASE_PATH . '/app/controllers/people_controller.php';
    },
    'planets/page/:id' => function($page){
        require_once BASE_PATH . '/app/controllers/planets_controller.php';
    },
    'starships/page/:id' => function($page){
        require_once BASE_PATH . '/app/controllers/starships_controller.php';
    },
    'species/page/:id' => function($page){
        require_once BASE_PATH . '/app/controllers/species_controller.php';
    },

    //Rutas con id
    'people/:id' => function($id){
        require_once BASE_PATH . '/app/controllers/people_controller.php';
    },
    'films/:id' => function($id){
        require_once BASE_PATH . '/app/controllers/films_controller.php';
    },
    'starships/:id' => function($id){
        require_once BASE_PATH . '/app/controllers/starships_controller.php';
    },
    'vehicles/:id' => function($id){
        require_once BASE_PATH . '/app/controllers/vehicles_controller.php';
    },
    'species/:id' => function($id){
        require_once BASE_PATH . '/app/controllers/species_controller.php';
    },
    'planets/:id' => function($id){
        require_once BASE_PATH . '/app/controllers/planets_controller.php';
    },
];

$router->set_routes($routes);
$current_uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$current_uri = trim(str_replace($base_path, '', $current_uri), '/');
$router->handle_request($current_uri);

?>
