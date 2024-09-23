<?php

    require_once 'includes/connection.php';
    $errors = array();

    if(isset($_POST['register'])){
        // receive all input values from the form
        $user = mysqli_real_escape_string($conn, $_POST['username']);
        $email = mysqli_real_escape_string($conn,$_POST['email']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);
        $confirmPass = mysqli_real_escape_string($conn, $_POST['confirm']);

        if(empty($user)) {array_push($errors,"Username is required");}
        if(empty($email)) {array_push($errors,"Email is required");}
        if(empty($password)) {array_push($errors,"Password is required");}
        if($password != $confirmPass) {
            array_push($errors,"The password does not match .. try again!");
        }
        
        $selectesUser = "SELECT * FROM users WHERE email='$email'";
        $res = mysqli_query($conn, $selectesUser);
        $userRes = mysqli_fetch_assoc($res);
        if($userRes) {
            if($userRes['email'] == $email) {
                array_push($errors, "This Email already exists.");
            }
        }
        if(count($errors) == 0) {
            $pass = md5($password);//encrypting the password before storing it in the database
            $sql="INSERT INTO users (username, email, password) 
            VALUES('$user', '$email','$pass')";
            mysqli_query($conn , $sql);
            $_SESSION['user'] = $user;
            header('location:index.php');
        }else{
            header('location:register.php');
        }
    }