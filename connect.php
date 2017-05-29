<?php
$connection = mysqli_connect('localhost', 'root', 'root'); //HOST, USER, PASSWORD
if (!$connection){
    die("Database Connection Failed" . mysqli_error($connection));
}
$select_db = mysqli_select_db($connection, 'db_asinith'); //DB Name
if (!$select_db){
    die("Database Selection Failed" . mysqli_error($connection));
}