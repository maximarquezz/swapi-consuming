<?php

require_once BASE_PATH . '/app/db/db.php';

class films{
    
    public function get_all_films(db $db) : array{
        $endpoint = "films/";
        $data = $db->set_connection(trim($endpoint));
        return $data;
    }

    public function get_film_by_id(db $db, $id) : array{
        $endpoint = "films/$id";
        $data = $db->set_connection(trim($endpoint));
        return $data;
    }

}

?>
