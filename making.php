<?php
    include("conn.php");

    if(isset($_POST['btn'])){
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $f_low = strtolower($fname);
        $l_low = strtolower($lname);

        $sql = "INSERT INTO users (fname, lname, email, password) VALUES ('$f_low','$l_low','$email','$password')";
        $query = mysqli_query($conn, $sql);
            if($query){
                echo "<div class='alert alert-success col-md-5' role='alert'>
                                    Students Added Successfully
                                </div>";
            } else {
                echo "<div class='alert alert-danger col-md-5' role='alert'>
                                    Error
                                </div>";
            }
    }
?>