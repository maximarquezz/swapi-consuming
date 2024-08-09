<?php

require_once BASE_PATH . '/app/db/db.php';

class vehicles{

    //4 pages
    public function get_all_vehicles(db $db, $page = 1) : array{
        $endpoint = "vehicles/?page=$page";
        $data = $db->set_connection(trim($endpoint));
        return $data;
    }

    public function get_vehicle_by_id(db $db, $id) : array{
        $endpoint = "vehicles/$id";
        $data = $db->set_connection(trim($endpoint));
        return $data;
    }

}

?>
