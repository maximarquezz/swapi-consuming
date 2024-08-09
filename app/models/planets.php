<?php

require_once BASE_PATH . '/app/db/db.php';

class planets{

    //6 pages
    public function get_all_planets(db $db, $page = 1) : array{
        $endpoint = "planets/?page=$page";
        $data = $db->set_connection(trim($endpoint));
        return $data;
    }

    public function get_planet_by_id(db $db, $id) : array{
        $endpoint = "planets/$id";
        $data = $db->set_connection(trim($endpoint));
        return $data;
    }

}

?>
