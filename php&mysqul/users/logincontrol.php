<?php

    session_start();
    require_once 'includes/connection.php';
    $errors = array();

    if(isset($_POST['login'])) {
        // Gather form data
        $user = mysqli_real_escape_string($conn, $_POST['username']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);
        // Check for empty fields
        if (empty($user)) {
            array_push($errors, "Username is required");
        }
        if (empty($password)) {
            array_push($errors, "Password is required");
        }
        
        if(count($errors) == 0) {
            $pass = md5($password);
            
            $sql = "SELECT * FROM users WHERE username='$user' AND 
            password='$pass'";
            $res = mysqli_query($conn , $sql);
            

            if(mysqli_num_rows($res)) {
                $_SESSION['user'] = $user;
                header('location:index.php');
            }else{
                array_push($errors,"Invalid username or password!");
                header('location:login.php');
            }
        }else{
            header('location:login.php');
        }
    }