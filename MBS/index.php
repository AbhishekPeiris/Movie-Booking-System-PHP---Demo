<?php 
include 'php/global.php';
 ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="styles/Home Page.css">
        
        <title>The Retro - Buy Movie Tickets Online for the Latest Movies</title>
    </head>
    <body>
        <!-- Include Navigation Bar -->
        <?php include 'php/nav.php'; ?>
        <!-- Include Navigation Bar -->


        <div class="app">
          <div class="imageSlides">
            <img class="mySlides" src="images/avatar.jpeg" style="width:100%">
            <img class="mySlides" src="images/cinderella.webp" style="width:100%">
            <img class="mySlides" src="images/evil dead rise.jpg" style="width:100%">
            <img class="mySlides" src="images/fast x.jpg" style="width:100%">
            <img class="mySlides" src="images/guardians galaxy.jpg" style="width:100%">
            <img class="mySlides" src="images/john wick.jpg" style="width:100%">
            <img class="mySlides" src="images/shazam.jpeg" style="width:100%">
            <img class="mySlides" src="images/Pathaan-2.jpg" style="width:100%">
          </div>
<!--           <div class="RightSide">
            <a href="Movie list.html" class="sideBar"><b>BUY</b><br>TICKETS<br><b>ONLINE</b></a>  
          </div> -->
      </div>
      
      <div class="comsoon">
        <div class="nshow">COMING SOON</div>
      </div>
      <div class="cardpalce1">
        <div class="wrapper">
          <div class="card">
              <img src="images/flash.jpg">
              <div class="descriptions">
                  <h1>The Flash</h1>
                  <p>
                    Worlds collide when the Flash uses his superpowers to travel back in time to change the events of the past. However, when his attempt to save his family inadvertently alters the future, he becomes trapped in a reality in which General Zod has returned, threatening annihilation. With no other superheroes to turn to, the Flash looks to coax a very different Batman out of retirement and rescue an imprisoned Kryptonian -- albeit not the one he's looking for.
                    <br><b>Release date:</b> June 16, 2023
                  </p>
              </div>
          </div>
      </div>
    </div>
  
    <div class="cardpalce2">
      <div class="wrapper">
        <div class="card">
            <img src="images/little.webp">
            <div class="descriptions">
                <h1>The Little Mermaid</h1>
                <p>
                  The youngest of King Triton's daughters, Ariel is a beautiful and spirited young mermaid with a thirst for adventure. Longing to find out more about the world beyond the sea, Ariel visits the surface and falls for the dashing Prince Eric. Following her heart, she makes a deal with the evil sea witch, Ursula, to experience life on land.
                 <br><b>Release date:</b>  May 26, 2023
                </p>
            </div>
        </div>
    </div>
  </div>
    <div class="cardpalce3">
      <div class="wrapper">
        <div class="card">
            <img src="images/mImpo.jpeg">
            <div class="descriptions">
                <h1>Mission: Impossible – Dead Reckoning</h1>
                <p>
                  Ethan Hunt and the IMF team must track down a terrifying new weapon that threatens all of humanity if it falls into the wrong hands. With control of the future and the fate of the world at stake, a deadly race around the globe begins.
                  <br><b>Release date:</b>  July 12, 2023
            </div>
        </div>
    </div>
  </div>

    <div class="cardpalce4">
      <div class="wrapper">
        <div class="card">
            <img src="images/Sman.jpg">
            <div class="descriptions">
                <h1>Spider-Man: Across the Spider-Verse</h1>
                <p>
                  After reuniting with Gwen Stacy, Brooklyn's full-time, friendly neighborhood Spider-Man is catapulted across the Multiverse, where he encounters a team of Spider-People charged with protecting its very existence. However, when the heroes clash on how to handle a new threat, Miles finds himself pitted against the other Spiders.
                  <br><b>Release date:</b>  June 2, 2023
                </div>
        </div>
    </div>
  </div>
    <div class="cardpalce5">
      <div class="wrapper">
        <div class="card">
            <img src="images/Trans.webp">
            <div class="descriptions">
                <h1>Transformers: Rise of the Beasts</h1>
                <p>
                   During the 1990s, the Maximals, Predacons and Terrorcons join the existing battle on Earth between Autobots and Decepticons.
                    <br><b>Release date:</b> June 2, 2023
                </p>
            </div>
        </div>
    </div>
  </div>

<div style="position: relative; top: 500px;">
<?php include 'php/footer.php'; ?>
</div>
    <script>
          var myIndex = 0;
          carousel();
          
          function carousel() {
            var i;
            var x = document.getElementsByClassName("mySlides");
            for (i = 0; i < x.length; i++) {
              x[i].style.display = "none";  
            }
            myIndex++;
            if (myIndex > x.length) {myIndex = 1}    
            x[myIndex-1].style.display = "block";  
            setTimeout(carousel, 2000); // Change image every 2 seconds
          }
          </script>
    </body>
</html>