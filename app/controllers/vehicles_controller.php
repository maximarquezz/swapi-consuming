<?php

require_once BASE_PATH . '/app/models/vehicles.php';
require_once BASE_PATH . '/app/db/db.php';

$vehicles = new vehicles();
$db = new db();

$page = $page ?? null;

if(isset($id)){
    $vehicle = $vehicles->get_vehicle_by_id($db, $id);
} else {
    $vehicles_list = $vehicles->get_all_vehicles($db, $page);
}

require_once BASE_PATH . '/app/views/vehicles_view.phtml';

?>