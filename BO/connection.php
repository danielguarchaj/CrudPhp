<?php

include('config.php');
class Connection {
    protected $connection_db;

    public function connection() {
        $this->connection_db = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
        if ($this->connection_db->connect_error) {
            echo "Fallo al conectar a MYSQL: " . $this->connection_db->connect_error;
            return;
        }
        $this->connection_db->set_charset(DB_CHARSET);
    }
}

?>