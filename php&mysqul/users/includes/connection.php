<?php

    $conn = mysqli_connect('localhost' , 'root' , '' , 'phpcrud');

    if(!$conn) {
        die("Connection Failed");
    } 