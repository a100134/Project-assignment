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
    <title>login!</title>
  </head>
  <body>
           <!-- Menu -->
            <nav class="navbar navbar-expand-lg navbar-dark bg-company-bluee">
          <a class="navbar-brand" href="#">logohere</a>
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
        <a class="nav-link" href="#">Albums</a>
      </li>
             <li class="nav-item">
        <a class="nav-link" href="#">Tickets</a>
      </li>             
       <li class="nav-item">
        <a class="nav-link" href="#">Gallery</a>
      </li>       
       <li class="nav-item">
        <a class="nav-link" href="#">Videos</a>
                </li></ul>
          </div>

        </nav>
        
        <!-- form -->
           <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" >

          <div class="form-group mx-auto col-md-4 text-white">
            <label for="username">Username</label>
            <input type="text" class="form-control" id="username"  placeholder="Enter username" name="username" required>
          </div>
          <!-- password-->
          <div class="form-group mx-auto col-md-4 text-white">
            <label for="Password">Password</label>
            <input type="password" class="form-control" id="password" placeholder="Enter your Password" name="password" required>
          </div>
          <button type="submit" class="btn btn-primary" name="login_user">Login</button>
         
          
        </form>
         <a  class="btn btn-primary" href="create_account.php">Sign up</a>

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