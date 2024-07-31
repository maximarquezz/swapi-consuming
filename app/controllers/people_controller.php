<?php

require_once BASE_PATH . '/app/models/people.php';
require_once BASE_PATH . '/app/db/db.php';

$people = new people();
$db = new db();

$page = $page ?? null;

if(isset($id)){
    $person = $people->get_people_by_id($db, $id);
    require_once BASE_PATH . '/app/views/people_view.phtml';
} else {
    $person_list = $people->get_all_people($db, $page);
    require_once BASE_PATH . '/app/views/people_view.phtml';
}

?>