<?php
include '../../php/global.php';
include '../../php/dbcontroller.php';
$db_handle = new DBController();?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../../styles/Home Page.css">
        <link rel="stylesheet" href="../../styles/admin.css">
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
        <?php include '../../php/nav.php'; ?>
        <!-- Include Navigation Bar -->


        <?php 
        //Registration
        if(isset($_POST['signin'])){
            $result = 0;
            $email = $_POST['email'];
            $password = $_POST['password'];

            $query = "SELECT * FROM admin WHERE email='$email' AND password='$password'";
            $result = $db_handle->runQuery($query);
            if (is_array($result)){
                foreach ($result as $key => $value) {   
                    $_SESSION['Adminid'] = $result[$key]["email"];
                    echo '<script>window.location.replace("home.php");</script>';
                }
            }else{
                echo '<script>alert("Sign In Field!");</script>';
            }
        }
        ?>
        <div class="adminHome">
            <?php include '../nav.php'; ?>
            
            <div class="adminContent">
                <h2>Tickets</h2> 
                <table>
                    <tr>
                        <th>Movie Name</th>
                        <th>Booked Seats</th>
                        <th>Date</th>
                        <th>*</th>
                    </tr>
                    <?php 
                    $query = "SELECT * FROM movies ORDER BY id";
                    $result = $db_handle->runQuery($query);
                    if (is_array($result)){
                        foreach ($result as $key => $value) {
                            echo '<tr>';
                            echo '<td>'.$result[$key]["title"].'</td>';
                            $mid = $result[$key]["id"];
                            $seatcount = 0;
                            $query2 = "SELECT * FROM tickets WHERE movieID=$mid";
                            $result2 = $db_handle->runQuery($query2);
                            if (is_array($result2)){
                                foreach ($result2 as $key => $value) {
                                   $seatcount = $seatcount + $result2[$key]["seats"];
                                }
                            }                      
                            echo '<td>'.$seatcount.'</td>';                            
                            echo '</tr>';
                        }
                    }
             ?>
                </table> 
            </div>
        </div>
    </body>
</html>