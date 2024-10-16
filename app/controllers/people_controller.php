<?php

require_once BASE_PATH . '/app/models/people.php';
require_once BASE_PATH . '/app/db/db.php';
require_once BASE_PATH . '/app/services/servapi_service.php';

$people = new people();
$db = new db();
$serpApiService = new SerpApiService();

$page = $page ?? null;

if (isset($id)) {
    $person = $people->get_people_by_id($db, $id);
    $person['image'] = $serpApiService->getImageForQuery($person['name']);
} else {
    $person_list = $people->get_all_people($db, $page);
}

require_once BASE_PATH . '/app/views/people_view.phtml';

?>