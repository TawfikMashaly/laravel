<?php
    require_once 'includes/connection.php';

    if(isset($_POST['add_employee'])) {
        $name = mysqli_real_escape_string($conn , $_POST['name']);
        $address = mysqli_real_escape_string($conn , $_POST['address']);
        $salary = mysqli_real_escape_string($conn , $_POST['salary']);
        $gender = mysqli_real_escape_string($conn , $_POST['gender']);


        $sql = "INSERT INTO `employees`(name , address , salary , gender)
        VALUES('$name' , '$address' , '$salary' , '$gender')";

        if(mysqli_query($conn , $sql)) {
            header('location:index.php');
        }else{
            header('location:create.php');
        }
    }