<?php

session_start();


?>



<!DOCTYPE html>
<html>
  <head>
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

<link rel="stylesheet" type="text/css" href="../css/about.css">
<link rel="stylesheet" type="text/css" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
<title>Learning Hub</title>
</head>
<body>
 <?php require 'nav.php'; ?>
<div class="section">
 <div class="con">
  <div class="con-section dflex">
  <div class="title">
   <h1>Abouts Us</h1>
</div>
<div class="contents">
<h3>Welcome to our online learning platform!</h3>
<p> We offer courses in some of the most in-demand programming languages today, including HTML, CSS, JavaScript, Python, and PHP. 
we've created a variety of resources to support your learning, including video lectures and projects.
 <span class="read-more-text">
 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio quasi quaerat, amet explicabo magnam, nulla porro dolorem itaque
    </span>
</p>
<div class="buttom">
 <a class="read-more-btn" href="#" onclick="toggleClass()">Read More</a>
</div>
</div>
<div class="social">
<a href=""><i class="fab fa-facebook-f"></i></a>
<a href=""><i class="fab fa-twitter"></i></a>
<a href=""><i class="fab fa-instagram"></i></a>
</div>
</div>
<div class="image-section">
 <img src="../img/profile-1.jpg">
</div>
</div>
</div>
</div>
<script>
function toggleClass() {
  var readMoreText = document.getElementsByClassName("read-more-text")[0];
  var button = document.getElementsByClassName("read-more-btn")[0];

  if (readMoreText.style.display === "none") {
    readMoreText.style.display = "inline";
    button.textContent = "Read Less";
  } else {
    readMoreText.style.display = "none";
    button.textContent = "Read More";
  }
}
</script>
</body>
</html>