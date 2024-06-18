<?php 
include 'php/global.php';
include 'php/dbcontroller.php';
$db_handle = new DBController();
if($_GET['movieID']){
    $movieID = $_GET['movieID'];
}
 ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="styles/Home Page.css">
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

        <script>
            function alrt1(){
                alert("Cannot access. Choose your movie first");
            }
        </script>
    </head>
    <body>
        <!-- Include Navigation Bar -->
        <?php include 'php/nav.php'; ?>
        <!-- Include Navigation Bar -->

        <p style="font-size: 30px; color: #f0007c; margin-bottom: 20px;" align="center" >SELECT LOCATION</p>
        <ul class="loc">
            <li><a href="buyTicket.php?movieID=<?php echo $movieID; ?>&locationid=1&location=PVR Cinema"><img src="images/pvrC.jpg" width="100%" class="loc"></a></li>
            <li><a href="#"><img src="images/scC.jpg" width="100%" class="loc"></a></li>
            <li><a href="#"><img src="images/svC.jpg" width="100%" class="loc"></a></li>
            <li><a href="#"><img src="images/regC.jpg" width="100%" class="loc"></a></li>
        </ul>
        

        <br><br><br><br><br><br><br><br>
        <?php include 'php/footer.php'; ?>
        
            </body>
        </html>