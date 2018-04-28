<?php 

   $usern = trim($_POST['username']);
    $passw = trim($_POST['password']);
    $email = trim($_POST['email']);

if((!empty($usern)) && (!empty($passw)) && (!empty($email))){
        $passw = hash ("sha256",$passw);
        $conn = mysqli_connect( "localhost", "root","","artist_site");
        if(mysqli_connect_errno()){
            echo "Error : Could not connect to database";
            exit;
        }
            else{
            $query = "INSERT INTO clients (username, password, email)
            VALUES ('$usern','$passw','$email')";
            
            $result = mysqli_query($conn, $query)
                or die("Error in query: ". mysqli_error($conn));
                header("Location:index.html");
                        }
            echo "accounted created";
        }
else{
    header("Location:create_account.html");
    echo "Enter all fields";
}
?>