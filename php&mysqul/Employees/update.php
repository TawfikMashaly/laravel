<?php

    require_once 'includes/connection.php';
    $id = $_GET['id'];

    if(isset($_POST['edit_employee'])) {
        $name = mysqli_real_escape_string($conn , $_POST['name']);
        $address = mysqli_real_escape_string($conn , $_POST['address']);
        $salary = mysqli_real_escape_string($conn , $_POST['salary']);
        $gender = mysqli_real_escape_string($conn , $_POST['gender']);

        $sql = "UPDATE `employees` SET name='$name',address='$address',
        salary='$salary',gender='$gender' WHERE id=$id";

        if(mysqli_query($conn , $sql)) {
            header('location:index.php');
        }else{
            header("location:edit.php");
        }
    }