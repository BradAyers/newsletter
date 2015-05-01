<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Newsletter Upload Page</title>
    <link rel="stylesheet" href="styles/index.css">
    <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="js/events.js"></script>
</head>
<body>
<div class="container">
<?php
    include('db.php');
    $conn = db_connect();
    if ($conn) echo "DB Connected!";
    ?>
