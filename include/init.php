<?php
session_start();
// user authorization
if (! isset($_SESSION['user_id'])) {
    echo 'No permission';
    exit;
}

include '../component/Database.php';
$db = new Database();