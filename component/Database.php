<?php
class Database {
    public $conn;

    function __construct() {
        $servername = "localhost";
        $username = "root";
        $password = "";
        // Create connection
        $conn = new mysqli($servername, $username, $password);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        // pilih database
        mysqli_select_db($conn, 'sprmevent');
        $this->conn = $conn;
    }

    // return a record
    function findOne($sql) {
        $rs = mysqli_query($this->conn, $sql);
        $row = mysqli_fetch_array($rs);
        return $row;
    }

    function findAll($sql) {
        $rs = mysqli_query($this->conn, $sql);
        $arr = [];
        while ($row = mysqli_fetch_array($rs)) {
            $arr[] = $row;
        }
        return $arr;
    }

    function insert($sql) {
        echo $sql;
        if (! mysqli_query($this->conn, $sql)) {
            echo "Error" . mysqli_error($conn); 
            exit;
        }
        return true;
    }

    function update($sql) {
        if (! mysqli_query($this->conn, $sql)) {
            echo "Error" . mysqli_error($conn); 
            exit;
        }
        return true;
    }

    function delete($sql) {
        if (! mysqli_query($this->conn, $sql)) {
            echo "Error" . mysqli_error($conn); 
            exit;
        }
        return true;
    }

    // prevent SQL injection
    function e($data) {
        return mysqli_real_escape_string($this->conn, $data);
    }
}
?>