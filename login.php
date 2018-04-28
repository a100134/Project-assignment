<?php
   $usern = trim($_POST['username']);
    $passw = trim($_POST['password']);
if(empty($usern)){
        echo "enter username";
        }
else if(empty($passw)){
    echo"enter password";
}
            else{
                $passw = hash ("sha256",$passw);
                $conn = mysqli_connect( "localhost", "root","","artist_site");
                if(mysqli_connect_errno()){
                    echo "Error : Could not connect to database";
                    exit;
            $query = "SELECT  client_id FROM clients WHERE username = '$usern' and password = '$passw' ";
            
            $result = mysqli_query($conn, $query)
                or die("Your account doesn't not exist ". mysqli_error($conn));
                
                        }
                $loggedin = true;
                header("Location:index2.html");
        }
?>
