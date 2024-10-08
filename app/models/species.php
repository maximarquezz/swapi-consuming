<?php

require_once BASE_PATH . '/app/db/db.php';

class species{

    //4 pages
    public function get_all_species(db $db, $page = 1) : array{
        $endpoint = "species/?page=$page";
        $data = $db->set_connection(trim($endpoint));
        return $data;
    }

    public function get_species_by_id(db $db, $id) : array{
        $endpoint = "species/$id";
        $data = $db->set_connection(trim($endpoint));
        return $data;
    }

}

?>