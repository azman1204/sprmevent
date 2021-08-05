<?php
session_start(); // mesti panggil func. ini sebelum guna session
include '../include/conn.php';
$user_id = $_POST['user_id'];
$password = $_POST['password'];
echo "$user_id $password";
$password_hash = password_hash($password, PASSWORD_BCRYPT);
$sql = "SELECT * FROM user WHERE user_id = '$user_id'";
$rs = mysqli_query($conn, $sql);
if ($row = mysqli_fetch_array($rs)) {
    // user id match
    if (password_verify($password, $row['password'])) {
        // password match
        echo "user exist";
        $_SESSION['user_id'] =$user_id; // set session $_GET $_POST $_SESSION -> assoc. array
        header('location:../event/index.php');
    } else {
        echo "password does not match";
        exit;
    }
} else {
    // user id x match
    echo "User does not exist";
    exit;
}


