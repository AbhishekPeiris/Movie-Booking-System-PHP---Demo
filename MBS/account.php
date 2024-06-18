<?php 
include 'php/global.php';
include 'php/dbcontroller.php';
$db_handle = new DBController();
if($_SESSION['userid']){
    $userid = $_SESSION['userid'];
}else{
    echo '<script>window.location.replace("signin.php");</script>';
}
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

        <p align="center" style="color: #f0007c; font-size: 30px;">MY ACOOUNT</p><br><br>
        <div class="w90">
        <table style="color: #000; width: 50%; padding: 10px; background: #ccc; text-align: center;">
            <tr>
                <th>Movie ID</th>
                <th>No of Seats</th>
                <th>*</th>
            </tr>
            <?php 
            $query = "SELECT * FROM tickets WHERE userid='$userid'";
                $result = $db_handle->runQuery($query);
                if (is_array($result)){
                    foreach ($result as $key => $value) {
                    echo '<tr>';
                    echo '<td>'.$result[$key]["movieID"].'<td>';
                    echo '<td>'.$result[$key]["seats"].'<td>';
                    echo '<td><form><input type="hidden" name="deleteID" value="'.$result[$key]["seats"].'"><input type="submit" name="Delete" value="REMOVE"></form><td>';
                    echo '</tr>';
                }
            }?>
            </table>
        </div>


        
        
        
        <br><br><br><br><br><br><br><br>
        <br><br><br><br><br><br><br><br>
        <?php include 'php/footer.php'; ?>
        
            </body>
        </html>

        
