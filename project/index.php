<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css"  href="style/style.css">
    <title>Home</title>
    <link rel="icon" type="image/png" href="images/logo.png"/>
    </head>
  <body>
           <!-- Menu -->
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
          <img src="images/logo.png" width="40px">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          
          <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
          <a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="videos.php">Videos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="lessons.php">Lessons</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="albums.html">Albums</a>
      </li>
                              <li class="nav-item">
        <a class="nav-link" href="gigs.php">Gigs</a>
      </li>
             <li class="nav-item">
        <a class="nav-link" href="tickets.php">Tickets</a>
      </li>             
       <li class="nav-item">
        <a class="nav-link" href="#">Gallery</a>
      </li>
      <li>
      <a class="nav-link" href="comments.php">comments</a>
      </li>
                        <li class="nav-item">
        <a class="nav-link" href="contactus.php">Contact us</a>
      </li>                                       <li class="nav-item">
        <a class="nav-link" href="comments.php">comments</a>
      </li>       
                         <li class="nav-item">
        <a class="nav-link" href="https://open.spotify.com/artist/0A51LEnyTnXX33IyuwM0Ts">Listen</a>
                </li>      
              </ul>
               
                </div>
                <?php
              if(isset($_SESSION['username'])){
                echo '<div class=" mb-2 text-white ">'.$_SESSION['username']."</div>";
                   echo '
                   
         <a href="logout.php"><i class="fas fa-sign-in-alt"></i> </a>
        ';
        
            }else{echo'<div class="mb-2 text-white ">you can login from here</div>';
                 echo'
         <a href="login.php"> <i class="fas fa-sign-in-alt"></i></a>
        ';} ?>
                </nav>
        <!-- Carousel -->
        <div id="carouselIndicators" class="carousel slide container" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselIndicators" data-slide-to="1"></li>
            <li data-target="#carouselIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100 h-40" src="images/test1.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="images/test2.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="images/test3.jpg" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
        <div class="p-4 mb-2 text-white text-center">Hello my name is robscallon and this is my website here you can see when i will play live, make an account to buy albums and comment.<br/>These are my social media accounts
            <a href="https://www.facebook.com/RobScallonMusic/"><i class="fab fa-facebook"></i></a>
            <a href="https://www.facebook.com/RobScallonMusic/"><i class="fab fa-youtube"></i></a>
            <a href="https://www.facebook.com/RobScallonMusic/"><i class="fab fa-instagram"></i></a></div>
        <a href="help.html" class="btn btn-outline-info text-white">Help</a>

    <!-- Bootstrap javascript links -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
  </body>
</html>