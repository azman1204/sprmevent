<?php
include_once '../include/init.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link href="../assets/css/layout2.css" rel="stylesheet" type="text/css">
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js'></script>
    <script src='https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.js'></script>
    <title>SPRM Event Management Portal</title>
</head>
<body>
    <div id='my-wrapper'>
        <div id='my-header'></div>
        <div id='my-menu'>
            <a href='../event/index.php'>Dashboard</a> | 

            <?php if(isAdmin()) : ?>
                <a href='../event/registration.php'>Event Registration</a> | 
            <?php endif; ?>

            <a href='../event/list.php'>Event List</a> | 
            <a href='../home/logout.php'>Logout</a>
        </div>
        <div id='my-content'>

    
