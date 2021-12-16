<?php
class DatabaseConnection {
    protected $db_host;
    protected $db_username;
    protected $db_password;
    protected $db_databasename;
    protected $db_port;
    protected $db_socket;
    protected $mysqli;

    function __construct() {
        $this->db_host = 'localhost';
        $this->db_username = 'root';
        $this->db_password =  '';
        $this->db_databasename = 'busticketdb';
        $this->db_port = 3306;
        // $this->db_socket = '';
        $this->db_connect();
    }

    private function db_connect() {
        $this->mysqli = new mysqli($this->db_host, $this->db_username,  $this->db_databasename, $this->db_port);
        if ($this->mysqli->connect_error) {
            die('Connection Failed' . $this->mysqli->connect_error);
        }
    }

    function selectData($db_table) {
        $this->db_connect();
        $sql = "SELECT * FROM " . $db_table;
        $sql = $this->mysqli->query($sql);
        
        return $sql;
    }

    function selectSingleRecord($db_table, $id) {
        $this->db_connect();
        $sql = "SELECT * FROM " . $db_table . " WHERE id = " . $id;
        $sql = $this->mysqli->query($sql);

        return $sql;
    }

    function updateData($value1, $value2, $value3,$value4,$value5,$value6,$value7,$value8,$value9,$value10,$value11) {
        $this->db_connect();
        $sql =
        sprintf(
            "UPDATE registered_users SET name = '%s', departure_from = '%s' ,bus_no = '%s',bus_departure = '%s',destination = '%s',total_no = '%s',occupied_seat = '%s',fare = '%s',contact = '%s',datee = '%s' WHERE id = %d",
            $this->mysqli->real_escape_string($value1),
            $this->mysqli->real_escape_string($value2),
            $this->mysqli->real_escape_string($value3),
             $this->mysqli->real_escape_string($value4),
              $this->mysqli->real_escape_string($value5),
               $this->mysqli->real_escape_string($value6),
                $this->mysqli->real_escape_string($value7),
                $this->mysqli->real_escape_string($value8),
                $this->mysqli->real_escape_string($value9),
                $this->mysqli->real_escape_string($value10),
                 $value11
        );

        $sql = $this->mysqli->query($sql);

        if ($sql === true) {
            return "Data Updated";
        } else {
            return "FAILED to execute update query";
        }
    }

    function insertData($value1,$value2,$value3,$value4,$value5,$value6,$value7,$value8,$value9,$value10 ) {
        $this->db_connect();
       $sql = sprintf(
            "INSERT INTO registered_users (name,departure_from,bus_no,bus_departure,destination,total_no,occupied_seat,fare,contact,datee) VALUES ('%s','%s','%s','%s','%s','%s','%s','%s','%s','%s')",
            $this->mysqli->real_escape_string($value1),
            $this->mysqli->real_escape_string($value2),
            $this->mysqli->real_escape_string($value3),
             $this->mysqli->real_escape_string($value4),
              $this->mysqli->real_escape_string($value5),
               $this->mysqli->real_escape_string($value6),
                $this->mysqli->real_escape_string($value7),
                $this->mysqli->real_escape_string($value8),
                $this->mysqli->real_escape_string($value9),
                $this->mysqli->real_escape_string($value10)
        );
        $sql = $this->mysqli->query($sql);

        if($sql === true) {
            return $sql;
        } else {
            return "FAILED to execute INSERT query";
        }
    }

    function deleteData($db_table, $condition) {
        $this->db_connect();
        $sql = "DELETE FROM " . $db_table . " WHERE id = " . $condition;
        $sql = $this->mysqli->query($sql);

        if($sql === true) {
            return "Data deleted successfully";
        } else {
            return "FAILED to execute DELETE query";
        }
    } 
}
