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

    }

    function update($sql) {

    }

    function delete($sql) {

    }
}
?>