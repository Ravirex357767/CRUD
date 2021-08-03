<?php
    include("conn.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
</head>
<body>
    <div class="container">
        <div class="jumbotron">
            <h2>CRUD</h2>
        </div> 
        <h3>Register</h3>
        <a href="tables.php"><button class="btn btn-outline-primary col-md-5">Show Tables</button></a><br><br>
        <form method="POST">
            <input type="text" name="fname" class="form-control col-md-5" placeholder="Firtname" required autofocus><br>

            <input type="text" name="lname" class="form-control col-md-5" placeholder="lastname" required><br>

            <input type="email" name="email" class="form-control col-md-5" placeholder="Email" required><br>

            <input type="password" name="password" class="form-control col-md-5" placeholder="Password" required ><br>

            <button class="btn btn-success col-md-5" name="btn">SignUp</button><br>
        </form>
        <?php
            include("making.php");
        ?>     
    </div>
</body>
</html>