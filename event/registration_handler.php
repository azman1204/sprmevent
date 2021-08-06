<?php
include '../include/init.php';
verifyCsrf();
$title = $db->e($_POST['title']);
$descr = $db->e($_POST['descr']);
$event_dt = $db->e($_POST['event_dt']);
$status = $db->e($_POST['status']);
$id = $db->e($_POST['id']);

if(empty($id)) {
    // insert
    $sql = "INSERT INTO event (title, descr, event_dt, status) 
            VALUES('$title', '$descr', '$event_dt', '$status')";
    $db->insert($sql);
} else {
    // update
    $sql = "UPDATE event SET title = '$title', descr = '$descr', status = '$status', event_dt = '$event_dt' 
            WHERE id = $id";
    $db->update($sql);
}
header('location:list.php');

