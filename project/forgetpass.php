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
    <title>forget password</title>
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
          <a class="nav-link" href="index.php">Home</a>
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
        <a class="nav-link" href="contactus.php">Contact us</a>
      </li>                                        <li class="nav-item">
        <a class="nav-link" href="comments.php">comments</a>
      </li>        
                            <li class="nav-item">
        <a class="nav-link" href="https://open.spotify.com/artist/0A51LEnyTnXX33IyuwM0Ts">Listen</a>
                </li></ul>
          </div>

        </nav>
        
      <!-- form --><div class="p-4 mb-2 text-white text-center"> Enter your Username</div>
           <form method="post" action="">

          

          <div class="form-group mx-auto col-md-4 text-white">
            <label for="username">Username</label>
            <input type="text" class="form-control" id="username"  placeholder="Enter username" name="username" required>
          </div>
          

          
          <button type="submit" class="btn btn-primary"
          name="forgot">forgot password</button>

          
        </form>

    <!-- Bootstrap javascript links -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
  </body>
</html>
<?php 

if(isset($_POST['forgot'])){
       $usern = $_POST['username'];
            $conn = mysqli_connect( "localhost", "root","","artist_site","3306");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
  	$query = "SELECT * FROM clients WHERE username='$usern'";
  	$results = mysqli_query($conn, $query);
    
  	if(mysqli_num_rows($results) == 1) {
        $row = mysqli_fetch_array($results);
  	   $email =$row['email'];
        $passn = rand(0 ,10000);
            $pass = "bla1bla2bla3";
    $to = "supertestbla@gmail.com";
        $email = $row['email'];
        require("phpmailer/src/PHPMailer.php");
  require("phpmailer/src/SMTP.php");
    $mail = new PHPMailer\PHPMailer\PHPMailer();
    $mail->IsSMTP(); // enable SMTP                         // Passing `true` enables exceptions

    $mail->SMTPDebug = 0; // debugging: 1 = errors and messages, 2 = messages only
    $mail->SMTPAuth = true; // authentication enabled
    $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
    $mail->Host = "smtp.gmail.com";
    $mail->Port = 465; // or 587
    $mail->IsHTML(true);
    $mail->Username = $to;
    $mail->Password = $pass;
    $mail->SetFrom($to);
    $mail->Subject = "forget password";
    $mail->Body = $passn;
    $mail->addAddress($email);
        $checks=1;
        if(!$mail->send()){
        echo "error";
    }
        else{
            echo"temporary password has been sent to your email";
        }
        $passn = hash("sha256",$passn);
        mysqli_query($conn,"UPDATE clients SET password='$passn' WHERE username='$usern'");
        header('location:changepass.php');
  	}
    else {
  		echo"Username doesn't exist";
  	}
  }

 ?>