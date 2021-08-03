<?php
    include("conn.php");

    if(isset($_GET['delete'])){
        $id = $_GET['delete'];

        $sql = "DELETE FROM users WHERE id='$id'";
        $query = mysqli_query($conn, $sql);
            if($query){
                echo '<script>alert("Are you sure you want to delete this ID?"); window.location.href="tables.php";</script>';
            } else {
                echo "Something went Wrong!";
            }
    }
?>