<?php
    require_once 'includes/connection.php';
    $id = $_GET['id'];
    $sql = "SELECT * FROM `employees` WHERE id=$id";
    $res = mysqli_query($conn , $sql);
    $emp = mysqli_fetch_assoc($res);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once 'includes/head.php' ?>
</head>
<body>
<header class="bg-light fs-4 py-3 text-center text-dark">
        <h2> <i class="fa-solid fa-home"></i> Edit Employee </h2>
</header>
 
<section class="container my-5 w-50 mx-auto">
    <form action="update.php?id=<?php echo $emp['id'] ?>" method="post">
        <div class="form-group my-2">
            <label for="name">Employee Name</label>
        <input type="text" class="form-control" 
        id="name" name="name" value="<?php echo $emp['name'] ?>">
    </div>
        <div class="form-group my-2">
            <label for="address">Employee Address</label>
        <input type="text" class="form-control"
         id="address" name="address" value="<?php echo $emp['address'] ?>">
    </div>
        <div class="form-group my-2">
            <label for="salary">Employee Salary</label>
        <input type="number" class="form-control"
         id="salary" name="salary" value="<?php echo $emp['salary'] ?>">
    </div>
    <div class="form-group my-2">
            <label for="male">Male</label>
            <input type="radio" id="male"
             name="gender" value="male"
             <?php echo $emp['gender'] == 'male' ? 'checked' : '' ?>>
            <label for="female">Female</label>
            <input type="radio" name="gender" id="female"
             value="female"
             <?php echo $emp['gender'] == 'female' ? 'checked' : '' ?>
             >
    </div>
    <input type="submit" value="Edit Employee" name="edit_employee" 
    class="btn btn-success">
    </form>
</section>
</body>
</html>