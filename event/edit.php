<?php
include '../include/header2.php';
$id = $_GET['id'];
// query data bg id ini
$sql = "SELECT * FROM event WHERE id = $id";
$event = $db->findOne($sql); // return an array of event
include 'registration.php';