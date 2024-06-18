<?php 
include 'php/global.php';
include 'php/dbcontroller.php';
$db_handle = new DBController();
error_reporting (E_ALL ^ E_NOTICE);
if($_GET['movieID']){
    $movieID = $_GET['movieID'];
}

if($_SESSION['userid']){
    $userid = $_SESSION['userid'];
}else{
    echo '<script>window.location.replace("signin.php");</script>';
}

if($_GET['locationid']){
    $locationID = $_GET['locationid'];
    $location = $_GET['location'];
}

?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="styles/Home Page.css">
        <link rel="stylesheet" href="styles/Movie list.css">
        <link rel="stylesheet" href="styles/Seat & time.css">
        <script src="js/Seat & time.js"></script>
        <title>The Retro - Buy Movie Tickets Online for the Latest Movies</title>
    </head>
    <body>
        <!-- Include Navigation Bar -->
        <?php include 'php/nav.php'; ?>
        <!-- Include Navigation Bar -->

        
        <p align="center" style="color: #f0007c; font-size: 30px;">NOW SHOWING </p><br><br>
        <form action="ticket.php" method="POST">
            <div class="film-list">
                <div class="w90" style="text-align: center;">
                    <h2>Location : </h2> 
                    
                    <div class="w90">
                        <?php 
                        
                        if(!$_GET['location']){ ?>
                        <a href="selectLocation.php?movieID=<?php echo $movieID; ?>">Select Location</a>
                    <?php }else{
                        echo $location;
                    } ?>
                    <input type="hidden" name="locationID" value="<?php echo $locationID; ?>" required>
<br><br>
                    </div>
                    
                </div>


                <div class="w90" style="text-align: center;">
                    <h2>Date : </h2>
                    <div class="w90">
                         <input type="date" name="date" id="datemax" name="datemax" min="2023-06-10" max="2023-06-15" required>
                    </div>
                    <?php //error_reporting (ALL);?>
                </div>

                <div class="w90">
                    <div class="summery">
                        <ul class="sts">
            
            <li><div class="seat selected"></div><small>SELECTED</small></li>
            <li><div class="seat sold"></div><small>SOLD</small></li>  
        </ul>
        <div class="SS">
            <div class="container">
                <div class="screen"></div>

                <div class="row">
                    <div class="seat" onclick="selectSeat(this)"></div>
                    <div class="seat" onclick="selectSeat(this)"></div>
                    <div class="seat sold"></div>
                    <div class="seat sold"></div>
                    <div class="seat" onclick="selectSeat(this)"></div>
                    <div class="seat" onclick="selectSeat(this)"></div>
                    <div class="seat" onclick="selectSeat(this)"></div>
                    <div class="seat" onclick="selectSeat(this)"></div>
                </div>

                <div class="row">
                    <div class="seat" onclick="selectSeat(this)"></div>
                    <div class="seat" onclick="selectSeat(this)"></div>
                    <div class="seat" onclick="selectSeat(this)"></div>
                    <div class="seat" onclick="selectSeat(this)"></div>
                    <div class="seat" onclick="selectSeat(this)"></div>
                    <div class="seat" onclick="selectSeat(this)"></div>
                    <div class="seat sold"></div>
                    <div class="seat sold"></div>
                </div>

                <div class="row">
                    <div class="seat sold"></div>
                    <div class="seat sold"></div>
                    <div class="seat sold"></div>
                    <div class="seat sold"></div>
                    <div class="seat" onclick="selectSeat(this)"></div>
                    <div class="seat" onclick="selectSeat(this)"></div>
                    <div class="seat" onclick="selectSeat(this)"></div>
                    <div class="seat" onclick="selectSeat(this)"></div>
                </div><br>

                <div class="row">
                    <div class="seat" onclick="selectSeat(this)"></div>
                    <div class="seat" onclick="selectSeat(this)"></div>
                    <div class="seat" onclick="selectSeat(this)"></div>
                    <div class="seat" onclick="selectSeat(this)"></div>
                    <div class="seat" onclick="selectSeat(this)"></div>
                    <div class="seat" onclick="selectSeat(this)"></div>
                    <div class="seat" onclick="selectSeat(this)"></div>
                    <div class="seat" onclick="selectSeat(this)"></div>
                </div>

                <div class="row">
                    <div class="seat" onclick="selectSeat(this)"></div>
                    <div class="seat" onclick="selectSeat(this)"></div>
                    <div class="seat sold"></div>
                    <div class="seat sold"></div>
                    <div class="seat" onclick="selectSeat(this)"></div>
                    <div class="seat" onclick="selectSeat(this)"></div>
                    <div class="seat sold"></div>
                    <div class="seat sold"></div>
                </div>

                <div class="row">
                    <div class="seat" onclick="selectSeat(this)"></div>
                    <div class="seat" onclick="selectSeat(this)"></div>
                    <div class="seat sold"></div>
                    <div class="seat sold"></div>
                    <div class="seat" onclick="selectSeat(this)"></div>
                    <div class="seat" onclick="selectSeat(this)"></div>
                    <div class="seat sold"></div>
                    <div class="seat sold"></div>
                </div>

                <div class="row">
                    <div class="seat" onclick="selectSeat(this)"></div>
                    <div class="seat" onclick="selectSeat(this)"></div>
                    <div class="seat sold"></div>
                    <div class="seat sold"></div>
                    <div class="seat" onclick="selectSeat(this)"></div>
                    <div class="seat" onclick="selectSeat(this)"></div>
                    <div class="seat sold"></div>
                    <div class="seat sold"></div>
                </div><br>

                <div class="row">
                    <div class="seat" onclick="selectSeat(this)"></div>
                    <div class="seat" onclick="selectSeat(this)"></div>
                    <div class="seat sold"></div>
                    <div class="seat sold"></div>
                    <div class="seat" onclick="selectSeat(this)"></div>
                    <div class="seat" onclick="selectSeat(this)"></div>
                    <div class="seat sold"></div>
                    <div class="seat sold"></div>
                </div>
                <div class="row">
                    <div class="seat" onclick="selectSeat(this)"></div>
                    <div class="seat" onclick="selectSeat(this)"></div>
                    <div class="seat sold"></div>
                    <div class="seat sold"></div>
                    <div class="seat" onclick="selectSeat(this)"></div>
                    <div class="seat" onclick="selectSeat(this)"></div>
                    <div class="seat sold"></div>
                    <div class="seat sold"></div>
                </div>

                <div class="row">
                    <div class="seat" onclick="selectSeat(this)"></div>
                    <div class="seat" onclick="selectSeat(this)"></div>
                    <div class="seat sold"></div>
                    <div class="seat sold"></div>
                    <div class="seat" onclick="selectSeat(this)"></div>
                    <div class="seat" onclick="selectSeat(this)"></div>
                    <div class="seat sold"></div>
                    <div class="seat sold"></div>
                </div><br><br>


                <p class="text">
                    You have selected <span id="count">0</span> seat for a price of Rs. <span id="total">0</span>
                </p>
            </div>
        
        </ul>
    </div>
    <input type="hidden" name="movieID" id="movieID" value="<?php echo $userid; ?>">
    <input type="hidden" name="userid" id="userid" value="<?php echo $movieID; ?>">
    <input type="hidden" name="nofSeats" id="nofSeats">
    <input type="hidden" name="amount" id="amount">
    <div class="submitBtn">
        <input type="submit" name="placeorder" value="Book Now">
    </div>


    
                    </div>
                </div>
            </div>
        </form>


        
        
        
        <br><br><br><br><br><br><br><br>
        <?php include 'php/footer.php'; ?>
        
            </body>
        </html>

        
