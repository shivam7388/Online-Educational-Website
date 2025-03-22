<?php
//This script will handle login
session_start();
// check if the user is already logged in
if(isset($_SESSION['username']))
{
    header("Location: ../index.php");
    exit();
    
}
require_once "config.php";

$username = $password = "";
$err = "";
 $showAlert=False;
 $showError=False;

// if request method is post
if ($_SERVER['REQUEST_METHOD'] == "POST"){
    if(empty(trim($_POST['username'])) || empty(trim($_POST['password'])))
    {
        $err = "Please enter username + password";
      
    }
    else{
        $username = trim($_POST['username']);
        $password = trim($_POST['password']);
       
    }


if(empty($err))
{
    $sql = "SELECT id, username, password FROM users WHERE username = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "s", $param_username);
    $param_username = $username;
    
    // Try to execute this statement
    if(mysqli_stmt_execute($stmt)){
        mysqli_stmt_store_result($stmt);
        if(mysqli_stmt_num_rows($stmt) == 1)
                {
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                    if(mysqli_stmt_fetch($stmt))
                    {
                        if(password_verify($password, $hashed_password))
                        {
                            // this means the password is corrct. Allow user to login
                
                            $_SESSION["username"] = $username;
                            $_SESSION["id"] = $id;
                            $_SESSION["loggedin"] = true;
                            $showAlert = true;
                            
                            header("location:../index.php");
                            
                        }
                        else{
                          $err = "Invalid Password";
                          $showError = true;
                            }         
                        
                    }
                 
                }
            else {
                $err = "Invalid Username";
                $showError = true;
            }
    }
}    

}
?>
<html>
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="../css/login.css">

<title>Login</title>
</head>       
<body>
      <?php require 'nav.php'; ?>
   <?php
       if($showAlert){
       echo'
        <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong> Success !</strong> Your account has been created.
         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
         <img src="../img/cross.png" style="width: 20px; height: 20px;">
         </button>
         </div>';
      }
     ?>
     <?php
       if($showError){
       echo'
        <div class="alert2 alert-danger alert-dismissible fade show" id="alert2" role="alert2">
        <strong>Error!</strong>Username or Passwords do not match.
         <button type="button" class="btn-close2" data-bs-dismiss="alert2" aria-label="Close">
         <img src="../img/cross.png" style="width: 20px; height: 20px;">
          </button>
         </div>';
      }
    ?>  
  
      <form class="form fom" action="" method="post">     
        
         <div class="log-img">
                <img src="../img/loh.jpeg">
         </div>
        <div class="log-div">
                    <h2>Login Here</h2>
                    <input type="text" name="username" placeholder="Username">
                    <input type="password" name="password" placeholder="Enter Password Here">
                    <button type="submit" class="btnn"><a>Login</a></button>

                    <p class="link">Don't have an account<br>
                    <a href="../php/SignUp.php">Sign up </a> here</a></p>
                    <p class="liw">Join Us</p>

                    <div class="icons">
                        <a href="#"><ion-icon name="logo-facebook"></ion-icon></a>
                        <a href="#"><ion-icon name="logo-instagram"></ion-icon></a>
                        <a href="#"><ion-icon name="logo-twitter"></ion-icon></a>
                        <a href="#"><ion-icon name="logo-google"></ion-icon></a>
                        <a href="#"><ion-icon name="logo-skype"></ion-icon></a>
                    </div>
            </div> 
          </form>
 <script>

  // Wait for the DOM to finish loading
  document.addEventListener('DOMContentLoaded', function() {
    // Find the alert2 element and the close button
    var alert2 = document.querySelector('.alert2');
    var closeButton2 = alert2.querySelector('.btn-close2');
       console.log("closeButton2");
    // Attach an event listener to the close button
    closeButton2.addEventListener('click', function() {
      // Remove the alert2 element
      alert2.remove();
    });
  });
// Get the alert element
var alert = document.querySelector(".alert");

// Get the close button element
var closeButton = alert.querySelector(".btn-close");

// Add a click event listener to the close button
closeButton.addEventListener('click', function() {
  // Remove the alert element from the DOM
  alert.parentNode.removeChild(alert);
});
</script>
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
</body>
</html>