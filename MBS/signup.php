<?php
include 'php/global.php';
include 'php/dbcontroller.php';
$db_handle = new DBController();?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="styles/Home Page.css">
        <link rel="stylesheet" href="styles/registration.css">
        <title>The Retro - Buy Movie Tickets Online for the Latest Movies</title>
        <style>
            img.loc{
                margin-bottom: 10px;
            }
            img.loc:hover{
                filter: brightness(70%);
                box-shadow: 0px 0px 20px rgba(255, 255, 255, 0.5);
                transition: all 0.1s linear;
            }
        </style>
    </head>
    <body>
        <!-- Include Navigation Bar -->
        <?php include 'php/nav.php'; ?>
        <!-- Include Navigation Bar -->

        <?php 
        //Registration
        if(isset($_POST['register'])){
            $firstName = $_POST['firstName'];
            $lastName = $_POST['lastName'];
            $email = $_POST['email'];
            $contact = $_POST['contact'];
            $password = $_POST['password'];

            $sql = "INSERT INTO users(fname,lname,email,contact,password)VALUES('$firstName','$lastName','$email','$contact','$password')";
            $run = $db_handle->executeUpdate($sql);
            if ($run == 1) {
                echo '<script>window.location.replace("signin.php");</script>';
            }else{
                echo "<script>Registration Faild!</script>";
            }
        }
        ?>
        <div class="signup">
            <div class="signupForm">
                <h2>SIGNUP</h2>
                <hr>
                <form action="signup.php" method="POST">
                    <label>First Name :</label>
                    <input type="text" name="firstName" required>
                    <label>Last Name :</label>
                    <input type="text" name="lastName" required>
                    <label>Email :</label>
                    <input type="email" name="email" required>
                    <label>Contact number :</label>
                    <input type="text" name="contact" required>
                    <label>Password:</label>
                    <input type="password" name="password" required>
                    <input type="submit" name="register" value="SIGNUP" class="regBtn">
                </form>
            </div>
        </div>
        
    <?php include 'php/footer.php'; ?>
    </body>
</html>