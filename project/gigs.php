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
    <title>Gigs</title>
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
              <li class="nav-item">
          <a class="nav-link" href="index.html">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="videos.php">Videos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="lessons.php">Lessons</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="albums.php">Albums</a>
      </li>
                  <li class="nav-item active">
        <a class="nav-link" href="gigs.php">Gigs</a>
      </li>
             <li class="nav-item">
        <a class="nav-link" href="tickets.php">Tickets</a>
      </li>             
       <li class="nav-item">
        <a class="nav-link" href="gallery.php">Gallery</a>
      </li>         
       <li class="nav-item">
        <a class="nav-link" href="contactus.php">Contact us</a>
      </li>                                           <li class="nav-item">
        <a class="nav-link" href="comments.php">comments</a>
      </li>   

                                            <li class="nav-item">
        <a class="nav-link" href="https://open.spotify.com/artist/0A51LEnyTnXX33IyuwM0Ts">Listen</a>
                </li></ul>
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
        <br/>
        <form class="form-inline" method="post" action="">
  <div class="form-group mx-sm-3 mb-2">
    <input type="text" class="form-control" id="gig" placeholder="Gig" name="gig">
  </div>
  <button type="submit" class="btn btn-primary mb-2" name="submit">search</button>
</form>
<?php
        $conn = mysqli_connect( "localhost", "root","","artist_site","3306");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
            

     
if(isset($_POST['submit'])){

                  $gig = $_POST['gig'];
                 $result = mysqli_query($conn,"SELECT * FROM gigs WHERE Event_name LIKE '%".$gig."%'");
}
      else{
      

  $result = mysqli_query($conn,"SELECT * FROM gigs");

      }
echo "<table class='table table-dark'>
<tr>
<th>Event Name</th>
<th>Location</th>
<th>Date</th>
<th>Time</th>
<th>url</th>

</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
    
echo "<td>" . $row['Event_name'] . "</td>";
echo "<td>" . $row['Location'] . "</td>";
echo "<td>" . $row['Date'] . "</td>";
echo "<td>".$row['Time'] . "</td>";
    echo '<td><a href="'.$row['url'] . '">'.$row['url'].'</td>';
echo "</tr>";
}

echo "</table>";
      ?>
    <!-- Bootstrap javascript links -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
  </body>
</html>
<?php 

if(isset($_POST['login_user'])){
       $usern = $_POST['username'];
    $passw = $_POST['password'];
    $passw = hash ("sha256",$passw);
  	$conn = mysqli_connect( "localhost", "root","","artist_site");
  	$query = "SELECT * FROM users WHERE username='$usern' AND password='$passw'";
  	$results = mysqli_query($conn, $query);
    
  	if (mysqli_num_rows($results) == 0) {
  	  $_SESSION['username'] = $usern;
  	  $_SESSION['success'] = "You are now logged in as ";
  	  header('location: index.php');
        
  	}else {
  		echo"Wrong username/password combination";
  	}
  }
 ?>
