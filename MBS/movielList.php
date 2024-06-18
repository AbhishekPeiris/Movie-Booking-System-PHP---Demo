<?php 
include 'php/global.php';
include 'php/dbcontroller.php';
$db_handle = new DBController();?>
 ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="styles/Home Page.css">
        <link rel="stylesheet" href="styles/Movie list.css">
        <title>The Retro - Buy Movie Tickets Online for the Latest Movies</title>
    </head>
    <body>
        <!-- Include Navigation Bar -->
        <?php include 'php/nav.php'; ?>
        <!-- Include Navigation Bar -->

        <p align="center" style="color: #f0007c; font-size: 30px;">NOW SHOWING</p><br><br>

        <div class="film-list">
            <?php 
            $query = "SELECT * FROM movies ORDER BY id";
                $result = $db_handle->runQuery($query);
                if (is_array($result)){
                    foreach ($result as $key => $value) {
                    echo '
                    <a href="">
                        <div class="item">
                            <a href="movieDetails.php?movieID='.$result[$key]["id"].'">
                                <img src="images/'.$result[$key]["image"].'">
                                <div class="ns">'.$result[$key]["title"].'</div>
                            </a>
                            <div class="ticketBuyBtn"><a href="butTicket.php?movieID='.$result[$key]["id"].'">Buy Ticket</a></div>
                            
                        </div>
                    </a>
                    ';
                }
            }?>
        </div>


        
        
        
        <br><br><br><br><br><br><br><br>
        <?php include 'php/footer.php'; ?>
        
            </body>
        </html>

        
