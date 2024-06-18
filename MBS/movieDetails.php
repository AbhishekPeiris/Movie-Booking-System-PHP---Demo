<?php 
include 'php/global.php';
include 'php/dbcontroller.php';
$db_handle = new DBController();?>
 ?>
 <!DOCTYPE html>
<html lang="en">
<?php 
if($_GET['movieID']){
    $movieID = $_GET['movieID'];
}

$query = "SELECT * FROM movies WHERE id=$movieID";
    $result = $db_handle->runQuery($query);
    if (is_array($result)){
        foreach ($result as $key => $value) {
            $movieName = $result[$key]["title"];
            $description = $result[$key]["description"];
            $duration = $result[$key]["duration"];
            $image = $result[$key]["image"];
            $imagecover = $result[$key]["imagecover"];
        }
    }
?>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="styles/Home Page.css">
        <link rel="stylesheet" href="styles/Select movie.css">
        <title><?php echo $movieName; ?> - Buy Movie Tickets Online for the Latest Movies</title>
    </head>
    <body>
        
        <!-- Include Navigation Bar -->
        <?php include 'php/nav.php'; ?>
        <!-- Include Navigation Bar -->
        
        <div class="pglink"><a href="Select movie page_1_Jwick.html" class="pglink"><b>MOVIE</b></a>&nbsp;&nbsp;<a href="Home page.html" class="pglink">/&nbsp;HOME</a></div>
        <img src="images/<?php echo $imagecover; ?>" class="Jwick">
        <div class="nowShow">NOW SHOWING</div>
        <h1 class="mtitle"><?php echo $movieName; ?></h1>
        <p class="ratings"><?php echo $duration; ?> &nbsp;&nbsp;&nbsp;&nbsp; IMDB RATINGS : &nbsp; 8.2/10</p>
        <a class="ytbLink" href="#" target="_blank">WATCH<br><b>TRAILER</b></a>
        <a class="Btik" href="buyTicket.php?movieID=<?php echo $movieID; ?>">BUY TICKET</b></a>

        <p class="place"><b>NOW SHOWING AT</b></p> 
        <hr class="hr1">

        <div class="cinemas">
            <img class="pvr" src="images/PVR.jpg" width="100">
            <img class="scope" src="images/scope.png" width="200">
            <img class="savoy" src="images/savoy.jpg" width="100">
            &nbsp;&nbsp;&nbsp;&nbsp;<img class="regal" src="images/Regal.png" width="100">
        </div>
        <hr class="hr2">
        <p class="stry">STORY LINE</p>
        <p class="story">John Wick uncovers a path to defeating The High Table. But before he can earn his freedom, Wick must face off against a new enemy with powerful alliances across the globe and forces that turn old friends into foes.</p>
        <hr class="hr3">
        <p class="genre"><b>GENRES : </b>ACTION CRIME THRILLER</p>
        <hr class="hr4">
        <p class="cst">CAST</p>
        
        <img class="cast" src="images/cast.png" width="500">
        <hr class="hr5">
        
       <br><br><br><br><br><br><br><br>
        <?php include 'php/footer.php'; ?>
            </body>
        </html>