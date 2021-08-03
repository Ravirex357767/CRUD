<?php
    include("conn.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
</head>
<body>
    <div class="container">
        <div class="jumbotron">
            <h3>Read</h3>
            <a href="index.php">Register</a>
        </div>
        <h3>Tables</h3>
            <?php
                $sql = "SELECT * FROM users";
                $query = mysqli_query($conn, $sql);
                echo'<table class="table table-dark">
                        <tr>
                            <th>ID</th>
                            <th>Firstname</th>
                            <th>Lastname</th>
                            <th>Email</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                ';
                while($row = mysqli_fetch_assoc($query)){
                    $id=$row['id'];
                        echo "<tr>
                                <td>$row[id]</td>
                                <td>$row[fname]</td>
                                <td>$row[lname]</td>
                                <td>$row[email]</td>";
                        ?>
                            <td><a href="edit.php?edit=<?php echo $id;?>" class="btn btn-primary">Edit</a></td>
                            <td><a href="delete.php?delete=<?php echo $id;?>" class="btn btn-danger">Delete</a></td>
                        <?php
                } 
            ?>
    </div>
</body>
</html>