<?php
// destroy all registered session
session_destroy();

// redirect to home page
header('location:main.php');