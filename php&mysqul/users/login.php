<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once 'includes/head.php' ?>
</head>
<body>
    <?php include_once 'includes/navbar.php' ?>

    <header class="bg-dark text-light my-5 text-center
             container w-50 mx-auto py-3 fs-4 rounded">
        <h2> Login Now ! </h2>
    </header>

    <section class="my-5 container w-50 mx-auto">
        <!-- Registration Form -->
        <form action="logincontrol.php" method="post">
            <div class="fom-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username"
                name="username">
            </div>
            
            <div class="fom-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password"
                name="password">
            </div>
            
            <input type="submit" value="Login" 
            class="btn btn-dark mt-2" name="login">

            <div class="my-3">
                <strong>Are you not a member ? 
                    <a href="register.php">Register Now</a>
                </strong>
            </div>
        </form>

    </section>
</body>
</html>