<?php
    require_once './includes/connection.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include './includes/head.php' ?>
</head>
<body>
    <header class="bg-light fs-4 py-3 text-center text-dark">
        <h2> <i class="fa-brands fa-php"></i> All Employees </h2>
    </header>

    <section class="my-5 container">
        <a href="create.php" class="btn btn-dark">Add New Employee</a>
        <table class="my-5 table table-bordered text-center">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Employee Name</th>
                    <th>Employee Address</th>
                    <th>Employee Salary</th>
                    <th>Employee Gender</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $sql = "SELECT * FROM `employees`";
                    $res = mysqli_query($conn , $sql);
                    while($row = mysqli_fetch_assoc($res)) {
                ?>
                    <tr>
                        <td><?php echo $row['id'] ?> </td>
                        <td><?php echo $row['name'] ?> </td>
                        <td><?php echo $row['address'] ?></td>
                        <td><?php echo $row['salary'] ?> </td>
                        <td><?php if($row['gender'] == "male") {
                            echo "<strong class='text-primary'>Male</strong>";
                            }elseif($row['gender'] == "female"){
                                echo "<strong class='text-danger'>Female</strong>";
                            }
                        ?></td>
                        <td>
                            <a href="show.php?id=<?php echo $row['id'] ?>" class="btn btn-sm btn-info mx-1">show</a>
                            <a href="edit.php?id=<?php echo $row['id'] ?>" class="btn btn-sm btn-success mx-1">edit</a>
                            <a href="delete.php?id=<?php echo $row['id'] ?>" class="btn btn-sm btn-danger mx-1">delete</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </section>
</body>
</html>