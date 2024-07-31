<?php

require_once BASE_PATH . '/app/db/db.php';

class people{
    
    public function get_all_people(db $db, $page = 1) : array{
        $endpoint = "people/?page=$page";
        $data = $db->set_connection(trim($endpoint));
        return $data;
    }

    public function get_people_by_id(db $db, $id) : array{
        $endpoint = "people/$id";
        $data = $db->set_connection(trim($endpoint));
        return $data;
    }

}

?>
