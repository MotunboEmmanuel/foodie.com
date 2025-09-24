<?php
    //start session
    session_start();

    define("SITEURL","http://localhost/web-design-course-restaurant-master/");
    define('LOCALHOST', 'localhost');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', 'root');
    define('DB_NAME', 'food-auth');


// This file is used to set constraints for the admin configuration//
     $conn = mysqli_connect(LOCALHOST, DB_USERNAME, "root", "food-auth") or die("Connection failed: " . mysqli_connect_error());
    $db_select = mysqli_select_db ($conn,"food-auth") or die( mysqli_error());
?>  
