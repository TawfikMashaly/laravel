<?php

    $conn = mysqli_connect('localhost' , 'root' , '' , 'phpcrud2');

    if(!$conn) {
        die('Connection Failed');
    }