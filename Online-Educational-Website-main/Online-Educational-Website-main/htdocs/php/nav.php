<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<link rel="stylesheet" type="text/css" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
<link rel="stylesheet" type="text/css" href="../css/kishan.css">
<link rel="stylesheet" type="text/css" href="../css/left.css">
<link rel="stylesheet" type="text/css" href="../css/NAV.css">
<link rel="stylesheet" type="text/css" href="../css/Phone.css">
<link rel="stylesheet" type="text/css" href="../css/cscode.css">
<link rel="stylesheet" type="text/css" href="../css/header.css">
</head>
<body>
    <header class="hed">
 <div class="logo">
 <li><a  class="icons" href="../index.php" aria-current="page" target="_self"><h1>SmartLearners</h1></a></li>
 </div>
<div class="flex">
        <div class="header-left">
       <nav id="navBar"> 
<?php
   if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
    $loggedin = true;
    } 
   else{
      $loggedin=false;
     }       
  echo ' 
  <ul class="fistnav">
  <li><a class="actived" href="../index.php"  target="_self">Home</a></li>
  <li><a href="../php/contact.php" target="_self">Contact</a></li>
  <li><a href="../php/Course.php"target="_self">Course</a></li>
  <li><a href="../php/Projects.php"target="_self">Projects</a></li>
  <li><a href="../php/about.php"target="_self">About</a></li>
  <button id="dark-mode-btn"><img src="../img/dark1.png"></button>
   </ul>';

    echo '<div class="login-signup">';
    if($loggedin) {
        echo '<li><a  name="logout" style="padding:10px 23px; border-radius:5px"  class="active" href="../php/logout.php">Logout</a></li>';
    }
  
    if(!$loggedin) {
        echo '<li style="float:right"><a style="padding:10px 23px; border-radius:5px" class="active"  target="_self" href="../php/SignUp.php">SignUp</a></li>';
        echo '<li style="float:right"><a style="padding:10px 23px; border-radius:5px" class="active"  target="_self" href="../php/Login.php">Login</a></li>';
    }
    echo '</div>';
?>
</nav>
</div>
 <div class="header-right">
<?php
   if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
    $loggedin = true;
    } 
    else{
      $loggedin=false;
   }

    echo '<div class="login-signup">';  
       if($loggedin) {
        echo '<li><a  name="logout" style="padding:10px 23px; border-radius:5px"  class="active" href="../php/logout.php">Logout</a></li>';
    }
    else {   
    echo '<li style="float: right; margin-left: 13px;"><a style="padding:10px 23px; border-radius:5px" class="active"href="../php/SignUp.php" >SignUp</a></li>';
    echo '<li style="float:right; margin-left:13px;"><a style="padding:10px 23px; border-radius:5px" class="active" href="../php/Login.php" >Login</a></li>';
    }
    echo '</div>';
?>
            <div class="hamburger">
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
</div>
    </header>    
<script>
        hamburger = document.querySelector(".hamburger");
        nav = document.querySelector("#navBar");
        hamburger.onclick = function() {
            nav.classList.toggle("actives");
        }
    </script>
</body>
</html>