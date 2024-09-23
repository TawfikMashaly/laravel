<?php 
    session_start();

    if(!isset($_SESSION['user'])) {
        header('location:login.php');
    }

    if(isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['user']);
        header('location:login.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
        include_once 'includes/head.php'
    ?>
</head>
<body>
    <?php include_once 'includes/navbar.php' ?>
    <section class="container my-5 mx-auto w-50 text-center">
        <?php if(isset($_SESSION['user'])) :?>
            <h2>Welcome <strong class="text-success">
                <?= $_SESSION['user']?></strong>
                , to your dashboard.</h2>
         <?php endif ?>   
    </section>
</body>
</html>