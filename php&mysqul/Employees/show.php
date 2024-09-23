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
    <?php include_once 'includes/head.php'; ?>
</head>
<body>
<header class="bg-light fs-4 py-3 text-center text-dark">
    <h2> <i class="fa-solid fa-gem"></i> Employee Details </h2>
</header>

<section class="container w-50 mx-auto text-center my-5">
<div class="card text-center">
  <div class="card-header">
    Employee Name : <?php echo $emp['name'] ?> <br>
    Gender : <strong class="text-warning">
                <?php if($emp['gender'] == "male") {
                    echo "<strong class='text-primary'>Male</strong>";
                    }elseif($emp['gender'] == "female"){
                        echo "<strong class='text-danger'>Female</strong>";
                    }
                ?>
    </strong>
  </div>
  <div class="card-body">
    <h5 class="card-title">
        Employee Address <?php echo $emp['address'] ?>
    </h5>
    <p class="card-text">
        Employee Salary <?php echo $emp['salary'] ?>
    </p>
    <a href="index.php" class="btn btn-primary">Return To Employees List</a>
    <a href="create.php" class="btn btn-dark"> Create New Employee</a>
  </div>
</div>
</section>
</body>
</html>