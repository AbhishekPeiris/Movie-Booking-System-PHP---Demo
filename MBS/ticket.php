<?php 
include 'php/global.php';
include 'php/dbcontroller.php';
$db_handle = new DBController();
        if(isset($_POST['placeorder'])){
            $movieID = $_POST['movieID'];
            $locationID = $_POST['locationID'];
            $date = $_POST['date'];
            $nofSeats = $_POST['nofSeats'];
            $amount = $_POST['amount'];
            $userid = $_POST['userid'];

            $sql = "INSERT INTO tickets(movieID,dateBooked,seats,amount,location,userid)VALUES('$movieID','$date','$nofSeats','$amount','$locationID','$userid')";
            $run = $db_handle->executeUpdate($sql);
            if ($run == 1) {
                echo '<script>window.location.replace("payment.php?");</script>';
            }else{
                echo "<script>Booking Faild!</script>";
            }
        }
         ?>