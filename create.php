
<?php 
    session_start();

$errors = array(); 
if(isset($_POST['button'])){


        $passw = hash ("sha256",$passw);
        $conn = mysqli_connect( "localhost", "root","","artist_site");

    
            $passw = trim($_POST['password']);
            $passw = trim($_POST['password']);
            $email = trim($_POST['email']);
        $check_query = "SELECT * FROM clients WHERE username='$username'";
        $result = mysqli_query($conn, $check_query);
        $row = mysqli_num_rows($result);
            if($row > 0){
                $_SESSION['exist'] = true;
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