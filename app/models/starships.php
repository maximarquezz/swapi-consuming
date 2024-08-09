<?php

require_once BASE_PATH . '/app/db/db.php';

class starships{

    //4 pages
    public function get_all_starships(db $db, $page = 1) : array{
        $endpoint = "starships/?page=$page";
        $data = $db->set_connection(trim($endpoint));
        return $data;
    }

    public function get_starship_by_id(db $db, $id) : array{
        $endpoint = "starships/$id";
        $data = $db->set_connection(trim($endpoint));
        return $data;
    }

}

?>
