<!DOCTYPE html>
<html lang="en">
<head>
    <?php include './includes/head.php' ?>
</head>
<body>
    <header class="bg-light fs-4 py-3 text-center text-dark">
            <h2> <i class="fa-solid fa-home"></i> Add New Employee </h2>
    </header>
    
    <section class="container my-5 w-50 mx-auto">
        <form action="store.php" method="post">
            <div class="form-group my-2">
                <label for="name">Employee Name</label>
            <input type="text" class="form-control" id="name" name="name">
            </div>
                <div class="form-group my-2">
                    <label for="address">Employee Address</label>
                <input type="text" class="form-control" id="address" name="address">
            </div>
                <div class="form-group my-2">
                    <label for="salary">Employee Salary</label>
                <input type="number" class="form-control" id="salary" name="salary">
            </div>
            <div class="form-group my-2">
                    <label for="male">Male</label>
                    <input type="radio" id="male" name="gender" value="male">
                    <label for="female">Female</label>
                    <input type="radio" name="gender" id="female" value="female">
            </div>
            <input type="submit" value="Add Employee" name="add_employee" 
            class="btn btn-dark">
        </form>
    </section>
</body>
</html>