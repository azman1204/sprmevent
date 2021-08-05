<?php
$title = $_POST['title'];
$descr = $_POST['descr'];
$event_dt = $_POST['event_dt'];
$status = $_POST['status'];

include '../include/conn.php';
$sql = "INSERT INTO event (title, descr, event_dt, status) 
        VALUES('$title', '$descr', '$event_dt', '$status')";

if (! mysqli_query($conn, $sql)) {
    echo "Error" . mysqli_error($conn); 
    exit;
}

header('location:index.php');