<?php
include '../include/init.php';

$id = $_GET['id'];
$sql = "DELETE FROM event WHERE id = $id";
$db->delete($sql);
header('location:list.php');