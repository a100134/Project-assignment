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
        <a class="nav-link" href="gallery.php">Gallery</a>
      </li>
             <li class="nav-item">
        <a class="nav-link" href="contactus.php">Contact Us</a>
      </li>
       <li class="nav-item active">
        <a class="nav-link" href="comments.php">comments</a>
      </li>       </ul>
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

    <?php 

              $conn = mysqli_connect( "localhost", "root","","artist_site","3306");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

//$result = mysqli_query($conn,"SELECT comment FROM comments");
      
$result = mysqli_query($conn,"SELECT comments.comment,clients.username FROM comments INNER JOIN clients ON comments.client_id=clients.client_id");
      echo "<table class='table table-dark'>
<tr>
<th>Comments</th>
<tr>";
 while($row = mysqli_fetch_array($result))
{
     echo"<tr><td>".$row['comment']."</td><td>".$row['username']."</td></tr>";
 }
               
      if(isset($_SESSION['username'])){
     echo"<form method='post' action=''>
  <div class='form-group'>    <label for='comment'>comments</label>
    <textarea class='form-control' id='comments' rows='3' name='comments' required></textarea>
    <button type='submit' class='btn btn-primary' name='Submit'>Submit</button>
  </div>
</form>";
 
          if(isset($_POST['Submit'])&& !empty($_POST['comments'])){
              $comment = $_POST['comments'];
          $client = $_SESSION['client_id'];
$query = "INSERT INTO comments (comment, client_id)
VALUES ('$comment','$client')";
                mysqli_query($conn, $query);
              exit;
          }
          
 }
      else{echo"<div class='p-4 mb-2 text-white text-center'>login to comment</div>";}
?>
                   

    <!-- Bootstrap javascript links -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
  </body>
</html>