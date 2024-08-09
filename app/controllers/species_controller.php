<?php

require_once BASE_PATH . '/app/models/species.php';
require_once BASE_PATH . '/app/db/db.php';

$species = new species();
$db = new db();

$page = $page ?? null;

if(isset($id)){
    $species_one = $species->get_species_by_id($db, $id);
} else {
    $species_list = $species->get_all_species($db, $page);
}

require_once BASE_PATH . '/app/views/species_view.phtml';

?>