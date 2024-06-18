
<div class="hedder">
    <nav class="hedder-nav">
        <img src="<?php echo $d; ?>images/Our logo(the Retro).png" id="logo" width="100" height="70">
        <p style="float: left;" class="signin"><a href="<?php echo $d; ?>signup.php" class="signin">Sign up</a><br>THE RETRO privilege</p>
        <ul>
            <li><a href="<?php echo $d; ?>">HOME</a></li>
            <li><a href="<?php echo $d; ?>movielList.php">MOVIES</a></li>
            <li><a href="<?php echo $d; ?>">LOCATION</a></li>
            <li><div class="bytckt"><a href="<?php echo $d; ?>" class="bytckt">BUY TICKET</a></div></li>
            <?php 
            if(isset($_SESSION['userid'])){
                echo '<li><a href="'.$d.'account.php">ACOUNT</a></li>';
                echo '<li><a href="'.$d.'logout.php">SIGNOUT</a></li>';
            }else{
                echo '<li><a href="'.$d.'signin.php">SIGNIN</a></li>';
            }?>
        </ul>
    </nav>
</div>