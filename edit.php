<?php
    include("conn.php");
    
    if(isset($_GET['edit'])){
        $id = $_GET['edit'];

        $sql = "SELECT * FROM users WHERE id='$id'";
        $query = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_assoc($query)){
            $fname = $row['fname'];
            $lname = $row['lname'];
            $email = $row['email'];
            $password = $row['password'];
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit page</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
</head>
<body>

    <div class="container">
        <div class="jumbotron">
            <h3>Edit</h3>
            <a href="tables.php">Tables</a>
        </div>
        <form method="POST">
            <input type="text" name="fname" value="<?php echo $fname;?>" class="form-control col-md-5" placeholder="Firtname" required autofocus><br>

            <input type="text" name="lname" value="<?php echo $lname;?>" class="form-control col-md-5" placeholder="lastname" required><br>

            <input type="email" name="email" value="<?php echo $email;?>" class="form-control col-md-5" placeholder="Email" required><br>

            <input type="password" name="password" value="<?php echo $email;?>" class="form-control col-md-5" placeholder="Password" required ><br>

            <button class="btn btn-success col-md-5" name="updbtn">Update</button><br>
        </form>
    </div>
</body>
</html>  
<?php
    $fname = @$_POST['fname'];
    $lname = @$_POST['lname'];
    $email = @$_POST['email'];
    $password = @$_POST['password'];

    $id = $_GET['edit'];

    if(isset($_POST['updbtn'])){
        $sql = "UPDATE users SET fname ='$fname', lname='$lname', email='$email', password='$password' WHERE id='$id'";
        $query = mysqli_query($conn, $sql);
            if($query){
                header("Location:tables.php");
            } else {
                echo "Error";
            }
    }
?>      