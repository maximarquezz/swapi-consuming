<?php

require_once BASE_PATH . '/app/models/planets.php';
require_once BASE_PATH . '/app/db/db.php';

$planets = new planets();
$db = new db();

$page = $page ?? null;

if(isset($id)){
    $planet = $planets->get_planet_by_id($db, $id);
} else {
    $planets_list = $planets->get_all_planets($db, $page);
}

require_once BASE_PATH . '/app/views/planets_view.phtml';

?>