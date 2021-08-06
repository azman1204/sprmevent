<?php
session_start();
// user authorization
if (! isset($_SESSION['user_id'])) {
    echo 'No permission';
    exit;
}

include_once '../include/func.php';
include_once '../component/Database.php';
$db = new Database();