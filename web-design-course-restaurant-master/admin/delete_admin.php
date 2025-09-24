<?php
// filepath: c:\MAMP\htdocs\web-design-course-restaurant-master\index.php

error_reporting(E_ALL);
ini_set('display_errors', 1);


// ...existing code...





    //include constant file
    include("config/constraint.php");



    //1. Get the ID of Admin to be deleted
    $id = $_GET['id'];

    //create sql to delete admin
    $sql = "DELETE FROM tbl_admin WHERE id=$id";

    //execute the query
    $res = mysqli_query($conn, $sql);

    //check whether the query is executed successfully or not
    if($res==TRUE)
    {
        //query executed successfully and admin deleted
        $_SESSION['delete'] = "<div class='success'>Admin deleted successfully.</div>";
        header('location:'.SITEURL.'admin/manage_admin.php');
    

    }

    else
    {
        //failed to delete admin
        $_SESSION['delete'] = "<div class='failed'>Failed to delete admin. Try again later.</div>";
        header('location:'.SITEURL.'admin/manage_admin.php');
    }
    //redirect to manage admin page with message


?>