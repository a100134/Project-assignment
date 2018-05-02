
<?php 
    session_start();

if(isset($_POST['signbutton'])){


        $passw = hash ("sha256",$passw);
        $conn = mysqli_connect( "localhost", "root","","artist_site");

    
            $usern = $_POST['username'];
            $passw = $_POST['password'];
            $email = $_POST['email'];
            $passw = hash ('sha256',$usern);
        $check_query = "SELECT * FROM clients WHERE username='$usern'";
        $result = mysqli_query($conn, $check_query);
        $row = mysqli_num_rows($result);
            if($row > 0){
                $_SESSION['exist'] = "true";
                header('location: create_account.php');
            }
        else{
 
            $query = "INSERT INTO clients (username, password, email)
            VALUES ('$usern','$passw','$email')";
                mysqli_query($conn, $query);
            $_SESSION['username'] = $username;
            $_SESSION['success'] = "You are a now logged in";
            header('location: index.php');
                        }
}
?>