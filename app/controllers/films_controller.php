<?php

require_once BASE_PATH . '/app/models/films.php';
require_once BASE_PATH . '/app/db/db.php';

$films = new films();
$db = new db();

if(isset($id)){
    $film = $films->get_film_by_id($db, $id);
    require_once BASE_PATH . '/app/views/films_view.phtml';
} else {
    $films_list = $films->get_all_films($db);
    require_once BASE_PATH . '/app/views/films_view.phtml';
}

?>