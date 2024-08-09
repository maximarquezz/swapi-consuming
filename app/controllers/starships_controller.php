<?php

require_once BASE_PATH . '/app/models/starships.php';
require_once BASE_PATH . '/app/db/db.php';

$starships = new starships();
$db = new db();

$page = $page ?? null;

if(isset($id)){
    $starship = $starships->get_starship_by_id($db, $id);
} else {
    $starships_list = $starships->get_all_starships($db, $page);
}

require_once BASE_PATH . '/app/views/starships_view.phtml';

?>