<?php

    require_once 'includes/connection.php';
    $id = $_GET['id'];
    $sql = "DELETE FROM `employees` WHERE id=$id";

    if(mysqli_query($conn , $sql)) {
        header('location:index.php');
    }