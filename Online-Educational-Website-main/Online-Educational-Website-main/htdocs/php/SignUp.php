<?php
require_once "config.php";
$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";
$showAlert=false;
$showError=false;

if ($_SERVER['REQUEST_METHOD'] == "POST"){
    if(empty(trim($_POST["username"]))){
        $username_err = "Username cannot be blank";
        $showError=true;  
    }
    else{
        $sql = "SELECT id FROM users WHERE username = ?";
        $stmt = mysqli_prepare($conn, $sql); 
        if($stmt)
        {
            mysqli_stmt_bind_param($stmt, "s", $param_username);

            // Set the value of param username
            $param_username = trim($_POST['username']);

            // Try to execute this statement
            if(mysqli_stmt_execute($stmt)){
                mysqli_stmt_store_result($stmt);
                if(mysqli_stmt_num_rows($stmt) == 1)
                {
                    $username_err = "This username is already exits";
                     $showError=true;     
                }
                else{
                   $username = trim($_POST['username']); 
                }
            }
            else{
                echo "Something went wrong";
            }
            mysqli_stmt_close($stmt);      
        }
    }
// Check for password
if(empty(trim($_POST['password']))){
    $password_err = "Password cannot be blank";
    $showError=true; 
}
elseif(strlen(trim($_POST['password'])) < 5){
    $password_err = "Password cannot be less than 5 characters";
    $showError=true; 
}
else{
    $password = trim($_POST['password']);
}
// Check for confirm password field
if(trim($_POST['password']) !=  trim($_POST['confirm_password'])){
    $password_err = "Passwords should match";
    $showError=true; 
}
// If there were no errors, go ahead and insert into the database
if(empty($username_err) && empty($password_err) && empty($confirm_password_err))
{
    $sql = "INSERT INTO users (username, password) VALUES (?, ?)";
    $stmt = mysqli_prepare($conn, $sql);
    if ($stmt)
    {
        mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);
        // Set these parameters
        $param_username = $username;
        $param_password = password_hash($password, PASSWORD_DEFAULT);
        // Try to execute the query
        if (mysqli_stmt_execute($stmt))
        {
            header("location: ../php/Login.php");
        }
        else{
             echo "Something went wrong... cannot redirect!"; 
        }
    }
    mysqli_stmt_close($stmt);
}
mysqli_close($conn);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>SignUp</title>
    <link rel="stylesheet" href="../css/signUp.css" />
</head>
<body>
    <?php require '../php/nav.php'; ?>
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
        <strong>Error!</strong> Passwords do not match or Username Already Exists.
         <button type="button" class="btn-close2" data-bs-dismiss="alert2" aria-label="Close">
         <img src="../img/cross.png" style="width: 20px; height: 20px;">
          </button>
         </div>';
      }
    ?>  
                <form class="form fom2" action="" method="post">

                     <div class="../img/log-img">
                     <img src="../img/loh.jpeg">
                     </div>
                      <div class="log-div">
                    <h2>Sign Up Here</h2>
                    <input type="email" name="user_email" placeholder="Mobile Number or Email">
                    <input type="text" name="username" placeholder="Username">
                    <input type="password" name="password" placeholder="Enter Password ">
                    <input type="password" name="confirm_password" placeholder="Confirm Password">
                     <button  type="submit" class="btnn"><a>Sign Up</a></button>
                   
                    <div class="icons">
                       <div class="signup-down">
                       <hr class="half-width">
                       <span class="or">or</span>
                       <hr class="half-width">
                       <p>Already have an account? <a href="../php/Login.php">Login</a>
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
var closeButton = alert.querySelector(".btn-close");
closeButton.addEventListener('click', function() {
  // Remove the alert element from the DOM
  alert.parentNode.removeChild(alert);
});
</script>        
<script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
</body>
</html>