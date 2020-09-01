<?php 

require_once('../BO/connection.php');

class Employee extends Connection {
    public function Employee () {
        parent:: __construct();
    }

    public function insert_employee($name, $status) {
        $query = 'INSERT INTO employee (name, status) VALUES("'. $name .'", '. $status .')';
        $result = $this->connection_db->query($query);
        return $result;
    }

    public function search_employee($name) {
        $result = $this->connection_db->query('SELECT * FROM employee WHERE name LIKE "%' . $name . '%"');
        $employees = $result->fetch_all(MYSQLI_ASSOC);
        return $employees;
    }

    public function update_employee($id, $name, $status) {
        $query = 'UPDATE employee SET name = "' . $name .'", status = '. $status . ' WHERE id = '. $id;
        $result = $this->connection_db->query($query);
        return $result;
    }

    public function delete_employee($id) {
        $query = 'DELETE FROM employee WHERE id='. $id;
        $result = $this->connection_db->query($query);
        return $result;
    }

}

?>